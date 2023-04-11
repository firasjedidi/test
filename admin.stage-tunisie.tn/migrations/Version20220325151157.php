<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220325151157 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE membres (id INT AUTO_INCREMENT NOT NULL, category_id_id INT DEFAULT NULL, fonction_id_id INT DEFAULT NULL, departement_id_id INT NOT NULL, ville_id_id INT NOT NULL, type INT NOT NULL, civilite INT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, autre_fonction VARCHAR(255) DEFAULT NULL, tel VARCHAR(255) DEFAULT NULL, fax VARCHAR(255) DEFAULT NULL, mot_passe VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, siren_entreprise VARCHAR(255) DEFAULT NULL, siret_entreprise VARCHAR(255) DEFAULT NULL, raison_social VARCHAR(255) DEFAULT NULL, effectifs_entreprise INT DEFAULT NULL, chiffre_affaire DOUBLE PRECISION DEFAULT NULL, adresse VARCHAR(255) DEFAULT NULL, site_web VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, photo VARCHAR(255) DEFAULT NULL, titre VARCHAR(255) DEFAULT NULL, status TINYINT(1) NOT NULL, new TINYINT(1) NOT NULL, date_naissance DATE DEFAULT NULL, nationalite VARCHAR(255) DEFAULT NULL, tel_principal VARCHAR(255) DEFAULT NULL, tel_secondaire VARCHAR(255) DEFAULT NULL, complement_adresse VARCHAR(255) DEFAULT NULL, permis TINYINT(1) NOT NULL, code_postal VARCHAR(255) DEFAULT NULL, programme_ecole LONGTEXT DEFAULT NULL, inscrit_nl TINYINT(1) NOT NULL, INDEX IDX_594AE39C9777D11E (category_id_id), INDEX IDX_594AE39C1DECB9C6 (fonction_id_id), INDEX IDX_594AE39CEAE6F2D2 (departement_id_id), INDEX IDX_594AE39CF0C17188 (ville_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE membres ADD CONSTRAINT FK_594AE39C9777D11E FOREIGN KEY (category_id_id) REFERENCES categories (id)');
        $this->addSql('ALTER TABLE membres ADD CONSTRAINT FK_594AE39C1DECB9C6 FOREIGN KEY (fonction_id_id) REFERENCES fonctions (id)');
        $this->addSql('ALTER TABLE membres ADD CONSTRAINT FK_594AE39CEAE6F2D2 FOREIGN KEY (departement_id_id) REFERENCES departements (id)');
        $this->addSql('ALTER TABLE membres ADD CONSTRAINT FK_594AE39CF0C17188 FOREIGN KEY (ville_id_id) REFERENCES villes (id)');
        $this->addSql('ALTER TABLE fonctions CHANGE categorie_id categorie_id INT NOT NULL, CHANGE status status TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE fonctions RENAME INDEX idx_aed700ef8a3c7387 TO IDX_AED700EFBCF5E72D');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE membres');
        $this->addSql('ALTER TABLE fonctions CHANGE categorie_id categorie_id INT DEFAULT NULL, CHANGE status status TINYINT(1) DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE fonctions RENAME INDEX idx_aed700efbcf5e72d TO IDX_AED700EF8A3C7387');
    }
}
