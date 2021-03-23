<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210225103127 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE concert ADD programme_id INT DEFAULT NULL, DROP id_programme');
        $this->addSql('ALTER TABLE concert ADD CONSTRAINT FK_D57C02D262BB7AEE FOREIGN KEY (programme_id) REFERENCES programme (id)');
        $this->addSql('CREATE INDEX IDX_D57C02D262BB7AEE ON concert (programme_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE concert DROP FOREIGN KEY FK_D57C02D262BB7AEE');
        $this->addSql('DROP INDEX IDX_D57C02D262BB7AEE ON concert');
        $this->addSql('ALTER TABLE concert ADD id_programme INT NOT NULL, DROP programme_id');
    }
}
