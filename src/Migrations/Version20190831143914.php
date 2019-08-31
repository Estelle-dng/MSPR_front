<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190831143914 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE category_season DROP FOREIGN KEY FK_FF0C91D212469DE2');
        $this->addSql('ALTER TABLE spot DROP FOREIGN KEY FK_B9327A7312469DE2');
        $this->addSql('ALTER TABLE option_command_details DROP FOREIGN KEY FK_516E291A7C41D6F');
        $this->addSql('ALTER TABLE category_season DROP FOREIGN KEY FK_FF0C91D24EC001D1');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE category_season');
        $this->addSql('DROP TABLE `option`');
        $this->addSql('DROP TABLE option_command_details');
        $this->addSql('DROP TABLE season');
        $this->addSql('DROP TABLE spot');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE category_season (category_id INT NOT NULL, season_id INT NOT NULL, INDEX IDX_FF0C91D212469DE2 (category_id), INDEX IDX_FF0C91D24EC001D1 (season_id), PRIMARY KEY(category_id, season_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE `option` (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, price DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE option_command_details (option_id INT NOT NULL, command_details_id INT NOT NULL, INDEX IDX_516E291A7C41D6F (option_id), INDEX IDX_516E2912C4FEFE5 (command_details_id), PRIMARY KEY(option_id, command_details_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE season (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, date_start DATE NOT NULL, date_end DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE spot (id INT AUTO_INCREMENT NOT NULL, category_id INT NOT NULL, name VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, INDEX IDX_B9327A7312469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE category_season ADD CONSTRAINT FK_FF0C91D212469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE category_season ADD CONSTRAINT FK_FF0C91D24EC001D1 FOREIGN KEY (season_id) REFERENCES season (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE option_command_details ADD CONSTRAINT FK_516E2912C4FEFE5 FOREIGN KEY (command_details_id) REFERENCES command_details (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE option_command_details ADD CONSTRAINT FK_516E291A7C41D6F FOREIGN KEY (option_id) REFERENCES `option` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE spot ADD CONSTRAINT FK_B9327A7312469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
    }
}
