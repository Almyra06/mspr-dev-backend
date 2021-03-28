<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210323222636 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE programme DROP FOREIGN KEY FK_3DDCB9FF83C97B2E');
        $this->addSql('DROP INDEX IDX_3DDCB9FF83C97B2E ON programme');
        $this->addSql('ALTER TABLE programme DROP concert_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE programme ADD concert_id INT NOT NULL');
        $this->addSql('ALTER TABLE programme ADD CONSTRAINT FK_3DDCB9FF83C97B2E FOREIGN KEY (concert_id) REFERENCES concert (id)');
        $this->addSql('CREATE INDEX IDX_3DDCB9FF83C97B2E ON programme (concert_id)');
    }
}
