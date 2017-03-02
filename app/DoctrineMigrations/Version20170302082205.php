<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170302082205 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE base_lookup ADD createdon DATETIME NOT NULL, ADD updatedon DATETIME NOT NULL, DROP createdAt, DROP updatedAt, CHANGE isdeleted is_deleted TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE profile ADD is_deleted TINYINT(1) DEFAULT NULL, ADD createdon DATETIME NOT NULL, ADD updatedon DATETIME NOT NULL, ADD first_name VARCHAR(50) NOT NULL, ADD last_name VARCHAR(50) NOT NULL, DROP firstName, DROP lastName, DROP isDeleted, DROP createdAt, DROP updatedAt, CHANGE modifiedBy modifiedby BIGINT NOT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE base_lookup ADD createdAt DATETIME NOT NULL, ADD updatedAt DATETIME NOT NULL, DROP createdon, DROP updatedon, CHANGE is_deleted isDeleted TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE profile ADD firstName VARCHAR(50) NOT NULL COLLATE utf8_unicode_ci, ADD lastName VARCHAR(50) NOT NULL COLLATE utf8_unicode_ci, ADD isDeleted TINYINT(1) DEFAULT \'0\' NOT NULL, ADD createdAt DATETIME DEFAULT NULL, ADD updatedAt DATETIME DEFAULT NULL, DROP is_deleted, DROP createdon, DROP updatedon, DROP first_name, DROP last_name, CHANGE modifiedby modifiedBy BIGINT DEFAULT NULL');
    }
}
