<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rumah_Sakit extends CI_Controller {
  //CONSTRUCT FOR LOGIN
  function __construct(){
    parent::__construct();
    //CALL LIBRARY
    $this->load->database();
    $this->load->dbforge();
    $this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
    define('TABLE','rumah_sakit');
  }

  //INDEX FOR FIRST VIEW
	public function Index(){
    //PUT YOUR FIELD HERE
    $fields = array(
      'id_provinsi' => array(
              'type' => 'VARCHAR',
              'constraint' => '5',
      ),
      'id_kabkota' => array(
              'type' => 'VARCHAR',
              'constraint' => '5',
      ),
      'id_rs' => array(
              'type' => 'VARCHAR',
              'constraint' => '5',
      ),
      'nama_rs' => array(
              'type' => 'VARCHAR',
              'constraint' => '150',
      ),
      'jenis_rs' => array(
              'type' => 'VARCHAR',
              'constraint' => '3',
              'null' => TRUE,
      ),
      'deskripsi_jenis_rs' => array(
              'type' => 'VARCHAR',
              'constraint' => '20',
              'null' => TRUE,
      ),
      'jenis_kelas_rs' => array(
              'type' => 'VARCHAR',
              'constraint' => '3',
              'null' => TRUE,
      ),
      'deskripsi_jenis_kelas_rs' => array(
              'type' => 'VARCHAR',
              'constraint' => '50',
              'null' => TRUE,
      ),
      'id_tingkat' => array(
              'type' => 'VARCHAR',
              'constraint' => '3',
              'null' => TRUE,
      ),
      'deskripsi_tingkat' => array(
              'type' => 'VARCHAR',
              'constraint' => '30',
              'null' => TRUE,
      ),
      'id_kepemilikan' => array(
              'type' => 'VARCHAR',
              'constraint' => '3',
              'null' => TRUE,
      ),
      'deskripsi_kepemilikan' => array(
              'type' => 'VARCHAR',
              'constraint' => '50',
              'null' => TRUE,
      ),
      'alamat_rs' => array(
              'type' => 'TEXT',
              'null' => TRUE,
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

  public function Insert()
  {
    if($this->input->post('Import'))
    {
      set_time_limit(7200);
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
          'id_provinsi'=>$rowData[0][0],
          'id_kabkota'=>$rowData[0][1],
          'id_rs'=>$rowData[0][2],
          'nama_rs'=>$rowData[0][3],
          'jenis_rs'=>$rowData[0][4],
          'deskripsi_jenis_rs'=>$rowData[0][5],
          'jenis_kelas_rs'=>$rowData[0][6],
          'deskripsi_jenis_kelas_rs'=>$rowData[0][7],
          'id_tingkat'=>$rowData[0][8],
          'deskripsi_tingkat'=>$rowData[0][9],
          'id_kepemilikan'=>$rowData[0][10],
          'deskripsi_kepemilikan'=>$rowData[0][11],
          'alamat_rs'=>$rowData[0][12]
        );
        $this->db->insert(TABLE,$data_upload);
      }
      echo 'Compile for insert to table '.TABLE.' success';
    }else{
      $view_data['controller'] = 'rumah_sakit';
      $view_data['table'] = TABLE;
      $view_data['body'] = 'compiler/import';
      $this->load->view('compiler/wrapper',$view_data);
    }
  }

}
