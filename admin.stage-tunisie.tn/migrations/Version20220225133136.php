<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220225133136 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE villes DROP FOREIGN KEY FK_19209FD81DB279A6');
        $this->addSql('DROP INDEX IDX_19209FD81DB279A6 ON villes');
        $this->addSql('ALTER TABLE villes CHANGE departements_id departement_id INT NOT NULL');
        $this->addSql('ALTER TABLE villes ADD CONSTRAINT FK_19209FD8CCF9E01E FOREIGN KEY (departement_id) REFERENCES departements (id)');
        $this->addSql('CREATE INDEX IDX_19209FD8CCF9E01E ON villes (departement_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE villes DROP FOREIGN KEY FK_19209FD8CCF9E01E');
        $this->addSql('DROP INDEX IDX_19209FD8CCF9E01E ON villes');
        $this->addSql('ALTER TABLE villes CHANGE departement_id departements_id INT NOT NULL');
        $this->addSql('ALTER TABLE villes ADD CONSTRAINT FK_19209FD81DB279A6 FOREIGN KEY (departements_id) REFERENCES departements (id)');
        $this->addSql('CREATE INDEX IDX_19209FD81DB279A6 ON villes (departements_id)');
    }
}
