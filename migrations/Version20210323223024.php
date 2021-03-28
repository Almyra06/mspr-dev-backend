<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210323223024 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE concert ADD id_programme_id INT NOT NULL');
        $this->addSql('ALTER TABLE concert ADD CONSTRAINT FK_D57C02D2417A0F9C FOREIGN KEY (id_programme_id) REFERENCES programme (id)');
        $this->addSql('CREATE INDEX IDX_D57C02D2417A0F9C ON concert (id_programme_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE concert DROP FOREIGN KEY FK_D57C02D2417A0F9C');
        $this->addSql('DROP INDEX IDX_D57C02D2417A0F9C ON concert');
        $this->addSql('ALTER TABLE concert DROP id_programme_id');
    }
}
