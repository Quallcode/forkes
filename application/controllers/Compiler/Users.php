<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
  //CONSTRUCT FOR LOGIN
  function __construct(){
    parent::__construct();
    //CALL LIBRARY
    $this->load->database();
    $this->load->dbforge();
    define('TABLE','users');
  }

  //INDEX FOR FIRST VIEW
	public function Index(){
    //PUT YOUR FIELD HERE
    $fields = array(
      'name' => array(
              'type' => 'VARCHAR',
              'constraint' => '100',
      ),
      'username' => array(
              'type' => 'VARCHAR',
              'constraint' => '100',
      ),
      'password' => array(
              'type' =>'VARCHAR',
              'constraint' => '255',
              'null' => TRUE,
      ),
      'type' => array(
              'type' =>'TINYINT',
      ),
      'date_created' => array(
              'type' => 'DATETIME',
              'null' => TRUE,
      ),
      'date_modified' => array(
              'type' => 'DATETIME',
              'null' => TRUE,
      ),
    );
    //COMPILE FOR CREATE TABLE
    $this->dbforge->add_field('id');
    $this->dbforge->add_field($fields);
    $this->dbforge->create_table(TABLE);
    echo('Compile for create table '.TABLE.' success');
	}

  public function Drop(){
    //COMPILE FOR DROP TABLE
    $this->dbforge->drop_table(TABLE);
    echo('Compile for drop table '.TABLE.' success');
  }

  public function Insert(){
    $data = array(
      'name'     => 'Julius Cesario',
      'username' => 'admin',
      'password' => md5('admin'),
      'type' => 1,
      'date_created' => date('Y-m-d H:i:s')
    );
    $this->db->insert(TABLE,$data);
    echo('Compile for insert '.serialize($data).' to table '.TABLE.' success');
  }
}
