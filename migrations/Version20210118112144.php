<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210118112144 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE properties DROP FOREIGN KEY FK_87C331C77E3C61F9');
        $this->addSql('DROP INDEX IDX_87C331C77E3C61F9 ON properties');
        $this->addSql('ALTER TABLE properties ADD owner_firstname VARCHAR(255) DEFAULT NULL, ADD owner_lastname VARCHAR(255) DEFAULT NULL, ADD owner_phone VARCHAR(15) DEFAULT NULL, ADD owner_email VARCHAR(255) DEFAULT NULL, DROP owner_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE properties ADD owner_id INT DEFAULT NULL, DROP owner_firstname, DROP owner_lastname, DROP owner_phone, DROP owner_email');
        $this->addSql('ALTER TABLE properties ADD CONSTRAINT FK_87C331C77E3C61F9 FOREIGN KEY (owner_id) REFERENCES owners (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_87C331C77E3C61F9 ON properties (owner_id)');
    }
}
