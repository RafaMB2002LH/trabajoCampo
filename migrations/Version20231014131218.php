<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231014131218 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE trabajador_trabajo ADD trabajo_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE trabajador_trabajo ADD CONSTRAINT FK_C431F99287A134A FOREIGN KEY (trabajo_id) REFERENCES trabajo (id)');
        $this->addSql('CREATE INDEX IDX_C431F99287A134A ON trabajador_trabajo (trabajo_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE trabajador_trabajo DROP FOREIGN KEY FK_C431F99287A134A');
        $this->addSql('DROP INDEX IDX_C431F99287A134A ON trabajador_trabajo');
        $this->addSql('ALTER TABLE trabajador_trabajo DROP trabajo_id');
    }
}
