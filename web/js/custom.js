function show_chart(showcharturl){
    $.blockUI({ message: '<h1>Please Wait ...</h1>' });

    $.ajax({
        url: showcharturl,
        type: 'POST',
        dataType: 'json',
        data: {
            time_period: $("#time_period").val(),
            utility_type: $("#utility_type").val(),
            council: $("#councils_list").val(),
            site: $("#sites_list").val(),
            chart_for: $("#chart_for").val(),
        },
        error: function () {
            alert('Error');
        },
        success: function (result) {
            $.unblockUI() ;

            var response = new Array();

            $.each(result.graph_series, function (index, value) {
                response.push([index, Number(value)]);
            });

            var title = result.title;

            showmap('spline','spline_chart',title,'KWH',response);
            showmap('pie','pie_chart',title,'KWH',response);
            showmap('column','column_chart',title,'KWH',response);
        }
    });
}

function load_chart_and_sites_list(showcharturl, showsiteslisturl){

    $.blockUI({ message: '<h1>Please Wait ...</h1>' });

    $.ajax({
        url: showsiteslisturl,
        type: 'POST',
        data: {
            council: $("#councils_list").val()
        },
        error: function () {
            alert('Error');
        },
        success: function (result) {
            $('#sites_list').html(result);
            document.getElementById("select2-chosen-4").innerHTML = "Select Site";

            $.unblockUI() ;
            show_chart(showcharturl);
        }
    });
}

function goback(hidediv,showdiv){
    $("#"+hidediv).hide();
    $("#"+showdiv).show();
}

$(document ).ready(function() {
    $('#change_chart').extraBox({ attribute: 'class' });
    $('#time_period').extraBox({ attribute: 'class' });
    $('#time_period').data('extraBox').disable('op4');

    $('#change_chart').on('change', function() {
        if (this.value != "") {
            var selected_value = this.value;
            if(selected_value == "1"){
                $('#pie_chart').hide();
                $('#column_chart').hide();
                $('#spline_chart').show();
                $('#change_chart').data('extraBox').disable('op1');
                $('#change_chart').data('extraBox').enable('op2');
                $('#change_chart').data('extraBox').enable('op3');
            }else if(selected_value == "2"){
                $('#pie_chart').show();
                $('#column_chart').hide();
                $('#spline_chart').hide();
                $('#change_chart').data('extraBox').enable('op1');
                $('#change_chart').data('extraBox').disable('op2');
                $('#change_chart').data('extraBox').enable('op3');
            }else if(selected_value == "3"){
                $('#pie_chart').hide();
                $('#column_chart').show();
                $('#spline_chart').hide();
                $('#change_chart').data('extraBox').enable('op1');
                $('#change_chart').data('extraBox').enable('op2');
                $('#change_chart').data('extraBox').disable('op3');
            }
        }
    });
});

function showmap(chart_type, chart_container, title, y_axis_title, chartresults) {

    var map_for = $("#chart_for").val();
    var vertical_title = '';
    var point_format_before = '';
    var point_format_after = '';
    if(map_for == "cost_in"){
        vertical_title = 'Cost in (£)';
        point_format_before = 'Amount';
        point_format_after = '£';
    }else{
        var unit_type = $("#utility_type").val();
        if(unit_type == 7){
            vertical_title = 'EHV';
            point_format_before = "Units";
            point_format_after = "EHV";
            $("#kwh").text('EHV');
        }else{
            vertical_title = 'KWH';
            point_format_before = "Units";
            point_format_after = "KWH";
            $("#kwh").text('KWH');
        }

    }

    Highcharts.chart(chart_container, {
         chart: {
             type: chart_type
         },
         title: {
             text: title
         },
         xAxis: {
             type: 'category',
             labels: {
                 rotation: -45,
                 style: {
                     fontSize: '13px',
                     fontFamily: 'Verdana, sans-serif'
                 }
             }
         },
         yAxis: {
             min: 0,
             title: {
                 text: vertical_title
             }
         },
         legend: {
             enabled: false
         },
         credits: {
             enabled: false
         },
         tooltip: {
             pointFormat: point_format_before+' <b>{point.y:.1f}</b> '+point_format_after
         },
         plotOptions: {
             pie: {
                 dataLabels: {
                     enabled: false
                 }
             }
         },
         series: [{
             name: 'Population',
             data: chartresults
         }]
     });
 }

 (function($) {

     // Create ExtraBox object
     function ExtraBox(el, options) {

         // Default options for the plugin:
         // attribute - the attribute that is used to match enabled and
         //             disabled commands. Default is class. Can be any
         //             DOM attribute value
         this.defaults = {
             attribute: 'class'
         };

         this.opts = $.extend({}, this.defaults, options);
         this.$el = $(el);
         this.items = new Array();
     };

     ExtraBox.prototype = {

         //saves the list
         init: function() {
             var _this = this;
             $('option', this.$el).each(function(i, obj) {
                 var $el = $(obj);
                 $el.data('status', 'enabled');
                 _this.items.push({
                     attribute: $el.attr(_this.opts.attribute),
                     $el: $el
                 });
             });
         },
         //disabled items that match the key
         disable: function(key){
             $.each(this.items, function(i, item){
                 if(item.attribute == key){
                     item.$el.remove();
                     item.$el.data('status', 'disabled');
                 }
             });
         },
         //enabled items that match the key
         enable: function(key){
             var _this = this;
             $.each(this.items, function(i, item){
                 if(item.attribute == key){

                     var t = i + 1;
                     while(true)
                     {
                         if(t < _this.items.length) {
                             if(_this.items[t].$el.data('status') == 'enabled')  {
                                 _this.items[t].$el.before(item.$el);
                                 item.$el.data('status', 'enabled');
                                 break;
                             }
                             else {
                                 t++;
                             }
                         }
                         else {                                                                               _this.$el.append(item.$el);
                             item.$el.data('status', 'enabled');
                             break;
                         }
                     }
                 }
             });
         }
     };

     $.fn.extraBox = function(options) {
         if (this.length) {
             this.each(function() {
                 var rev = new ExtraBox(this, options);
                 rev.init();
                 $(this).data('extraBox', rev);
             });
         }
     };
 })(jQuery);