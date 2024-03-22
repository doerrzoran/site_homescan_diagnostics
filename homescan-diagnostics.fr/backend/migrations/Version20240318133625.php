<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240318133625 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE absestos (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE asbestos (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, text VARCHAR(500) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE carrez (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, text VARCHAR(500) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE crep (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, text VARCHAR(500) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE daad (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, text VARCHAR(500) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE dpad (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, text VARCHAR(500) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE dpat (id INT AUTO_INCREMENT NOT NULL, text VARCHAR(255) DEFAULT NULL, title VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE dpe (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, text VARCHAR(500) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE dta (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, text VARCHAR(500) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE dtad (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, text VARCHAR(500) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE dtat (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, text VARCHAR(500) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE electricity (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, text VARCHAR(500) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE energy (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, text VARCHAR(500) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE erp (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, text VARCHAR(500) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE estimate (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, text VARCHAR(500) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE gaz (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, text VARCHAR(500) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE intervention_sectors (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, text VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE lead (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, text VARCHAR(500) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE missions (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, text VARCHAR(500) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE raat (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, text VARCHAR(500) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE society (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, text VARCHAR(500) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE termites (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, text VARCHAR(500) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE absestos');
        $this->addSql('DROP TABLE asbestos');
        $this->addSql('DROP TABLE carrez');
        $this->addSql('DROP TABLE crep');
        $this->addSql('DROP TABLE daad');
        $this->addSql('DROP TABLE dpad');
        $this->addSql('DROP TABLE dpat');
        $this->addSql('DROP TABLE dpe');
        $this->addSql('DROP TABLE dta');
        $this->addSql('DROP TABLE dtad');
        $this->addSql('DROP TABLE dtat');
        $this->addSql('DROP TABLE electricity');
        $this->addSql('DROP TABLE energy');
        $this->addSql('DROP TABLE erp');
        $this->addSql('DROP TABLE estimate');
        $this->addSql('DROP TABLE gaz');
        $this->addSql('DROP TABLE intervention_sectors');
        $this->addSql('DROP TABLE lead');
        $this->addSql('DROP TABLE missions');
        $this->addSql('DROP TABLE raat');
        $this->addSql('DROP TABLE society');
        $this->addSql('DROP TABLE termites');
    }
}
