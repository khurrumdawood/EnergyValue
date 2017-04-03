<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170322094702 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE fos_user_user ADD parent_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE fos_user_user ADD CONSTRAINT FK_C560D761727ACA70 FOREIGN KEY (parent_id) REFERENCES fos_user_user (id)');
        $this->addSql('CREATE INDEX IDX_C560D761727ACA70 ON fos_user_user (parent_id)');
        $this->addSql('ALTER TABLE fos_user_user_group CHANGE user_id user_id INT NOT NULL');
        $this->addSql('ALTER TABLE fos_user_user_group ADD CONSTRAINT FK_B3C77447A76ED395 FOREIGN KEY (user_id) REFERENCES fos_user_user (id) ON DELETE CASCADE');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE fos_user_user DROP FOREIGN KEY FK_C560D761727ACA70');
        $this->addSql('DROP INDEX IDX_C560D761727ACA70 ON fos_user_user');
        $this->addSql('ALTER TABLE fos_user_user DROP parent_id');
        $this->addSql('ALTER TABLE fos_user_user_group DROP FOREIGN KEY FK_B3C77447A76ED395');
        $this->addSql('ALTER TABLE fos_user_user_group CHANGE user_id user_id BIGINT NOT NULL');
    }
}
