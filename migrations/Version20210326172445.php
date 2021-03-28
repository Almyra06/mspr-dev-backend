<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210326172445 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE concert ADD programme_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE concert ADD CONSTRAINT FK_D57C02D24C5EC380 FOREIGN KEY (programme_id_id) REFERENCES programme (id)');
        $this->addSql('CREATE INDEX IDX_D57C02D24C5EC380 ON concert (programme_id_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE concert DROP FOREIGN KEY FK_D57C02D24C5EC380');
        $this->addSql('DROP INDEX IDX_D57C02D24C5EC380 ON concert');
        $this->addSql('ALTER TABLE concert DROP programme_id_id');
    }
}
