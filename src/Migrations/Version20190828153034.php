<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190828153034 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE category ADD createdAt DATETIME NOT NULL, ADD editAt DATETIME NOT NULL');
        $this->addSql('ALTER TABLE spot ADD createdAt DATETIME NOT NULL, ADD editAt DATETIME NOT NULL');
        $this->addSql('ALTER TABLE prestation ADD createdAt DATETIME NOT NULL, ADD editAt DATETIME NOT NULL');
        $this->addSql('ALTER TABLE availability ADD createdAt DATETIME NOT NULL, ADD editAt DATETIME NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE availability DROP createdAt, DROP editAt');
        $this->addSql('ALTER TABLE category DROP createdAt, DROP editAt');
        $this->addSql('ALTER TABLE prestation DROP createdAt, DROP editAt');
        $this->addSql('ALTER TABLE spot DROP createdAt, DROP editAt');
    }
}
