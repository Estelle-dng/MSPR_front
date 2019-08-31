<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190831194932 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE category_has_season DROP FOREIGN KEY FK_FAD81C4C2C4FEFE5');
        $this->addSql('DROP INDEX IDX_FAD81C4C2C4FEFE5 ON category_has_season');
        $this->addSql('ALTER TABLE category_has_season DROP command_details_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE category_has_season ADD command_details_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE category_has_season ADD CONSTRAINT FK_FAD81C4C2C4FEFE5 FOREIGN KEY (command_details_id) REFERENCES command_details (id)');
        $this->addSql('CREATE INDEX IDX_FAD81C4C2C4FEFE5 ON category_has_season (command_details_id)');
    }
}
