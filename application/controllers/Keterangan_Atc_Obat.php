<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keterangan_Atc_Obat extends CI_Controller {
  //CONSTRUCT FOR ATC OBAT
  function __construct(){
    parent::__construct();
    //INIT MODEL TRANSACTION
    $this->load->model('Model_Transaction');
    $this->load->model('Model_Get_Keterangan_Atc_Obat');
    //CHECK SESSION
    $sess = $this->session->userdata('user_data');
    if(empty($sess)){
      redirect('login','refresh');
      exit;
    }
    //SET TABLE NAME
    define('TABLE','keterangan_atc_obat');
    //SET BREADCRUMB
    $this->session->set_userdata(array('breadcrumb'=>'master'));
    $this->session->set_userdata(array('main_sub_breadcrumb'=>'keterangan_atc_obat'));
  }

  //INDEX FOR FIRST VIEW
	public function Index(){
    //GET ATC OBAT DATA
    $sess = $this->session->userdata('user_data');
    $privilege = $sess['keterangan_atc_obat_read'];
    if($privilege != 'on'){
      echo '<script>alert("Anda mempunyai limitasi untuk mengakses laman ini, silahkan hubungi administrator"); window.location.assign("'.base_url().'Dashboard");</script>';
      exit;
    }
    $keterangan_atc_obat = $this->Model_Get_Keterangan_Atc_Obat->Normal_Select(TABLE);
    //DECLARE VIEW DATA FOR WRAPPER
	  $view_data['data']   = $keterangan_atc_obat;
    $view_data['body']   = 'body/master/keterangan_atc_obat/record_dsp';
    //LOAD VIEW DATA TO WRAPPER
    $this->load->view('wrapper',$view_data);
	}
  //END OF INDEX FOR FIRST VIEW

  //POST ATC OBAT
  public function Insert(){
    //GET POST DATA
    $sess = $this->session->userdata('user_data');
    $privilege = $sess['keterangan_atc_obat_write'];
    if($privilege != 'on'){
      echo '<script>alert("Anda mempunyai limitasi untuk mengakses laman ini, silahkan hubungi administrator"); window.location.assign("'.base_url().'Dashboard");</script>';
      exit;
    }
    $post = $this->input->post();
    //CHECK IF EMPTY POST
    if(empty($post)){
      //DECLARE VIEW DATA FOR WRAPPER
      $view_data['body']   = 'body/master/keterangan_atc_obat/create_dsp';
      //LOAD VIEW DATA TO WRAPPER
      $this->load->view('wrapper',$view_data);
    }else{
      //VALIDATE TO DATABASE
      $exist = $this->Model_Get_Keterangan_Atc_Obat->validate(TABLE,$post['keterangan']);
      if($exist==1)
      {
		echo '<script>alert("ID Untuk Keterangan ATC Obat ini Sudah Ada"); window.location.assign("'.base_url().'Keterangan_Atc_Obat");</script>';
        //redirect('kekuatan');
      }
      else {
        //INSERT TO DATABASE
        $this->Model_Transaction->Insert_To_Db($post,TABLE);
		echo '<script>alert("Berhasil Menambahkan Data"); window.location.assign("'.base_url().'Keterangan_Atc_Obat");</script>';
      }
    }
  }

  public function Update(){
    $sess = $this->session->userdata('user_data');
    $privilege = $sess['keterangan_atc_obat_write'];
    if($privilege != 'on'){
      echo '<script>alert("Anda mempunyai limitasi untuk mengakses laman ini, silahkan hubungi administrator"); window.location.assign("'.base_url().'Dashboard");</script>';
      exit;
    }
  	$uri = $this->uri->segment(3);
  	if(empty($uri)){
  		$post = $this->input->post();
      $id = $post['id'];
      $data = array(
        'keterangan' => $post['keterangan']
      );
  		$this->Model_Transaction->Update_To_Db($data,TABLE,'id',$id);
  		echo '<script>alert("Berhasil Merubah Data"); window.location.assign("'.base_url().'Keterangan_Atc_Obat");</script>';
  	}else{
      //GET ATC OBAT DATA
  		$atc_obat = $this->Model_Get_Keterangan_Atc_Obat->Update_Select(TABLE,'id',$uri);
  		//DECLARE VIEW DATA FOR WRAPPER
  		$view_data['data']   = $atc_obat[0];
  		$view_data['body']   = 'body/master/keterangan_atc_obat/update_dsp';
  		//LOAD VIEW DATA TO WRAPPER
  		$this->load->view('wrapper',$view_data);
  		}
  }

  public function Delete(){
    $sess = $this->session->userdata('user_data');
    $privilege = $sess['keterangan_atc_obat_delete'];
    if($privilege != 'on'){
      echo '<script>alert("Anda mempunyai limitasi untuk mengakses laman ini, silahkan hubungi administrator"); window.location.assign("'.base_url().'Dashboard");</script>';
      exit;
    }
  	$uri = $this->uri->segment(3);
  	$data = array(
  		'deleted'	=> '1'
  	);
  	$this->Model_Transaction->Update_To_Db($data,TABLE,'id',$uri);
  	echo '<script>alert("Berhasil Menghapus Data"); window.location.assign("'.base_url().'Keterangan_Atc_Obat");</script>';
  }
  //END OF POST ATC OBAT
}
?>
