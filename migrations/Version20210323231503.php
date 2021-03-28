<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210323231503 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE artiste_groupe (artiste_id INT NOT NULL, groupe_id INT NOT NULL, INDEX IDX_5EC87A2021D25844 (artiste_id), INDEX IDX_5EC87A207A45358C (groupe_id), PRIMARY KEY(artiste_id, groupe_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE artiste_groupe ADD CONSTRAINT FK_5EC87A2021D25844 FOREIGN KEY (artiste_id) REFERENCES artiste (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE artiste_groupe ADD CONSTRAINT FK_5EC87A207A45358C FOREIGN KEY (groupe_id) REFERENCES groupe (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE artiste_groupe');
    }
}
