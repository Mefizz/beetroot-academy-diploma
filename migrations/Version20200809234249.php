<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200809234249 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('INSERT INTO category (id, title, parent_id) VALUES(1 ,"Boots", 4),(2 , "Sneakers & Athletic Shoes", 4), (3 ,"Slippers", 4), (4, "Men shoes", null), (5, "Women shoes", null), (6, "Trainers", 5), (7, "Sandals", 5)');

    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DELETE FROM category WHERE id IN (1,2,3,6,7)');
        $this->addSql('DELETE FROM category WHERE id IN (4,5)');

    }
}
