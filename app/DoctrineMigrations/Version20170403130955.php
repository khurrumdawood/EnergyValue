<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170403130955 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE contract DROP FOREIGN KEY FK_E98F2859CCFA12B8');
        $this->addSql('DROP INDEX IDX_E98F2859CCFA12B8 ON contract');
        $this->addSql('ALTER TABLE contract ADD user_id INT DEFAULT NULL, DROP profile_id');
        $this->addSql('ALTER TABLE contract ADD CONSTRAINT FK_E98F2859A76ED395 FOREIGN KEY (user_id) REFERENCES fos_user_user (id)');
        $this->addSql('CREATE INDEX IDX_E98F2859A76ED395 ON contract (user_id)');
        $this->addSql('ALTER TABLE council DROP FOREIGN KEY FK_8EF153E2CCFA12B8');
        $this->addSql('DROP INDEX IDX_8EF153E2CCFA12B8 ON council');
        $this->addSql('ALTER TABLE council ADD user_id INT DEFAULT NULL, DROP profile_id');
        $this->addSql('ALTER TABLE council ADD CONSTRAINT FK_8EF153E2A76ED395 FOREIGN KEY (user_id) REFERENCES fos_user_user (id)');
        $this->addSql('CREATE INDEX IDX_8EF153E2A76ED395 ON council (user_id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE contract DROP FOREIGN KEY FK_E98F2859A76ED395');
        $this->addSql('DROP INDEX IDX_E98F2859A76ED395 ON contract');
        $this->addSql('ALTER TABLE contract ADD profile_id BIGINT DEFAULT NULL, DROP user_id');
        $this->addSql('ALTER TABLE contract ADD CONSTRAINT FK_E98F2859CCFA12B8 FOREIGN KEY (profile_id) REFERENCES profile (id)');
        $this->addSql('CREATE INDEX IDX_E98F2859CCFA12B8 ON contract (profile_id)');
        $this->addSql('ALTER TABLE council DROP FOREIGN KEY FK_8EF153E2A76ED395');
        $this->addSql('DROP INDEX IDX_8EF153E2A76ED395 ON council');
        $this->addSql('ALTER TABLE council ADD profile_id BIGINT DEFAULT NULL, DROP user_id');
        $this->addSql('ALTER TABLE council ADD CONSTRAINT FK_8EF153E2CCFA12B8 FOREIGN KEY (profile_id) REFERENCES profile (id)');
        $this->addSql('CREATE INDEX IDX_8EF153E2CCFA12B8 ON council (profile_id)');
    }
}
