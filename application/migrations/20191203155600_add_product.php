<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Database migration for adding the "product" table and associated
 * "properties" table.
 *
 * @author Johan Nilsson
 * @since 0.1.0
 */
class Migration_Add_product extends CI_Migration
{
    /**
     * Adds the tables "products" and "properties" to the database. Called when
     * upgrading the database from an earlier version.
     *
     * @since 0.1.0
     */
    public function up()
    {
        // Define the fields in table "products".
        $this->dbforge->add_field('id');
        $this->dbforge->add_field([
            'name' => [
                'type' => 'varchar',
                'constraint' => '255',
            ],
            'rating' => [
                'type' => 'int',
                'null' => true
            ],
            'notes' => [
                'type' => 'text',
                'null' => true
            ]
        ]);

        // Add a non-unique index and create the table.
        $this->dbforge->add_key('name');
        $this->dbforge->create_table('products');

        // Define the fields in table "properties".
        $this->dbforge->add_field('id');
        $this->dbforge->add_field([
            'name' => [
                'type' => 'varchar',
                'constraint' => '255'
            ],
            'value' => [
                'type' => 'int' // Categorical data will be implemented later.
            ],
            'product_id' => [
                'type' => 'int',
                'constraint' => 9
            ],
            'notes' => [
                'type' => 'text',
                'null' => true
            ]
        ]);

        // Create the table.
        $this->dbforge->create_table('properties');

        // Add a foreign key from the properties table to the product table.
        $this->db->query('alter table `properties` add constraint `fk_product` 
            foreign key (`product_id`) references products(`id`) on delete 
            cascade on update cascade');
    }

    /**
     * Removes the tables "products" and "properties" from the database. Called
     * when downgrading the database from a newer version.
     *
     * @since 0.1.0
     */
    public function down()
    {
        $this->dbforge->drop_table('properties');
        $this->dbforge->drop_table('products');
    }
}
