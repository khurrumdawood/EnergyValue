<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170301113231 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE council (id INT AUTO_INCREMENT NOT NULL, profile_id INT DEFAULT NULL, code VARCHAR(10) NOT NULL, name VARCHAR(50) NOT NULL, description VARCHAR(100) DEFAULT NULL, isDeleted TINYINT(1) DEFAULT \'0\' NOT NULL, modifiedBy BIGINT NOT NULL, updatedAt DATETIME NOT NULL, createdAt DATETIME NOT NULL, INDEX IDX_8EF153E2CCFA12B8 (profile_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE council ADD CONSTRAINT FK_8EF153E2CCFA12B8 FOREIGN KEY (profile_id) REFERENCES profile (id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE council');
    }
}
