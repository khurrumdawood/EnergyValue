<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170403154852 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE fos_user_group (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', UNIQUE INDEX UNIQ_583D1F3E5E237E06 (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fos_user_user (id INT AUTO_INCREMENT NOT NULL, parent_id INT DEFAULT NULL, username VARCHAR(255) NOT NULL, username_canonical VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, email_canonical VARCHAR(255) NOT NULL, enabled TINYINT(1) NOT NULL, salt VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, last_login DATETIME DEFAULT NULL, locked TINYINT(1) NOT NULL, expired TINYINT(1) NOT NULL, expires_at DATETIME DEFAULT NULL, confirmation_token VARCHAR(255) DEFAULT NULL, password_requested_at DATETIME DEFAULT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', credentials_expired TINYINT(1) NOT NULL, credentials_expire_at DATETIME DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, date_of_birth DATETIME DEFAULT NULL, firstname VARCHAR(64) DEFAULT NULL, lastname VARCHAR(64) DEFAULT NULL, website VARCHAR(64) DEFAULT NULL, biography VARCHAR(1000) DEFAULT NULL, gender VARCHAR(1) DEFAULT NULL, locale VARCHAR(8) DEFAULT NULL, timezone VARCHAR(64) DEFAULT NULL, phone VARCHAR(64) DEFAULT NULL, facebook_uid VARCHAR(255) DEFAULT NULL, facebook_name VARCHAR(255) DEFAULT NULL, facebook_data LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:json)\', twitter_uid VARCHAR(255) DEFAULT NULL, twitter_name VARCHAR(255) DEFAULT NULL, twitter_data LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:json)\', gplus_uid VARCHAR(255) DEFAULT NULL, gplus_name VARCHAR(255) DEFAULT NULL, gplus_data LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:json)\', token VARCHAR(255) DEFAULT NULL, two_step_code VARCHAR(255) DEFAULT NULL, address VARCHAR(100) DEFAULT NULL, UNIQUE INDEX UNIQ_C560D76192FC23A8 (username_canonical), UNIQUE INDEX UNIQ_C560D761A0D96FBF (email_canonical), INDEX IDX_C560D761727ACA70 (parent_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fos_user_user_group (user_id INT NOT NULL, group_id INT NOT NULL, INDEX IDX_B3C77447A76ED395 (user_id), INDEX IDX_B3C77447FE54D947 (group_id), PRIMARY KEY(user_id, group_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE base_lookup (id BIGINT AUTO_INCREMENT NOT NULL, parent_id BIGINT DEFAULT NULL, is_deleted TINYINT(1) DEFAULT NULL, modifiedby BIGINT NOT NULL, createdon DATETIME NOT NULL, updatedon DATETIME NOT NULL, code VARCHAR(60) NOT NULL, name VARCHAR(60) NOT NULL, description VARCHAR(100) NOT NULL, INDEX IDX_987C296C727ACA70 (parent_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE billing (id BIGINT AUTO_INCREMENT NOT NULL, meter_id BIGINT DEFAULT NULL, is_deleted TINYINT(1) DEFAULT NULL, modifiedby BIGINT NOT NULL, createdon DATETIME NOT NULL, updatedon DATETIME NOT NULL, units NUMERIC(10, 3) NOT NULL, amount NUMERIC(10, 2) NOT NULL, duos NUMERIC(10, 3) NOT NULL, period DATETIME NOT NULL, INDEX IDX_EC224CAA6E15CA9E (meter_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE billing_detail (id BIGINT AUTO_INCREMENT NOT NULL, billing_id BIGINT DEFAULT NULL, type BIGINT DEFAULT NULL, is_deleted TINYINT(1) DEFAULT NULL, modifiedby BIGINT NOT NULL, createdon DATETIME NOT NULL, updatedon DATETIME NOT NULL, code VARCHAR(50) NOT NULL, value VARCHAR(60) NOT NULL, INDEX IDX_6BDC5CC33B025C87 (billing_id), INDEX IDX_6BDC5CC38CDE5729 (type), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE consumption (id BIGINT AUTO_INCREMENT NOT NULL, meter_id BIGINT DEFAULT NULL, is_deleted TINYINT(1) DEFAULT NULL, modifiedby BIGINT NOT NULL, createdon DATETIME NOT NULL, updatedon DATETIME NOT NULL, period DATETIME DEFAULT NULL, bracket INT DEFAULT NULL, unit NUMERIC(10, 3) NOT NULL, INDEX IDX_2CFF2DF96E15CA9E (meter_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contract (id BIGINT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, contract_type BIGINT DEFAULT NULL, is_deleted TINYINT(1) DEFAULT NULL, modifiedby BIGINT NOT NULL, createdon DATETIME NOT NULL, updatedon DATETIME NOT NULL, period DATETIME DEFAULT NULL, notes VARCHAR(200) DEFAULT NULL, value NUMERIC(10, 3) DEFAULT NULL, isDefault TINYINT(1) DEFAULT \'0\' NOT NULL, INDEX IDX_E98F2859A76ED395 (user_id), INDEX IDX_E98F2859E4AB1941 (contract_type), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contract_consumption (id BIGINT AUTO_INCREMENT NOT NULL, contract_id BIGINT NOT NULL, consumption_id BIGINT NOT NULL, is_deleted TINYINT(1) DEFAULT NULL, modifiedby BIGINT NOT NULL, createdon DATETIME NOT NULL, updatedon DATETIME NOT NULL, cost NUMERIC(12, 3) NOT NULL, INDEX IDX_6E54F4342576E0FD (contract_id), INDEX IDX_6E54F434D17C3821 (consumption_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE council (id BIGINT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, council_type BIGINT DEFAULT NULL, is_deleted TINYINT(1) DEFAULT NULL, modifiedby BIGINT NOT NULL, createdon DATETIME NOT NULL, updatedon DATETIME NOT NULL, code VARCHAR(50) NOT NULL, name VARCHAR(50) NOT NULL, description VARCHAR(100) DEFAULT NULL, INDEX IDX_8EF153E2A76ED395 (user_id), INDEX IDX_8EF153E24B51BFE3 (council_type), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lookup (id BIGINT AUTO_INCREMENT NOT NULL, base_lookup_id BIGINT DEFAULT NULL, is_deleted TINYINT(1) DEFAULT NULL, modifiedby BIGINT NOT NULL, createdon DATETIME NOT NULL, updatedon DATETIME NOT NULL, code VARCHAR(50) NOT NULL, name VARCHAR(50) NOT NULL, description VARCHAR(100) NOT NULL, INDEX IDX_F01CB1053A795510 (base_lookup_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE meter (id BIGINT AUTO_INCREMENT NOT NULL, site_id BIGINT DEFAULT NULL, meter_type BIGINT DEFAULT NULL, unit_type BIGINT DEFAULT NULL, is_deleted TINYINT(1) DEFAULT NULL, modifiedby BIGINT NOT NULL, createdon DATETIME NOT NULL, updatedon DATETIME NOT NULL, code VARCHAR(50) NOT NULL, meter_number VARCHAR(50) NOT NULL, description VARCHAR(100) DEFAULT NULL, INDEX IDX_5E010CAEF6BD1646 (site_id), INDEX IDX_5E010CAE71C0A390 (meter_type), INDEX IDX_5E010CAE18B673 (unit_type), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profile (id BIGINT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, is_deleted TINYINT(1) DEFAULT NULL, modifiedby BIGINT NOT NULL, createdon DATETIME NOT NULL, updatedon DATETIME NOT NULL, first_name VARCHAR(50) NOT NULL, last_name VARCHAR(50) NOT NULL, title VARCHAR(50) NOT NULL, email VARCHAR(50) NOT NULL, gender TINYINT(1) DEFAULT \'1\' NOT NULL, address VARCHAR(100) NOT NULL, INDEX IDX_8157AA0FA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE site (id BIGINT AUTO_INCREMENT NOT NULL, council_id BIGINT DEFAULT NULL, site_type BIGINT DEFAULT NULL, is_deleted TINYINT(1) DEFAULT NULL, modifiedby BIGINT NOT NULL, createdon DATETIME NOT NULL, updatedon DATETIME NOT NULL, code VARCHAR(50) NOT NULL, name VARCHAR(50) NOT NULL, description VARCHAR(50) DEFAULT NULL, INDEX IDX_694309E4970B0D6D (council_id), INDEX IDX_694309E4B744EAD0 (site_type), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fos_user (id BIGINT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL, username_canonical VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, email_canonical VARCHAR(255) NOT NULL, enabled TINYINT(1) NOT NULL, salt VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, last_login DATETIME DEFAULT NULL, locked TINYINT(1) NOT NULL, expired TINYINT(1) NOT NULL, expires_at DATETIME DEFAULT NULL, confirmation_token VARCHAR(255) DEFAULT NULL, password_requested_at DATETIME DEFAULT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', credentials_expired TINYINT(1) NOT NULL, credentials_expire_at DATETIME DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, date_of_birth DATETIME DEFAULT NULL, firstname VARCHAR(64) DEFAULT NULL, lastname VARCHAR(64) DEFAULT NULL, website VARCHAR(64) DEFAULT NULL, biography VARCHAR(1000) DEFAULT NULL, gender VARCHAR(1) DEFAULT NULL, locale VARCHAR(8) DEFAULT NULL, timezone VARCHAR(64) DEFAULT NULL, phone VARCHAR(64) DEFAULT NULL, facebook_uid VARCHAR(255) DEFAULT NULL, facebook_name VARCHAR(255) DEFAULT NULL, facebook_data LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:json)\', twitter_uid VARCHAR(255) DEFAULT NULL, twitter_name VARCHAR(255) DEFAULT NULL, twitter_data LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:json)\', gplus_uid VARCHAR(255) DEFAULT NULL, gplus_name VARCHAR(255) DEFAULT NULL, gplus_data LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:json)\', token VARCHAR(255) DEFAULT NULL, two_step_code VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_957A647992FC23A8 (username_canonical), UNIQUE INDEX UNIQ_957A6479A0D96FBF (email_canonical), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE acl_classes (id INT UNSIGNED AUTO_INCREMENT NOT NULL, class_type VARCHAR(200) NOT NULL, UNIQUE INDEX UNIQ_69DD750638A36066 (class_type), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE acl_security_identities (id INT UNSIGNED AUTO_INCREMENT NOT NULL, identifier VARCHAR(200) NOT NULL, username TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_8835EE78772E836AF85E0677 (identifier, username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE acl_object_identities (id INT UNSIGNED AUTO_INCREMENT NOT NULL, parent_object_identity_id INT UNSIGNED DEFAULT NULL, class_id INT UNSIGNED NOT NULL, object_identifier VARCHAR(100) NOT NULL, entries_inheriting TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_9407E5494B12AD6EA000B10 (object_identifier, class_id), INDEX IDX_9407E54977FA751A (parent_object_identity_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE acl_object_identity_ancestors (object_identity_id INT UNSIGNED NOT NULL, ancestor_id INT UNSIGNED NOT NULL, INDEX IDX_825DE2993D9AB4A6 (object_identity_id), INDEX IDX_825DE299C671CEA1 (ancestor_id), PRIMARY KEY(object_identity_id, ancestor_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE acl_entries (id INT UNSIGNED AUTO_INCREMENT NOT NULL, class_id INT UNSIGNED NOT NULL, object_identity_id INT UNSIGNED DEFAULT NULL, security_identity_id INT UNSIGNED NOT NULL, field_name VARCHAR(50) DEFAULT NULL, ace_order SMALLINT UNSIGNED NOT NULL, mask INT NOT NULL, granting TINYINT(1) NOT NULL, granting_strategy VARCHAR(30) NOT NULL, audit_success TINYINT(1) NOT NULL, audit_failure TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_46C8B806EA000B103D9AB4A64DEF17BCE4289BF4 (class_id, object_identity_id, field_name, ace_order), INDEX IDX_46C8B806EA000B103D9AB4A6DF9183C9 (class_id, object_identity_id, security_identity_id), INDEX IDX_46C8B806EA000B10 (class_id), INDEX IDX_46C8B8063D9AB4A6 (object_identity_id), INDEX IDX_46C8B806DF9183C9 (security_identity_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE fos_user_user ADD CONSTRAINT FK_C560D761727ACA70 FOREIGN KEY (parent_id) REFERENCES fos_user_user (id)');
        $this->addSql('ALTER TABLE fos_user_user_group ADD CONSTRAINT FK_B3C77447A76ED395 FOREIGN KEY (user_id) REFERENCES fos_user_user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE fos_user_user_group ADD CONSTRAINT FK_B3C77447FE54D947 FOREIGN KEY (group_id) REFERENCES fos_user_group (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE base_lookup ADD CONSTRAINT FK_987C296C727ACA70 FOREIGN KEY (parent_id) REFERENCES base_lookup (id)');
        $this->addSql('ALTER TABLE billing ADD CONSTRAINT FK_EC224CAA6E15CA9E FOREIGN KEY (meter_id) REFERENCES meter (id)');
        $this->addSql('ALTER TABLE billing_detail ADD CONSTRAINT FK_6BDC5CC33B025C87 FOREIGN KEY (billing_id) REFERENCES billing (id)');
        $this->addSql('ALTER TABLE billing_detail ADD CONSTRAINT FK_6BDC5CC38CDE5729 FOREIGN KEY (type) REFERENCES lookup (id)');
        $this->addSql('ALTER TABLE consumption ADD CONSTRAINT FK_2CFF2DF96E15CA9E FOREIGN KEY (meter_id) REFERENCES meter (id)');
        $this->addSql('ALTER TABLE contract ADD CONSTRAINT FK_E98F2859A76ED395 FOREIGN KEY (user_id) REFERENCES fos_user_user (id)');
        $this->addSql('ALTER TABLE contract ADD CONSTRAINT FK_E98F2859E4AB1941 FOREIGN KEY (contract_type) REFERENCES lookup (id)');
        $this->addSql('ALTER TABLE contract_consumption ADD CONSTRAINT FK_6E54F4342576E0FD FOREIGN KEY (contract_id) REFERENCES contract (id)');
        $this->addSql('ALTER TABLE contract_consumption ADD CONSTRAINT FK_6E54F434D17C3821 FOREIGN KEY (consumption_id) REFERENCES consumption (id)');
        $this->addSql('ALTER TABLE council ADD CONSTRAINT FK_8EF153E2A76ED395 FOREIGN KEY (user_id) REFERENCES fos_user_user (id)');
        $this->addSql('ALTER TABLE council ADD CONSTRAINT FK_8EF153E24B51BFE3 FOREIGN KEY (council_type) REFERENCES lookup (id)');
        $this->addSql('ALTER TABLE lookup ADD CONSTRAINT FK_F01CB1053A795510 FOREIGN KEY (base_lookup_id) REFERENCES base_lookup (id)');
        $this->addSql('ALTER TABLE meter ADD CONSTRAINT FK_5E010CAEF6BD1646 FOREIGN KEY (site_id) REFERENCES site (id)');
        $this->addSql('ALTER TABLE meter ADD CONSTRAINT FK_5E010CAE71C0A390 FOREIGN KEY (meter_type) REFERENCES lookup (id)');
        $this->addSql('ALTER TABLE meter ADD CONSTRAINT FK_5E010CAE18B673 FOREIGN KEY (unit_type) REFERENCES lookup (id)');
        $this->addSql('ALTER TABLE profile ADD CONSTRAINT FK_8157AA0FA76ED395 FOREIGN KEY (user_id) REFERENCES fos_user_user (id)');
        $this->addSql('ALTER TABLE site ADD CONSTRAINT FK_694309E4970B0D6D FOREIGN KEY (council_id) REFERENCES council (id)');
        $this->addSql('ALTER TABLE site ADD CONSTRAINT FK_694309E4B744EAD0 FOREIGN KEY (site_type) REFERENCES lookup (id)');
        $this->addSql('ALTER TABLE acl_object_identities ADD CONSTRAINT FK_9407E54977FA751A FOREIGN KEY (parent_object_identity_id) REFERENCES acl_object_identities (id)');
        $this->addSql('ALTER TABLE acl_object_identity_ancestors ADD CONSTRAINT FK_825DE2993D9AB4A6 FOREIGN KEY (object_identity_id) REFERENCES acl_object_identities (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE acl_object_identity_ancestors ADD CONSTRAINT FK_825DE299C671CEA1 FOREIGN KEY (ancestor_id) REFERENCES acl_object_identities (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE acl_entries ADD CONSTRAINT FK_46C8B806EA000B10 FOREIGN KEY (class_id) REFERENCES acl_classes (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE acl_entries ADD CONSTRAINT FK_46C8B8063D9AB4A6 FOREIGN KEY (object_identity_id) REFERENCES acl_object_identities (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE acl_entries ADD CONSTRAINT FK_46C8B806DF9183C9 FOREIGN KEY (security_identity_id) REFERENCES acl_security_identities (id) ON UPDATE CASCADE ON DELETE CASCADE');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE fos_user_user_group DROP FOREIGN KEY FK_B3C77447FE54D947');
        $this->addSql('ALTER TABLE fos_user_user DROP FOREIGN KEY FK_C560D761727ACA70');
        $this->addSql('ALTER TABLE fos_user_user_group DROP FOREIGN KEY FK_B3C77447A76ED395');
        $this->addSql('ALTER TABLE contract DROP FOREIGN KEY FK_E98F2859A76ED395');
        $this->addSql('ALTER TABLE council DROP FOREIGN KEY FK_8EF153E2A76ED395');
        $this->addSql('ALTER TABLE profile DROP FOREIGN KEY FK_8157AA0FA76ED395');
        $this->addSql('ALTER TABLE base_lookup DROP FOREIGN KEY FK_987C296C727ACA70');
        $this->addSql('ALTER TABLE lookup DROP FOREIGN KEY FK_F01CB1053A795510');
        $this->addSql('ALTER TABLE billing_detail DROP FOREIGN KEY FK_6BDC5CC33B025C87');
        $this->addSql('ALTER TABLE contract_consumption DROP FOREIGN KEY FK_6E54F434D17C3821');
        $this->addSql('ALTER TABLE contract_consumption DROP FOREIGN KEY FK_6E54F4342576E0FD');
        $this->addSql('ALTER TABLE site DROP FOREIGN KEY FK_694309E4970B0D6D');
        $this->addSql('ALTER TABLE billing_detail DROP FOREIGN KEY FK_6BDC5CC38CDE5729');
        $this->addSql('ALTER TABLE contract DROP FOREIGN KEY FK_E98F2859E4AB1941');
        $this->addSql('ALTER TABLE council DROP FOREIGN KEY FK_8EF153E24B51BFE3');
        $this->addSql('ALTER TABLE meter DROP FOREIGN KEY FK_5E010CAE71C0A390');
        $this->addSql('ALTER TABLE meter DROP FOREIGN KEY FK_5E010CAE18B673');
        $this->addSql('ALTER TABLE site DROP FOREIGN KEY FK_694309E4B744EAD0');
        $this->addSql('ALTER TABLE billing DROP FOREIGN KEY FK_EC224CAA6E15CA9E');
        $this->addSql('ALTER TABLE consumption DROP FOREIGN KEY FK_2CFF2DF96E15CA9E');
        $this->addSql('ALTER TABLE meter DROP FOREIGN KEY FK_5E010CAEF6BD1646');
        $this->addSql('ALTER TABLE acl_entries DROP FOREIGN KEY FK_46C8B806EA000B10');
        $this->addSql('ALTER TABLE acl_entries DROP FOREIGN KEY FK_46C8B806DF9183C9');
        $this->addSql('ALTER TABLE acl_object_identities DROP FOREIGN KEY FK_9407E54977FA751A');
        $this->addSql('ALTER TABLE acl_object_identity_ancestors DROP FOREIGN KEY FK_825DE2993D9AB4A6');
        $this->addSql('ALTER TABLE acl_object_identity_ancestors DROP FOREIGN KEY FK_825DE299C671CEA1');
        $this->addSql('ALTER TABLE acl_entries DROP FOREIGN KEY FK_46C8B8063D9AB4A6');
        $this->addSql('DROP TABLE fos_user_group');
        $this->addSql('DROP TABLE fos_user_user');
        $this->addSql('DROP TABLE fos_user_user_group');
        $this->addSql('DROP TABLE base_lookup');
        $this->addSql('DROP TABLE billing');
        $this->addSql('DROP TABLE billing_detail');
        $this->addSql('DROP TABLE consumption');
        $this->addSql('DROP TABLE contract');
        $this->addSql('DROP TABLE contract_consumption');
        $this->addSql('DROP TABLE council');
        $this->addSql('DROP TABLE lookup');
        $this->addSql('DROP TABLE meter');
        $this->addSql('DROP TABLE profile');
        $this->addSql('DROP TABLE site');
        $this->addSql('DROP TABLE fos_user');
        $this->addSql('DROP TABLE acl_classes');
        $this->addSql('DROP TABLE acl_security_identities');
        $this->addSql('DROP TABLE acl_object_identities');
        $this->addSql('DROP TABLE acl_object_identity_ancestors');
        $this->addSql('DROP TABLE acl_entries');
    }
}
