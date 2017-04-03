<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170403111828 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE fos_user_user ADD address VARCHAR(100) DEFAULT NULL');
        $this->addSql('ALTER TABLE fos_user DROP FOREIGN KEY FK_957A6479727ACA70');
        $this->addSql('DROP INDEX IDX_957A6479727ACA70 ON fos_user');
        $this->addSql('DROP INDEX username_idx ON fos_user');
        $this->addSql('ALTER TABLE fos_user DROP parent_id');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE fos_user ADD parent_id BIGINT DEFAULT NULL');
        $this->addSql('ALTER TABLE fos_user ADD CONSTRAINT FK_957A6479727ACA70 FOREIGN KEY (parent_id) REFERENCES fos_user (id)');
        $this->addSql('CREATE INDEX IDX_957A6479727ACA70 ON fos_user (parent_id)');
        $this->addSql('CREATE INDEX username_idx ON fos_user (username)');
        $this->addSql('ALTER TABLE fos_user_user DROP address');
    }
}
