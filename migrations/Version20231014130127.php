<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231014130127 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE trabajador (id INT AUTO_INCREMENT NOT NULL, dni VARCHAR(9) NOT NULL, nombre VARCHAR(50) NOT NULL, apellido_1 VARCHAR(50) NOT NULL, apellido_2 VARCHAR(50) DEFAULT NULL, fecha_nac DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE trabajo (id INT AUTO_INCREMENT NOT NULL, codigo INT NOT NULL, nombre VARCHAR(50) NOT NULL, salario NUMERIC(10, 2) NOT NULL, duracion TIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE trabajador');
        $this->addSql('DROP TABLE trabajo');
    }
}
