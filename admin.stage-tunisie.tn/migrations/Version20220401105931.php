<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220401105931 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE emailsubscription (id INT AUTO_INCREMENT NOT NULL, id_membre_id INT DEFAULT NULL, actif TINYINT(1) NOT NULL, email VARCHAR(255) NOT NULL, nom VARCHAR(255) DEFAULT NULL, prenom VARCHAR(255) DEFAULT NULL, type INT DEFAULT NULL, date_add DATE NOT NULL, UNIQUE INDEX UNIQ_EBBBAA9AEAAC4B6D (id_membre_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE emailsubscription ADD CONSTRAINT FK_EBBBAA9AEAAC4B6D FOREIGN KEY (id_membre_id) REFERENCES membres (id)');
        $this->addSql('ALTER TABLE membres CHANGE tel tel VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE membres RENAME INDEX idx_594ae39c9777d11e TO IDX_594AE39C12469DE2');
        $this->addSql('ALTER TABLE membres RENAME INDEX idx_594ae39c1decb9c6 TO IDX_594AE39C57889920');
        $this->addSql('ALTER TABLE membres RENAME INDEX idx_594ae39ceae6f2d2 TO IDX_594AE39CCCF9E01E');
        $this->addSql('ALTER TABLE membres RENAME INDEX idx_594ae39cf0c17188 TO IDX_594AE39CA73F0036');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE emailsubscription');
        $this->addSql('ALTER TABLE membres CHANGE tel tel VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE membres RENAME INDEX idx_594ae39c57889920 TO IDX_594AE39C1DECB9C6');
        $this->addSql('ALTER TABLE membres RENAME INDEX idx_594ae39ca73f0036 TO IDX_594AE39CF0C17188');
        $this->addSql('ALTER TABLE membres RENAME INDEX idx_594ae39c12469de2 TO IDX_594AE39C9777D11E');
        $this->addSql('ALTER TABLE membres RENAME INDEX idx_594ae39cccf9e01e TO IDX_594AE39CEAE6F2D2');
    }
}
