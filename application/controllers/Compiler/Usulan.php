<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usulan extends CI_Controller {
  //CONSTRUCT FOR LOGIN
  function __construct(){
    parent::__construct();
    //CALL LIBRARY
    $this->load->database();
    $this->load->dbforge();
    $this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
    define('TABLE','usulan');
  }

  //INDEX FOR FIRST VIEW
	public function Index(){
    //PUT YOUR FIELD HERE
    $fields = array(
      'id_provinsi' => array(
              'type' => 'VARCHAR',
              'constraint' => '10',
      ),
      'id_kabkota' => array(
              'type' => 'VARCHAR',
              'constraint' => '10',
      ),
      'id_faskes' => array(
              'type' => 'VARCHAR',
              'constraint' => '10',
      ),
      'nomor_efornas' => array(
              'type' => 'VARCHAR',
              'constraint' => '150',
      ),
      'type' => array(
              'type' => 'TINYINT',
              'default' => '1'
      ),
      'surat_pengantar' => array(
              'type' => 'TEXT',
              'null' => TRUE
      ),
      'daftar_usulan_obat' => array(
              'type' => 'TEXT',
              'null' => TRUE
      ),
      'status' =>array(
              'type' => 'VARCHAR',
              'constraint' => '10',
              'default' => 'BELUM'
      ),
      'deleted' =>array(
              'type' => 'TINYINT',
              'default' => '0'
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

}
