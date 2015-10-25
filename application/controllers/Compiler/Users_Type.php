<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_Type extends CI_Controller {
  //CONSTRUCT FOR LOGIN
  function __construct(){
    parent::__construct();
    //CALL LIBRARY
    $this->load->database();
    $this->load->dbforge();
    define('TABLE','users_type');
  }

  //INDEX FOR FIRST VIEW
	public function Index(){
    //PUT YOUR FIELD HERE
    $fields = array(
      'name' => array(
              'type' => 'VARCHAR',
              'constraint' => '100',
      )
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
      'name'     => 'Rumah Sakit'
    );
    $data2 = array(
      'name'     => 'Dokter Praktek'
    );
    $this->db->insert(TABLE,$data);
    $this->db->insert(TABLE,$data2);
    echo('Compile for insert '.serialize($data2).' to table '.TABLE.' success<br/>');
    echo('Compile for insert '.serialize($data).' to table '.TABLE.' success');
  }
}
