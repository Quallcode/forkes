<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_Terapi extends CI_Controller {
  //CONSTRUCT FOR LOGIN
  function __construct(){
    parent::__construct();
    //CALL LIBRARY
    $this->load->database();
    $this->load->dbforge();
    $this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
    define('TABLE','fornas');
  }

  //INDEX FOR FIRST VIEW
	public function Index(){
    //PUT YOUR FIELD HERE
    $fields = array(
      'id_kelas_terapi' => array(
              'type' => 'VARCHAR',
              'constraint' => '2',
      ),
      'id_sub_kelas_terapi1' => array(
              'type' => 'VARCHAR',
              'constraint' => '2',
      ),
      'id_sub_kelas_terapi2' => array(
              'type' => 'VARCHAR',
              'constraint' => '2',
      ),
      'id_sub_kelas_terapi3' => array(
              'type' => 'VARCHAR',
              'constraint' => '2',
      ),
      'nama_obat' => array(
              'type' => 'VARCHAR',
              'constraint' => '255',
      ),
      'id_atc_obat' => array(
              'type' => 'VARCHAR',
              'constraint' => '10',
      ),
      'id_sediaan' => array(
              'type' => 'VARCHAR',
              'constraint' => '5',
      ),
      'id_kekuatan' => array(
              'type' => 'VARCHAR',
              'constraint' => '5',
      ),
      'id_satuan' => array(
              'type' => 'VARCHAR',
              'constraint' => '3',
      ),
      'subkutan' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
      ),
      'intrakutan' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
      ),
      'intramuscular' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
      ),
      'intravena' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
      ),
      'intravena_bolus' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
      ),
      'intra-arteri' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
      ),
      'intralumbal' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
      ),
      'intrapleural' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
      ),
      'intracardial' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
      ),
      'anti_artikuler' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
      ),
      'implantasi_subkutan' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
      ),
      'rektal' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
      ),
      'intranasal' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
      ),
      'intra_okuler' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
      ),
      'intra_aurikuler' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
      ),
      'intrapulmonal' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
      ),
      'intravaginal' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
      ),
      'infus_drip' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
      ),
      'injeksi_infiltr' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
      ),
      'pv' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
      ),
      'Tk1' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
      ),
      'Tk2' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
      ),
      'Tk3' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
      ),
      'PRB' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
      ),
      'PP' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
      ),
      'restriksi_kelas_terapi' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
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
      for($row = 2; $row <= $highestRow; $row++)//Read a row of data into an array
      {
        $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);

        //iNSERT ROW DATA ARRAY INTO YOUR DATABASE OF CHOISE HERE
        $i = 0;
        $data_upload = array(
          'id_kelas'=>$rowData[0][0],
          'kelas_terapi'=>$rowData[0][1]
        );
        $i++;
        $this->db->insert(TABLE,$data_upload);
      }
      echo 'Compile for insert to table '.TABLE.' success';
    }else{
      $view_data['controller'] = 'kelas_terapi';
      $view_data['table'] = TABLE;
      $view_data['body'] = 'compiler/import';
      $this->load->view('compiler/wrapper',$view_data);
    }
  }

}
