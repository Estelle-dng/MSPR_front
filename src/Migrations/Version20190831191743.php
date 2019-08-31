<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190831191743 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE spot (id INT AUTO_INCREMENT NOT NULL, category_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_B9327A7312469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE season (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, date_start DATE NOT NULL, date_end DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `option` (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category_has_season (id INT AUTO_INCREMENT NOT NULL, season_id INT DEFAULT NULL, category_id INT DEFAULT NULL, command_details_id INT DEFAULT NULL, price DOUBLE PRECISION NOT NULL, INDEX IDX_FAD81C4C4EC001D1 (season_id), INDEX IDX_FAD81C4C12469DE2 (category_id), INDEX IDX_FAD81C4C2C4FEFE5 (command_details_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE command_details_has_option (id INT AUTO_INCREMENT NOT NULL, options_id INT DEFAULT NULL, price DOUBLE PRECISION NOT NULL, INDEX IDX_1896D8613ADB05F1 (options_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE spot ADD CONSTRAINT FK_B9327A7312469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE category_has_season ADD CONSTRAINT FK_FAD81C4C4EC001D1 FOREIGN KEY (season_id) REFERENCES season (id)');
        $this->addSql('ALTER TABLE category_has_season ADD CONSTRAINT FK_FAD81C4C12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE category_has_season ADD CONSTRAINT FK_FAD81C4C2C4FEFE5 FOREIGN KEY (command_details_id) REFERENCES command_details (id)');
        $this->addSql('ALTER TABLE command_details_has_option ADD CONSTRAINT FK_1896D8613ADB05F1 FOREIGN KEY (options_id) REFERENCES `option` (id)');
        $this->addSql('ALTER TABLE command_details ADD command_details_has_option_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE command_details ADD CONSTRAINT FK_9D4C58697FD91D59 FOREIGN KEY (command_details_has_option_id) REFERENCES command_details_has_option (id)');
        $this->addSql('CREATE INDEX IDX_9D4C58697FD91D59 ON command_details (command_details_has_option_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE spot DROP FOREIGN KEY FK_B9327A7312469DE2');
        $this->addSql('ALTER TABLE category_has_season DROP FOREIGN KEY FK_FAD81C4C12469DE2');
        $this->addSql('ALTER TABLE category_has_season DROP FOREIGN KEY FK_FAD81C4C4EC001D1');
        $this->addSql('ALTER TABLE command_details_has_option DROP FOREIGN KEY FK_1896D8613ADB05F1');
        $this->addSql('ALTER TABLE command_details DROP FOREIGN KEY FK_9D4C58697FD91D59');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE spot');
        $this->addSql('DROP TABLE season');
        $this->addSql('DROP TABLE `option`');
        $this->addSql('DROP TABLE category_has_season');
        $this->addSql('DROP TABLE command_details_has_option');
        $this->addSql('DROP INDEX IDX_9D4C58697FD91D59 ON command_details');
        $this->addSql('ALTER TABLE command_details DROP command_details_has_option_id');
    }
}
