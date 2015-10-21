<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keterangan_Atc_Obat extends CI_Controller {
  //CONSTRUCT FOR LOGIN
  function __construct(){
    parent::__construct();
    //CALL LIBRARY
    $this->load->database();
    $this->load->dbforge();
    $this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
    define('TABLE','keterangan_atc_obat');
  }

  //INDEX FOR FIRST VIEW
	public function Index(){
    //PUT YOUR FIELD HERE
    $fields = array(
      'keterangan' => array(
              'type' => 'VARCHAR',
              'constraint' => '100'
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
          'keterangan'=>$rowData[0][0]
        );
        $this->db->insert(TABLE,$data_upload);
      }
      echo 'Compile for insert to table '.TABLE.' success';
    }else{
      $view_data['controller'] = 'keterangan_atc_obat';
      $view_data['table'] = TABLE;
      $view_data['body'] = 'compiler/import';
      $this->load->view('compiler/wrapper',$view_data);
    }
  }

}
