<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Example extends CI_Controller {
  //CONSTRUCT FOR LOGIN
  function __construct(){
    parent::__construct();
    //CALL DB FORGE FOR DATABASE FORGING
    $this->load->dbforge();
  }

  //INDEX FOR FIRST VIEW
	public function Index(){
    $table_name = 'tests'; //PUT YOUR TABLE NAME HERE
    //PUT YOUR FIELD HERE
    $fields = array(
      'test_title' => array(
              'type' => 'VARCHAR',
              'constraint' => '100', //IF YOU DON'T SET THE DEFAULT IT WILL MAKE THIS FIELD CANNOT BE NULL
      ),
      'test_name' => array(
              'type' =>'VARCHAR',
              'constraint' => '100',
              'default' => 'King of Town', // IF YOU SET THE DEFAULT IT WILL MAKE THIS FIELD HAVE DEFAULT VALUE IF NULL
      ),
      'test_text' => array(
              'type' => 'TEXT',
              'null' => TRUE, //SET THIS FOR NULL DEFAULT VALUE FOR THIS FIELD
      ),
      'test_date' => array(
              'type' => 'DATETIME',
              'null' => TRUE
      )
    );
    //COMPILE FOR CREATE TABLE
    $this->dbforge->add_field('id'); //FOR CREATING A AUTO INCREMENT PRIMARY KEY ID
    $this->dbforge->add_field($fields); //WILL GENERATE FIELD FOR THIS TABLE
    $this->dbforge->create_table($table_name); //WILL CREATE TABLE AND FINISHING THE FIELD
    echo('Compile for create table '.$table_name.' success');
	}

  public function Drop(){
    //PUT YOUR TABLE NAME HERE
    $table_name = 'test';
    //COMPILE FOR DROP TABLE
    $this->dbforge->drop_table($table_name);
    echo('Compile for drop table '.$table_name.' success');
  }
}
