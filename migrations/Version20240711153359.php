<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240711153359 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, niveau VARCHAR(255) NOT NULL, id_client VARCHAR(255) NOT NULL, formation VARCHAR(255) NOT NULL, promotion VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP INDEX id ON client');
        $this->addSql('DROP INDEX email ON client');
        $this->addSql('DROP INDEX id_2 ON client');
        $this->addSql('DROP INDEX id ON cours');
        $this->addSql('DROP INDEX email ON etudiants');
        $this->addSql('DROP INDEX id ON etudiants');
        $this->addSql('DROP INDEX email ON formateurs');
        $this->addSql('DROP INDEX id ON formateurs');
        $this->addSql('DROP INDEX id_2 ON formateurs');
        $this->addSql('DROP INDEX id ON formations');
        $this->addSql('DROP INDEX id_2 ON formations');
        $this->addSql('DROP INDEX id_2 ON messenger_messages');
        $this->addSql('DROP INDEX id ON messenger_messages');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE user');
        $this->addSql('CREATE UNIQUE INDEX id ON client (id)');
        $this->addSql('CREATE UNIQUE INDEX email ON client (email)');
        $this->addSql('CREATE INDEX id_2 ON client (id)');
        $this->addSql('CREATE INDEX id ON cours (id)');
        $this->addSql('CREATE UNIQUE INDEX email ON etudiants (email, carte_didentite)');
        $this->addSql('CREATE INDEX id ON etudiants (id)');
        $this->addSql('CREATE UNIQUE INDEX email ON formateurs (email)');
        $this->addSql('CREATE INDEX id ON formateurs (id)');
        $this->addSql('CREATE UNIQUE INDEX id_2 ON formateurs (id)');
        $this->addSql('CREATE INDEX id ON formations (id)');
        $this->addSql('CREATE INDEX id_2 ON formations (id)');
        $this->addSql('CREATE INDEX id_2 ON messenger_messages (id)');
        $this->addSql('CREATE UNIQUE INDEX id ON messenger_messages (id)');
    }
}
