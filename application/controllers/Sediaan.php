<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sediaan extends CI_Controller {
  //CONSTRUCT FOR SEDIAAN
  function __construct(){
    parent::__construct();
    //INIT MODEL TRANSACTION
    $this->load->model('Model_Transaction');
    $this->load->model('Model_Get_Sediaan');
    //CHECK SESSION
    $sess = $this->session->userdata('user_data');
    if(empty($sess)){
      redirect('login','refresh');
      exit;
    }
    //SET TABLE NAME
    define('TABLE','sediaan');
    //SET BREADCRUMB
    $this->session->set_userdata(array('breadcrumb'=>'master'));
    $this->session->set_userdata(array('main_sub_breadcrumb'=>'sediaan'));
  }

  //INDEX FOR FIRST VIEW
	public function Index(){
    //GET SEDIAAN DATA
    $sediaan = $this->Model_Get_Sediaan->Normal_Select(TABLE);
    //print_r($sediaan);exit;
    //DECLARE VIEW DATA FOR WRAPPER
    $view_data['data'] = $sediaan;
    $view_data['body']   = 'body/master/sediaan/record_dsp';
    //LOAD VIEW DATA TO WRAPPER
    $this->load->view('wrapper',$view_data);
	}
  //END OF INDEX FOR FIRST VIEW

  //POST SEDIAAN
  public function Insert(){
    //GET POST DATA
    $post = $this->input->post();
    //CHECK IF EMPTY POST
    if(empty($post)){
      //DECLARE VIEW DATA FOR WRAPPER
      $view_data['body']   = 'body/master/sediaan/create_dsp';
      //LOAD VIEW DATA TO WRAPPER
      $this->load->view('wrapper',$view_data);
    }else{
      //VALIDATE TO DATABASE
      $exist = $this->Model_Get_Sediaan->validate(TABLE,$post['id_sediaan']);
      if($exist==1)
      {
        echo '<script>alert("ID Kekuatan Sudah Ada"); window.location.assign("'.base_url().'Sediaan");</script>';
      }
      else {
        //INSERT TO DATABASE
        $this->Model_Transaction->Insert_To_Db($post,TABLE);
        echo '<script>alert("Berhasil Menambahkan Data"); window.location.assign("'.base_url().'Sediaan");</script>';
      }
    }
  }

  public function Update(){
	$uri = $this->uri->segment(3);
	if(empty($uri)){
		$post = $this->input->post();
		$id = $post['id'];
		$data = array(
			'id_sediaan' 	=> $post['id_sediaan'],
			'nama_sediaan'	=> $post['nama_sediaan'],
			'keterangan'	=> $post['keterangan']
		);
		$this->Model_Transaction->Update_To_Db($data,TABLE,'id_sediaan',$post['id_sediaan']);
		echo '<script>alert("Berhasil Merubah Data"); window.location.assign("'.base_url().'Sediaan");</script>';
	}else{
    //GET SEDIAAN DATA
		$sediaan = $this->Model_Get_Sediaan->Update_Select(TABLE,'id',$uri);
		//DECLARE VIEW DATA FOR WRAPPER
		$view_data['data']   = $sediaan[0];
		$view_data['body']   = 'body/master/sediaan/update_dsp';
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
	echo '<script>alert("Berhasil Menghapus Data"); window.location.assign("'.base_url().'Sediaan");</script>';
  }
  //END OF POST SEDIAAN
}
?>
