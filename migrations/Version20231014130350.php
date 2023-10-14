<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231014130350 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE trabajador_trabajo (trabajador_id INT NOT NULL, trabajo_id INT NOT NULL, INDEX IDX_C431F99EC3656E (trabajador_id), INDEX IDX_C431F99287A134A (trabajo_id), PRIMARY KEY(trabajador_id, trabajo_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE trabajador_trabajo ADD CONSTRAINT FK_C431F99EC3656E FOREIGN KEY (trabajador_id) REFERENCES trabajador (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE trabajador_trabajo ADD CONSTRAINT FK_C431F99287A134A FOREIGN KEY (trabajo_id) REFERENCES trabajo (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE trabajador_trabajo DROP FOREIGN KEY FK_C431F99EC3656E');
        $this->addSql('ALTER TABLE trabajador_trabajo DROP FOREIGN KEY FK_C431F99287A134A');
        $this->addSql('DROP TABLE trabajador_trabajo');
    }
}
