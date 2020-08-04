<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200804135634 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE customers (id INT AUTO_INCREMENT NOT NULL, company_name VARCHAR(255) NOT NULL, contact_name VARCHAR(255) NOT NULL, contact_title VARCHAR(255) NOT NULL, address VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, regio VARCHAR(255) NOT NULL, postal_code VARCHAR(255) NOT NULL, country VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, fax VARCHAR(255) NOT NULL, customer_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE order_details (id INT AUTO_INCREMENT NOT NULL, unit_price INT NOT NULL, quantity INT NOT NULL, discount INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE orders (id INT AUTO_INCREMENT NOT NULL, employee_id INT NOT NULL, order_date DATE NOT NULL, required_date DATE NOT NULL, shipped_date DATE NOT NULL, ship_via INT NOT NULL, freight INT NOT NULL, ship_name VARCHAR(255) NOT NULL, ship_address VARCHAR(255) NOT NULL, ship_city VARCHAR(255) NOT NULL, ship_region VARCHAR(255) NOT NULL, ship_postal_code VARCHAR(255) NOT NULL, ship_country VARCHAR(255) NOT NULL, order_id SMALLINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE products (id INT AUTO_INCREMENT NOT NULL, supplier_id_id INT DEFAULT NULL, product_name VARCHAR(40) NOT NULL, category_id SMALLINT NOT NULL, quantity_per_unit INT NOT NULL, unit_price INT NOT NULL, units_in_stock INT NOT NULL, units_on_order INT NOT NULL, reorder_level INT NOT NULL, discontinued INT NOT NULL, INDEX IDX_B3BA5A5AA65F9C7D (supplier_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE suppliers (id INT AUTO_INCREMENT NOT NULL, company_name VARCHAR(255) NOT NULL, contact_name VARCHAR(255) NOT NULL, contact_title VARCHAR(255) NOT NULL, address VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, region VARCHAR(255) NOT NULL, postal_code VARCHAR(255) NOT NULL, country VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, fax VARCHAR(255) NOT NULL, home_page VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE products ADD CONSTRAINT FK_B3BA5A5AA65F9C7D FOREIGN KEY (supplier_id_id) REFERENCES suppliers (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE products DROP FOREIGN KEY FK_B3BA5A5AA65F9C7D');
        $this->addSql('DROP TABLE customers');
        $this->addSql('DROP TABLE order_details');
        $this->addSql('DROP TABLE orders');
        $this->addSql('DROP TABLE products');
        $this->addSql('DROP TABLE suppliers');
    }
}
