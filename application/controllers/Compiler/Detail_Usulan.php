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

  public function Insert()
  {
    if($this->input->post('Import'))
    {
      //FOR UPLOAD
      $fileName = $_FILES['fileimport']['name'];
      //FOR UPLOAD
      $config['upload_path'] = BASEPATH.'../includes/assets/';
      $config['file_name'] = $fileName;
      $config['allowed_types'] = 'csv';
      $config['max_size'] = 1000000;

      $this->load->library('upload');
      $this->upload->initialize($config);

      if(!$this->upload->do_upload('fileimport')){
        $error = $this->upload->display_errors();
        echo $error; exit;
      }
      //FOR READ
      $inputFileName = BASEPATH.'../includes/assets/'.$fileName;

      //READ your excel workbook
      try {
        $inputFileType = IOFactory::identify($inputFileName);
        $objReader = IOFactory::createReader($inputFileType);
        $objPHPExcel = $objReader->load($inputFileName);
      } catch(Exception $e) {
        die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
      }

      //Get Worksheet dimendions
      $sheet = $objPHPExcel->getSheet(0);
      $highestRow = $sheet->getHighestRow();
      $highestColumn = $sheet->getHighestColumn();
      //Loop through each row of thw Worksheet in turn
      for($row = 1; $row <= $highestRow; $row++)//Read a row of data into an array
      {
        $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);

        //iNSERT ROW DATA ARRAY INTO YOUR DATABASE OF CHOISE HERE
        $data_upload = array(
          'id_atc_obat'=>$rowData[0][0],
          'nama_obat'=>$rowData[0][1],
          'id_keterangan'=>$rowData[0][2],
          'parent_id'=>$rowData[0][3]
        );
        $this->db->insert(TABLE,$data_upload);
      }
      echo 'Compile for insert to table '.TABLE.' success';
    }else{
      $view_data['controller'] = 'detail_usulan';
      $view_data['table'] = TABLE;
      $view_data['body'] = 'compiler/import';
      $this->load->view('compiler/wrapper',$view_data);
    }
  }

}
