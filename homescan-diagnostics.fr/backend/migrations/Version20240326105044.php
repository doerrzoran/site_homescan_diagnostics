<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240326105044 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE carrez CHANGE text text VARCHAR(1000) DEFAULT NULL');
        $this->addSql('ALTER TABLE crep CHANGE text text VARCHAR(1000) DEFAULT NULL');
        $this->addSql('ALTER TABLE daad CHANGE text text VARCHAR(1000) DEFAULT NULL');
        $this->addSql('ALTER TABLE dpad CHANGE text text VARCHAR(1000) DEFAULT NULL');
        $this->addSql('ALTER TABLE dpe CHANGE text text VARCHAR(1000) DEFAULT NULL');
        $this->addSql('ALTER TABLE dta CHANGE text text VARCHAR(1000) DEFAULT NULL');
        $this->addSql('ALTER TABLE dtad CHANGE text text VARCHAR(1000) DEFAULT NULL');
        $this->addSql('ALTER TABLE dtat CHANGE text text VARCHAR(1000) DEFAULT NULL');
        $this->addSql('ALTER TABLE electricity CHANGE text text VARCHAR(1000) DEFAULT NULL');
        $this->addSql('ALTER TABLE energy CHANGE text text VARCHAR(1000) DEFAULT NULL');
        $this->addSql('ALTER TABLE erp CHANGE text text VARCHAR(1000) DEFAULT NULL');
        $this->addSql('ALTER TABLE estimate CHANGE text text VARCHAR(1000) DEFAULT NULL');
        $this->addSql('ALTER TABLE gaz CHANGE text text VARCHAR(1000) DEFAULT NULL');
        $this->addSql('ALTER TABLE lead CHANGE text text VARCHAR(1000) DEFAULT NULL');
        $this->addSql('ALTER TABLE missions CHANGE text text VARCHAR(1000) DEFAULT NULL');
        $this->addSql('ALTER TABLE raat CHANGE text text VARCHAR(1000) DEFAULT NULL');
        $this->addSql('ALTER TABLE society CHANGE text text VARCHAR(1000) DEFAULT NULL');
        $this->addSql('ALTER TABLE termites CHANGE text text VARCHAR(1000) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE carrez CHANGE text text VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE crep CHANGE text text VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE daad CHANGE text text VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE dpad CHANGE text text VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE dpe CHANGE text text VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE dta CHANGE text text VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE dtad CHANGE text text VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE dtat CHANGE text text VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE electricity CHANGE text text VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE energy CHANGE text text VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE erp CHANGE text text VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE estimate CHANGE text text VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE gaz CHANGE text text VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE lead CHANGE text text VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE missions CHANGE text text VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE raat CHANGE text text VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE society CHANGE text text VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE termites CHANGE text text VARCHAR(500) DEFAULT NULL');
    }
}
