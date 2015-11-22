<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat_Combinasi extends CI_Controller {
  //CONSTRUCT FOR SATUAAN
  function __construct(){
    parent::__construct();
    //INIT MODEL TRANSACTION
    $this->load->model('Model_Get_Combinasi');
    $this->load->model('Model_Get_Usulan');
    $this->load->model('Model_Transaction');
    //CHECK SESSION
    $sess = $this->session->userdata('user_data');
    if(empty($sess)){
      redirect('login','refresh');
      exit;
    }
    //SET TABLE NAME
    define('TABLE','obat_combinasi');
    define('DETAIL_TABLE','detail_obat_combinasi');
    //SET BREADCRUMB
    $this->session->set_userdata(array('breadcrumb'=>'master'));
    $this->session->set_userdata(array('main_sub_breadcrumb'=>'obat_combinasi'));
  }

  //INDEX FOR FIRST VIEW
	public function Index(){
    //GET SATUAAN DATA
    $sess = $this->session->userdata('user_data');
    $privilege = $sess['obat_kombinasi_read'];
    if($privilege != 'on'){
      echo '<script>alert("Anda mempunyai limitasi untuk mengakses laman ini, silahkan hubungi administrator"); window.location.assign("'.base_url().'Dashboard");</script>';
      exit;
    }
    $obt_combinasi = $this->Model_Get_Combinasi->Select_Data();
    //print_r($obt_combinasi);exit;
    //DECLARE VIEW DATA FOR WRAPPER
    $view_data['data']   = $obt_combinasi;
    $view_data['body']   = 'body/master/obat_combinasi/record_dsp';
    //LOAD VIEW DATA TO WRAPPER
    $this->load->view('wrapper',$view_data);
	}
  //END OF INDEX FOR FIRST VIEW

  //POST SATUAAN
  public function Insert(){
    //GET POST DATA
    $sess = $this->session->userdata('user_data');
    $privilege = $sess['obat_kombinasi_write'];
    if($privilege != 'on'){
      echo '<script>alert("Anda mempunyai limitasi untuk mengakses laman ini, silahkan hubungi administrator"); window.location.assign("'.base_url().'Dashboard");</script>';
      exit;
    }
    $post = $this->input->post();
    //CHECK IF EMPTY POST
    if(empty($post)){
      //DECLARE VIEW DATA FOR WRAPPER
      $view_data['body']   = 'body/master/kelas_terapi/create_dsp';
      //LOAD VIEW DATA TO WRAPPER
      $this->load->view('wrapper',$view_data);
    }else{
      //VALIDATE TO DATABASE
      $exist = $this->Model_Get_Kelas_Terapi->validate(TABLE,$post['id_kelas_terapi']);
      if($exist==1)
      {
        echo '<script>alert("ID Kelas Terapi Sudah Ada"); window.location.assign("'.base_url().'Obat_Combinasi");</script>';
      }
      else {
        //INSERT TO DATABASE
        $this->Model_Transaction->Insert_To_Db($post,TABLE);
		echo '<script>alert("Berhasil Menambahkan Data"); window.location.assign("'.base_url().'Obat_Combinasi");</script>';
      }
    }
  }

  public function update(){
    $sess = $this->session->userdata('user_data');
    $privilege = $sess['obat_kombinasi_write'];
    if($privilege != 'on'){
      echo '<script>alert("Anda mempunyai limitasi untuk mengakses laman ini, silahkan hubungi administrator"); window.location.assign("'.base_url().'Dashboard");</script>';
      exit;
    }
  	$uri = $this->uri->segment(3);
  	if(empty($uri)){
  		$post = $this->input->post();
  		$id = $post['id'];
  		$data = array(
  			'id_kelas_terapi' 	=> $post['id_kelas_terapi'],
  			'nama_satuan'	=> $post['nama_satuan']
  		);
  		$this->Model_Transaction->Update_To_Db($data,TABLE,'id',$id);
  		echo '<script>alert("Berhasil Merubah Data"); window.location.assign("'.base_url().'Obat_Combinasi");</script>';
  	}else{
      //GET SATUAAN DATA
  		$atc_obat = $this->Model_Get_Combinasi->Check_Update_Combinasi($uri);
      $nama_combinasi = $this->Model_Get_Combinasi->Select_Name_Combinasi($uri);
      $obat        = $this->Model_Get_Usulan->Normal_Select('atc_obat');
      //print_r($satuan); exit;
  		//DECLARE VIEW DATA FOR WRAPPER
      $view_data['obat'] = $obat;
      $view_data['nama_combinasi'] = $nama_combinasi;
  		$view_data['atc_obat']   = $atc_obat;
  		$view_data['body']   = 'body/master/obat_combinasi/update_dsp';
  		//LOAD VIEW DATA TO WRAPPER
  		$this->load->view('wrapper',$view_data);
  	}
  }

  public function delete(){
    $sess = $this->session->userdata('user_data');
    $privilege = $sess['obat_kombinasi_delete'];
    if($privilege != 'on'){
      echo '<script>alert("Anda mempunyai limitasi untuk mengakses laman ini, silahkan hubungi administrator"); window.location.assign("'.base_url().'Dashboard");</script>';
      exit;
    }
  	$uri = $this->uri->segment(3);
  	$data = array(
  		'deleted'	=> '1'
  	);
  	$this->Model_Transaction->Update_To_Db($data,TABLE,'id_obat_combinasi',$uri);
  	echo '<script>alert("Berhasil Menghapus Data"); window.location.assign("'.base_url().'Obat_Combinasi");</script>';
  }

  public function Edit_Usulan(){
    $sess = $this->session->userdata('user_data');
    $privilege = $sess['obat_kombinasi_delete'];
    if($privilege != 'on'){
      echo '<script>alert("Anda mempunyai limitasi untuk mengakses laman ini, silahkan hubungi administrator"); window.location.assign("'.base_url().'Dashboard");</script>';
      exit;
    }
    $post = $this->input->post();
    //print_r($post);exit;
    if(!empty($post))
    {
      $this->Model_Transaction->Delete_To_Db('detail_obat_combinasi','nama_obat_combinasi',$post['obat_combinasi']);
      $counted = count($post['id_atc_obat']);
      for($i = 0; $i <$counted; $i++){
        $data_detail_obat_combinasi = array(
          'nama_obat_combinasi' => $post['obat_combinasi'],
          'id_atc_obat'   => $post['id_atc_obat'][$i]
        );
        //print_r($data_detail_usulan); exit;
        $this->Model_Transaction->Insert_To_Db($data_detail_obat_combinasi,'detail_obat_combinasi');
      }
      echo '<script type="text/javascript">alert("User Berhasil melakukan Pengeditan Kombinasi Obat dengan Nama Obat Kombinasi '.$post['obat_combinasi'].'"); window.location.assign("'.base_url().'Obat_Combinasi");</script>';
    }else{
      echo "Error empty post occured";
    }
  }



  //END OF POST SATUAAN
}
?>
