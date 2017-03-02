<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170301141130 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE billing (id INT AUTO_INCREMENT NOT NULL, merter_id INT DEFAULT NULL, units NUMERIC(10, 2) NOT NULL, amount NUMERIC(10, 2) NOT NULL, duos NUMERIC(10, 2) NOT NULL, period DATETIME NOT NULL, isDeleted TINYINT(1) NOT NULL, modifiedBy BIGINT NOT NULL, createdAt DATETIME NOT NULL, updatedAt DATETIME NOT NULL, INDEX IDX_EC224CAA318EDE5F (merter_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE billing ADD CONSTRAINT FK_EC224CAA318EDE5F FOREIGN KEY (merter_id) REFERENCES meter (id)');
        $this->addSql('ALTER TABLE council CHANGE code code VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE meter CHANGE code code VARCHAR(50) NOT NULL, CHANGE isDeleted isDeleted TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE profile CHANGE firstName firstName VARCHAR(50) NOT NULL, CHANGE lastName lastName VARCHAR(50) NOT NULL, CHANGE title title VARCHAR(50) NOT NULL, CHANGE address address VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE site CHANGE code code VARCHAR(50) NOT NULL, CHANGE isDeleted isDeleted TINYINT(1) DEFAULT \'0\'');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE billing');
        $this->addSql('ALTER TABLE council CHANGE code code VARCHAR(10) NOT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE meter CHANGE code code VARCHAR(10) NOT NULL COLLATE utf8_unicode_ci, CHANGE isDeleted isDeleted TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE profile CHANGE firstName firstName VARCHAR(20) NOT NULL COLLATE utf8_unicode_ci, CHANGE lastName lastName VARCHAR(20) NOT NULL COLLATE utf8_unicode_ci, CHANGE title title VARCHAR(20) NOT NULL COLLATE utf8_unicode_ci, CHANGE address address VARCHAR(50) NOT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE site CHANGE code code VARCHAR(10) NOT NULL COLLATE utf8_unicode_ci, CHANGE isDeleted isDeleted TINYINT(1) DEFAULT NULL');
    }
}
