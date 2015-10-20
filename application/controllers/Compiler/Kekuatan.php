<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kekuatan extends CI_Controller {
  //CONSTRUCT FOR LOGIN
  function __construct(){
    parent::__construct();
    //CALL LIBRARY
    $this->load->database();
    $this->load->dbforge();
    $this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
    define('TABLE','kekuatan');
  }

  //INDEX FOR FIRST VIEW
	public function Index(){
    //PUT YOUR FIELD HERE
    $fields = array(
      'id_kekuatan' => array(
              'type' => 'VARCHAR',
              'constraint' => '5',
      ),
      'kekuatan' => array(
              'type' => 'INT',
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
      set_time_limit(3600);
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
        if(strlen($rowData[0][0])==1){
          $new_rowData = '000'.$rowData[0][0];
        }else if(strlen($rowData[0][0])==2){
          $new_rowData = '00'.$rowData[0][0];
        }else{
          $new_rowData = $rowData[0][0];
        }
        //iNSERT ROW DATA ARRAY INTO YOUR DATABASE OF CHOISE HERE
        $data_upload = array(
          'id_kekuatan'=>$new_rowData,
          'kekuatan'=>$rowData[0][1]
        );
        $this->db->insert(TABLE,$data_upload);
      }
      echo 'Compile for insert to table '.TABLE.' success';
    }else{
      $view_data['controller'] = 'kekuatan';
      $view_data['table'] = TABLE;
      $view_data['body'] = 'compiler/import';
      $this->load->view('compiler/wrapper',$view_data);
    }
  }

}
