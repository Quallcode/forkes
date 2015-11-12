<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Atc_Obat extends CI_Controller {
  //CONSTRUCT FOR LOGIN
  function __construct(){
    parent::__construct();
    //CALL LIBRARY
    $this->load->database();
    $this->load->dbforge();
    $this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
    define('TABLE','atc_obat');
  }

  //INDEX FOR FIRST VIEW
	public function Index(){
    //PUT YOUR FIELD HERE
    $fields = array(
      'id_obat' => array(
              'type' => 'VARCHAR',
              'constraint' => '10',
      ),
      'nama_obat' => array(
              'type' => 'VARCHAR',
              'constraint' => '150',
      ),
      'id_keterangan' => array(
              'type' => 'INT',
      ),
      'parent_id' => array(
              'type' => 'INT',
              'null' => TRUE
      ),
      'deleted' =>array(
              'type' => 'TINYINT',
              'default' => '0'
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



}
