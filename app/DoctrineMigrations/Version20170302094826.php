<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170302094826 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE meter ADD is_deleted TINYINT(1) DEFAULT NULL, ADD createdon DATETIME NOT NULL, ADD updatedon DATETIME NOT NULL, DROP isDeleted, DROP createdAt, DROP updatedAt, CHANGE meternumber meter_number VARCHAR(50) NOT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE meter ADD isDeleted TINYINT(1) DEFAULT \'0\' NOT NULL, ADD createdAt DATETIME NOT NULL, ADD updatedAt DATETIME NOT NULL, DROP is_deleted, DROP createdon, DROP updatedon, CHANGE meter_number meterNumber VARCHAR(50) NOT NULL COLLATE utf8_unicode_ci');
    }
}
