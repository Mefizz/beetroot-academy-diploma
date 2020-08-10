<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200809234251 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('INSERT INTO product (id, title, description, image) VALUES(1 ,"Lugz Drifter Mid Steel Toe", "Brown boots", "/img/brown_boots.jpg"), (2, "Levis® Shoes Ethan Chambray Wax", "grey shoes", "public/img/grey_shoes.jpg")');

    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DELETE FROM product WHERE id IN (1,2)');
    }
}
