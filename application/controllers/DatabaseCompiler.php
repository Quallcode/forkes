<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DatabaseCompiler extends CI_Controller {
  //CONSTRUCT FOR LOGIN
  function __construct(){
    parent::__construct();
    //CALL MODEL
    $this->load->dbforge();
  }

  //INDEX FOR FIRST VIEW
	public function create(){
    //PUT YOUR TABLE NAME HERE
    $table_name = 'users';
    //PUT YOUR FIELD HERE
    $fields = array(
      'blog_title' => array(
              'type' => 'VARCHAR',
              'constraint' => '100',
      ),
      'blog_author' => array(
              'type' =>'VARCHAR',
              'constraint' => '100',
              'default' => 'King of Town',
      ),
      'blog_description' => array(
              'type' => 'TEXT',
              'null' => TRUE,
      ),
    );
    //COMPILE FOR CREATE TABLE
    $this->dbforge->add_field('id');
    $this->dbforge->add_field($fields);
    $this->dbforge->create_table($table_name);
    echo('Compile for create table '.$table_name.' success');
	}

  public function Drop(){
    //PUT YOUR TABLE NAME HERE
    $table_name = 'users';
    //COMPILE FOR DROP TABLE
    $this->dbforge->drop_table('table_name',TRUE);
    echo('Compile for drop table '.$table_name.' success');
  }
}
