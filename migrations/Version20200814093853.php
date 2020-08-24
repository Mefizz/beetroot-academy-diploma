<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200814093853 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('INSERT INTO product (id, title, description, image) VALUES(2,"PUMA Performer Retro", "SKU: #9480921", "/img/PUMA Performer Retro.jpg"), (3, "Pendleton Rancho Moc", "SKU: #9288841", "/img/Pendleton Rancho Moc.jpg"),(7, "Crocs Coast Slide", "SKU: #8988219", "/img/Crocs Coast Slide.jpg"),(7, "Clarks Alexis Shine", "SKU: #9340325", "/img/Clarks Alexis Shine.jpg"),(6, "Columbia Dakota™ Drifter Mid Waterproof", "SKU: #8630095", "/img/Clarks Alexis Shine.jpg"),(6, "Merrell Kids Trail Chaser", "SKU: #8721265", "/img/Merrell Kids Trail Chaser (Big Kid).jpg"),(3, "Koolaburra by UGG Bordon", "SKU: #9275229", "/img/Koolaburra by UGG Bordon.jpg"),(1, "SOREL Conquest™", "SKU: #9117169", "/img/SOREL Conquest™.jpg"),(1, "Kenneth Cole Unlisted Darin Chukka", "SKU: #9281156", "/img/Kenneth Cole Unlisted Darin Chukka.jpg"),(1, "Timberland Tenmile Chukka", "SKU: #9158747", "/img/Timberland Tenmile Chukka.jpg"),(1, "Deer Stags James", "SKU: #8974642", "/img/Deer Stags James.jpg")');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DELETE FROM product WHERE id IN (1,2)');
    }
}
