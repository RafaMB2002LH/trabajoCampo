<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231014131137 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE trabajador_trabajo (id INT AUTO_INCREMENT NOT NULL, trabajador_id INT DEFAULT NULL, fecha DATE NOT NULL, tiempo_trabajado TIME DEFAULT NULL, INDEX IDX_C431F99EC3656E (trabajador_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE trabajador_trabajo ADD CONSTRAINT FK_C431F99EC3656E FOREIGN KEY (trabajador_id) REFERENCES trabajador (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE trabajador_trabajo DROP FOREIGN KEY FK_C431F99EC3656E');
        $this->addSql('DROP TABLE trabajador_trabajo');
    }
}
