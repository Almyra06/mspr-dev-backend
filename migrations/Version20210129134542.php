<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210129134542 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE groupe (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, style_musique VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE artiste (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(100) NOT NULL, id_groupe INT NOT NULL, prenom VARCHAR(255) NOT NULL, PRIMARY KEY(id), FOREIGN KEY (id_groupe) REFERENCES Groupe(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE billet (id INT AUTO_INCREMENT NOT NULL, program VARCHAR(255) NOT NULL, nb_places INT NOT NULL, prix DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE concert (id INT AUTO_INCREMENT NOT NULL, id_programme INT NOT NULL, horaire_debut TIME NOT NULL, horaire_fin TIME NOT NULL, duree VARCHAR(50) NOT NULL, emplacement VARCHAR(255) NOT NULL, id_groupe INT NOT NULL, PRIMARY KEY(id), FOREIGN KEY (id_groupe) REFERENCES Groupe(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE festivalier (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(50) NOT NULL, sexe VARCHAR(20) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE programme (id INT AUTO_INCREMENT NOT NULL, date DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE artiste');
        $this->addSql('DROP TABLE billet');
        $this->addSql('DROP TABLE concert');
        $this->addSql('DROP TABLE festivalier');
        $this->addSql('DROP TABLE groupe');
        $this->addSql('DROP TABLE programme');
    }
}
