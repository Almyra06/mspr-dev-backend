<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210225090452 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE artiste DROP FOREIGN KEY artiste_ibfk_1');
        $this->addSql('DROP INDEX id_groupe ON artiste');
        $this->addSql('ALTER TABLE concert DROP FOREIGN KEY concert_ibfk_1');
        $this->addSql('DROP INDEX id_groupe ON concert');
        $this->addSql('ALTER TABLE concert ADD groupe_id INT DEFAULT NULL, DROP id_groupe');
        $this->addSql('ALTER TABLE concert ADD CONSTRAINT FK_D57C02D27A45358C FOREIGN KEY (groupe_id) REFERENCES groupe (id)');
        $this->addSql('CREATE INDEX IDX_D57C02D27A45358C ON concert (groupe_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE artiste ADD CONSTRAINT artiste_ibfk_1 FOREIGN KEY (id_groupe) REFERENCES groupe (id)');
        $this->addSql('CREATE INDEX id_groupe ON artiste (id_groupe)');
        $this->addSql('ALTER TABLE concert DROP FOREIGN KEY FK_D57C02D27A45358C');
        $this->addSql('DROP INDEX IDX_D57C02D27A45358C ON concert');
        $this->addSql('ALTER TABLE concert ADD id_groupe INT NOT NULL, DROP groupe_id');
        $this->addSql('ALTER TABLE concert ADD CONSTRAINT concert_ibfk_1 FOREIGN KEY (id_groupe) REFERENCES groupe (id)');
        $this->addSql('CREATE INDEX id_groupe ON concert (id_groupe)');
    }
}
