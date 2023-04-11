<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220324090947 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE fonctions (id INT AUTO_INCREMENT NOT NULL, categorie_id_id INT DEFAULT NULL, titre VARCHAR(255) NOT NULL, status TINYINT(1) NOT NULL, INDEX IDX_AED700EF8A3C7387 (categorie_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE fonctions ADD CONSTRAINT FK_AED700EF8A3C7387 FOREIGN KEY (categorie_id_id) REFERENCES categories (id)');
        $this->addSql('ALTER TABLE ecoles CHANGE status status TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE fonctions');
        $this->addSql('ALTER TABLE ecoles CHANGE status status TINYINT(1) DEFAULT 0 NOT NULL');
    }
}
