<?php
// src/VaultBundle/Services/Helper.php

namespace VaultBundle\Services;


use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class Helper
{
    public function convertBracket($bracket)
    {

        $time = number_format($bracket / 2, 2);
        $x = explode('.', $time);
        $min = 60 * ($x[1] / 100);

        $hlen = strlen($x[0]);
        // correcting the hours format
        if ($hlen < 2) {
            $x[0] = '0' . $x[0];
        }

        //correct the min format

        $mlen = strlen($min);
        if ($mlen < 2) {
            $min = '0' . $min;
        }
        return $x[0] . ': ' . $min;

    }
}