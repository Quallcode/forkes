<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fornas extends CI_Controller {
  //CONSTRUCT FOR FORNAS
  function __construct(){
    parent::__construct();
    //INIT MODEL FORNAS
    $this->load->model('Model_Get_Fornas');
	$this->load->model('Model_Get_Atc_Obat');
	$this->load->model('Model_Get_Kekuatan');
	$this->load->model('Model_Get_Kelas_Terapi');
	$this->load->model('Model_Get_Fornas');
	$this->load->model('Model_Get_Fornas');
	$this->load->model('Model_Get_Fornas');
    //CHECK SESSION
    $sess = $this->session->userdata('user_data');
    if(empty($sess)){
      redirect('login','refresh');
      exit;
    }
    //SET TABLE NAME
    define('TABLE','fornas');
    //SET BREADCRUMB
    $this->session->set_userdata(array('breadcrumb'=>'master'));
    $this->session->set_userdata(array('main_sub_breadcrumb'=>'fornas'));
  }

  //INDEX FOR FIRST VIEW
	public function Index(){
    //GET FORNAS DATA
    $fornas = $this->Model_Get_Fornas->Custom_Fornas();
    //print_r($fornas);exit;
    //DECLARE VIEW DATA FOR WRAPPER
    $view_data['data']   = $fornas;
    $view_data['body']   = 'body/master/fornas/record_dsp';
    //LOAD VIEW DATA TO WRAPPER
    $this->load->view('wrapper',$view_data);
	}
  //END OF INDEX FOR FIRST VIEW

  //POST FORNAS
  public function Insert(){
    //GET POST DATA
    $post = $this->input->post();
    //CHECK IF EMPTY POST
    if(empty($post)){
		$view_data['kelas_terapi']   = 'body/master/fornas/create_dsp';
		$view_data['sub_kelasterapi']   = 'body/master/fornas/create_dsp';
		$view_data['sub_kelasterapi1']   = 'body/master/fornas/create_dsp';
		$view_data['sub_kelasterapi2']   = 'body/master/fornas/create_dsp';
		$view_data['atc_obat']   = 'body/master/fornas/create_dsp';
		$view_data['sediaan']   = 'body/master/fornas/create_dsp';
		$view_data['kekuatan']   = 'body/master/fornas/create_dsp';
		$view_data['satuan']   = 'body/master/fornas/create_dsp';
      //DECLARE VIEW DATA FOR WRAPPER
      $view_data['body']   = 'body/master/fornas/create_dsp';
      //LOAD VIEW DATA TO WRAPPER
      $this->load->view('wrapper',$view_data);
    }else{
      //VALIDATE TO DATABASE
      $exist = $this->Model_Get_Fornas->validate(TABLE,$post['id_satuan']);
      if($exist==1)
      {
        echo '<script>alert("ID Fornas Sudah Ada"); window.location.assign("'.base_url().'Fornas");</script>';
      }
      else {
        //INSERT TO DATABASE
        $this->Model_Transaction->Insert_To_Db($post,TABLE);
		echo '<script>alert("Berhasil Menambahkan Data"); window.location.assign("'.base_url().'Fornas");</script>';
      }
    }
  }

  /*public function Update(){
	$uri = $this->uri->segment(3);
	if(empty($uri)){
		$post = $this->input->post();
		$id = $post['id'];
		$data = array(
			'id_satuan' 	=> $post['id_satuan'],
			'nama_satuan'	=> $post['nama_satuan'],
			'keterangan'	=> $post['keterangan']
		);
		$this->Model_Transaction->Update_To_Db($data,TABLE,'id',$id);
		echo '<script>alert("Berhasil Merubah Data"); window.location.assign("'.base_url().'Satuan");</script>';
	}else{
    //GET SATUAAN DATA
		$satuan = $this->Model_Get_Satuan->Update_Select(TABLE,'id',$uri);
		//DECLARE VIEW DATA FOR WRAPPER
		$view_data['data']   = $satuan[0];
		$view_data['body']   = 'body/master/satuan/update_dsp';
		//LOAD VIEW DATA TO WRAPPER
		$this->load->view('wrapper',$view_data);
		}
  }

  public function Delete(){
	$uri = $this->uri->segment(3);
	$data = array(
		'deleted'	=> '1'
	);
	$this->Model_Transaction->Update_To_Db($data,TABLE,'id',$uri);
	echo '<script>alert("Berhasil Menghapus Data"); window.location.assign("'.base_url().'Satuan");</script>';
  }*/
  //END OF POST SATUAAN
}
?>