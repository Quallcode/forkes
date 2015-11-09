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
              'null' => TRUE,
      ),
      'id_sub_kelas_terapi2' => array(
              'type' => 'VARCHAR',
              'constraint' => '2',
              'null' => TRUE,
      ),
      'id_sub_kelas_terapi3' => array(
              'type' => 'VARCHAR',
              'constraint' => '2',
              'null' => TRUE,
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
              'null' => TRUE,
      ),
      'intrakutan' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
              'null' => TRUE,
      ),
      'intramuscular' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
              'null' => TRUE,
      ),
      'intravena' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
              'null' => TRUE,
      ),
      'intravena_bolus' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
              'null' => TRUE,
      ),
      'intra_arteri' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
              'null' => TRUE,
      ),
      'intralumbal' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
              'null' => TRUE,
      ),
      'intraperitoneal' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
              'null' => TRUE,
      ),
      'intrapleural' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
              'null' => TRUE,
      ),
      'intracardial' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
              'null' => TRUE,
      ),
      'anti_artikuler' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
              'null' => TRUE,
      ),
      'implantasi_subkutan' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
              'null' => TRUE,
      ),
      'rektal' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
              'null' => TRUE,
      ),
      'intranasal' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
              'null' => TRUE,
      ),
      'intra_okuler' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
              'null' => TRUE,
      ),
      'intra_aurikuler' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
              'null' => TRUE,
      ),
      'intrapulmonal' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
              'null' => TRUE,
      ),
      'intravaginal' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
              'null' => TRUE,
      ),
      'infus_drip' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
              'null' => TRUE,
      ),
      'injeksi_infiltr' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
              'null' => TRUE,
      ),
      'pv' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
              'null' => TRUE,
      ),
      'Tk1' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
              'null' => TRUE,
      ),
      'Tk2' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
              'null' => TRUE,
      ),
      'Tk3' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
              'null' => TRUE,
      ),
      'PRB' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
              'null' => TRUE,
      ),
      'PP' => array(
              'type' => 'VARCHAR',
              'constraint' => '1',
              'null' => TRUE,
      ),
      'restriksi_kelas_terapi' => array(
              'type' => 'TEXT',
              'null' => TRUE,
      ),
      'restriksi_sub_kelas_terapi1' => array(
              'type' => 'TEXT',
              'null' => TRUE,
      ),
      'restriksi_sub_kelas_terapi2' => array(
              'type' => 'TEXT',
              'null' => TRUE,
      ),
      'restriksi_sub_kelas_terapi3' => array(
              'type' => 'TEXT',
              'null' => TRUE,
      ),
      'restriksi_obat' => array(
              'type' => 'TEXT',
              'null' => TRUE,
      ),
      'tambahan_restriksi_obat' => array(
              'type' => 'TEXT',
              'null' => TRUE,
      ),
      'tambahan_restriksi_obat2' => array(
              'type' => 'TEXT',
              'null' => TRUE,
      ),
      'restriksi_sediaan' => array(
              'type' => 'TEXT',
              'null' => TRUE,
      ),
      'restriksi1' => array(
              'type' => 'TEXT',
              'null' => TRUE,
      ),
      'restriksi2' => array(
              'type' => 'TEXT',
              'null' => TRUE,
      ),
      'restriksi3' => array(
              'type' => 'TEXT',
              'null' => TRUE,
      ),
      'restriksi4' => array(
              'type' => 'TEXT',
              'null' => TRUE,
      ),
      'restriksi5' => array(
              'type' => 'TEXT',
              'null' => TRUE,
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
          'id_kelas_terapi'=>$rowData[0][0],
          'id_sub_kelas_terapi1'=>$rowData[0][1],
          'id_sub_kelas_terapi2'=>$rowData[0][2],
          'id_sub_kelas_terapi3'=>$rowData[0][3],
          'nama_obat'=>$rowData[0][4],
          'id_atc_obat'=>$rowData[0][5],
          'id sediaan'=>$rowData[0][6],
          'id_kekuatan'=>$rowData[0][7],
          'id_satuan'=>$rowData[0][8],
          'subkutan'=>$rowData[0][9],
          'intrakutan'=>$rowData[0][10],
          'intramuscular'=>$rowData[0][11],
          'intravena'=>$rowData[0][12],
          'intravena_bolus'=>$rowData[0][13],
          'intra_arteri'=>$rowData[0][14],
          'intralumbal'=>$rowData[0][15],
          'intraperitoneal'=>$rowData[0][16],
          'intrapleural'=>$rowData[0][17],
          'intracardial'=>$rowData[0][18],
          'anti_artikuler'=>$rowData[0][19],
          'implantasi_subkutan'=>$rowData[0][20],
          'rektal'=>$rowData[0][21],
          'intranasal'=>$rowData[0][22],
          'intra_okuler'=>$rowData[0][23],
          'intra_aurikuler'=>$rowData[0][24],
          'intrapulmonal'=>$rowData[0][25],
          'intravaginal'=>$rowData[0][26],
          'infus_drip'=>$rowData[0][27],
          'injeksi_infiltr'=>$rowData[0][28],
          'pv'=>$rowData[0][29],
          'Tk1'=>$rowData[0][30],
          'Tk2'=>$rowData[0][31],
          'Tk3'=>$rowData[0][32],
          'PRB'=>$rowData[0][33],
          'PP'=>$rowData[0][34],
          'restriksi_kelas_terapi'=>$rowData[0][35],
          'restriksi_sub_kelas_terapi1'=>$rowData[0][36],
          'restriksi_sub_kelas_terapi2'=>$rowData[0][37],
          'restriksi_sub_kelas_terapi3'=>$rowData[0][38],
          'restriksi_obat'=>$rowData[0][39],
          'tambahan_restriksi_obat'=>$rowData[0][40],
          'tambahan_restriksi_obat2'=>$rowData[0][41],
          'restriksi_sediaan'=>$rowData[0][42],
          'restriksi1'=>$rowData[0][43],
          'restriksi2'=>$rowData[0][44],
          'restriksi3'=>$rowData[0][45],
          'restriksi4'=>$rowData[0][46],
          'restriksi5'=>$rowData[0][47]
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
