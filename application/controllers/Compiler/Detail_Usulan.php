<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_Usulan extends CI_Controller {
  //CONSTRUCT FOR LOGIN
  function __construct(){
    parent::__construct();
    //CALL LIBRARY
    $this->load->database();
    $this->load->dbforge();
    $this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
    define('TABLE','detail_usulan');
  }

  //INDEX FOR FIRST VIEW
	public function Index(){
    //PUT YOUR FIELD HERE
    $fields = array(
      'nomor_efornas' => array(
              'type' => 'VARCHAR',
              'constraint' => '50',
      ),
      'id_atc_obat' => array(
              'type' => 'VARCHAR',
              'constraint' => '10',
      ),
      'id_sediaan' => array(
              'type' => 'VARCHAR',
              'constraint' => '10',
      ),
      'id_kekuatan' => array(
              'type' => 'VARCHAR',
              'constraint' => '5',
      ),
      'id_satuan' => array(
              'type' => 'VARCHAR',
              'constraint' => '10'
      ),
      'alasan' => array(
              'type' => 'TEXT',
              'null' => TRUE
      ),
      'restriksi' => array(
              'type' => 'TEXT',
              'null' => TRUE
      ),
      'jurnal' => array(
              'type' => 'TEXT',
              'null' => TRUE
      ),
      'file_jurnal' => array(
              'type' => 'TEXT',
              'null' => TRUE
      ),
      'tipe_usulan' => array(
              'type' => 'VARCHAR',
              'constraint' => '80',
              'null' => TRUE
      ),
      'deleted' => array(
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
