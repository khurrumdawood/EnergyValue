<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170302124159 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE billing_detail (id INT AUTO_INCREMENT NOT NULL, billing_id INT DEFAULT NULL, type_id INT DEFAULT NULL, is_deleted TINYINT(1) DEFAULT NULL, modifiedby BIGINT NOT NULL, createdon DATETIME NOT NULL, updatedon DATETIME NOT NULL, code VARCHAR(50) NOT NULL, value VARCHAR(60) NOT NULL, INDEX IDX_6BDC5CC33B025C87 (billing_id), INDEX IDX_6BDC5CC3C54C8C93 (type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lookup (id INT AUTO_INCREMENT NOT NULL, base_lookup_id INT DEFAULT NULL, is_deleted TINYINT(1) DEFAULT NULL, modifiedby BIGINT NOT NULL, createdon DATETIME NOT NULL, updatedon DATETIME NOT NULL, code VARCHAR(50) NOT NULL, name VARCHAR(50) NOT NULL, description VARCHAR(100) NOT NULL, INDEX IDX_F01CB1053A795510 (base_lookup_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE billing_detail ADD CONSTRAINT FK_6BDC5CC33B025C87 FOREIGN KEY (billing_id) REFERENCES billing (id)');
        $this->addSql('ALTER TABLE billing_detail ADD CONSTRAINT FK_6BDC5CC3C54C8C93 FOREIGN KEY (type_id) REFERENCES lookup (id)');
        $this->addSql('ALTER TABLE lookup ADD CONSTRAINT FK_F01CB1053A795510 FOREIGN KEY (base_lookup_id) REFERENCES base_lookup (id)');
        $this->addSql('ALTER TABLE council ADD council_type_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE council ADD CONSTRAINT FK_8EF153E2B2D47897 FOREIGN KEY (council_type_id) REFERENCES lookup (id)');
        $this->addSql('CREATE INDEX IDX_8EF153E2B2D47897 ON council (council_type_id)');
        $this->addSql('ALTER TABLE meter ADD meter_type_id INT DEFAULT NULL, ADD unit_type_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE meter ADD CONSTRAINT FK_5E010CAE851C502B FOREIGN KEY (meter_type_id) REFERENCES lookup (id)');
        $this->addSql('ALTER TABLE meter ADD CONSTRAINT FK_5E010CAE91058251 FOREIGN KEY (unit_type_id) REFERENCES lookup (id)');
        $this->addSql('CREATE INDEX IDX_5E010CAE851C502B ON meter (meter_type_id)');
        $this->addSql('CREATE INDEX IDX_5E010CAE91058251 ON meter (unit_type_id)');
        $this->addSql('ALTER TABLE site ADD site_type_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE site ADD CONSTRAINT FK_694309E43EE86E58 FOREIGN KEY (site_type_id) REFERENCES lookup (id)');
        $this->addSql('CREATE INDEX IDX_694309E43EE86E58 ON site (site_type_id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE billing_detail DROP FOREIGN KEY FK_6BDC5CC3C54C8C93');
        $this->addSql('ALTER TABLE council DROP FOREIGN KEY FK_8EF153E2B2D47897');
        $this->addSql('ALTER TABLE meter DROP FOREIGN KEY FK_5E010CAE851C502B');
        $this->addSql('ALTER TABLE meter DROP FOREIGN KEY FK_5E010CAE91058251');
        $this->addSql('ALTER TABLE site DROP FOREIGN KEY FK_694309E43EE86E58');
        $this->addSql('DROP TABLE billing_detail');
        $this->addSql('DROP TABLE lookup');
        $this->addSql('DROP INDEX IDX_8EF153E2B2D47897 ON council');
        $this->addSql('ALTER TABLE council DROP council_type_id');
        $this->addSql('DROP INDEX IDX_5E010CAE851C502B ON meter');
        $this->addSql('DROP INDEX IDX_5E010CAE91058251 ON meter');
        $this->addSql('ALTER TABLE meter DROP meter_type_id, DROP unit_type_id');
        $this->addSql('DROP INDEX IDX_694309E43EE86E58 ON site');
        $this->addSql('ALTER TABLE site DROP site_type_id');
    }
}
