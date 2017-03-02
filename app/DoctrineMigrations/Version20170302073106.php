<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170302073106 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE base_lookup ADD parent_id INT DEFAULT NULL, DROP parentId');
        $this->addSql('ALTER TABLE base_lookup ADD CONSTRAINT FK_987C296C727ACA70 FOREIGN KEY (parent_id) REFERENCES base_lookup (id)');
        $this->addSql('CREATE INDEX IDX_987C296C727ACA70 ON base_lookup (parent_id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE base_lookup DROP FOREIGN KEY FK_987C296C727ACA70');
        $this->addSql('DROP INDEX IDX_987C296C727ACA70 ON base_lookup');
        $this->addSql('ALTER TABLE base_lookup ADD parentId BIGINT NOT NULL, DROP parent_id');
    }
}
