<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kekuatan extends CI_Controller {
  //CONSTRUCT FOR SEDIAAN
  function __construct(){
    parent::__construct();
    //INIT MODEL TRANSACTION
    $this->load->model('Model_Transaction');
    $this->load->model('Model_Get_Kekuatan');
    //CHECK SESSION
    $sess = $this->session->userdata('user_data');
    if(empty($sess)){
      redirect('login','refresh');
      exit;
    }
    //SET TABLE NAME
    define('TABLE','kekuatan');
    //SET BREADCRUMB
    $this->session->set_userdata(array('breadcrumb'=>'kekuatan'));
  }

  //INDEX FOR FIRST VIEW
	public function Index(){
    //GET SEDIAAN DATA
    $kekuatan = $this->Model_Get_Kekuatan->Normal_Select(TABLE);
    //DECLARE VIEW DATA FOR WRAPPER
	  $view_data['data']   = $kekuatan;
    $view_data['body']   = 'body/master/kekuatan/record_dsp';
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
      $view_data['body']   = 'body/master/kekuatan/create_dsp';
      //LOAD VIEW DATA TO WRAPPER
      $this->load->view('wrapper',$view_data);
    }else{
      //VALIDATE TO DATABASE
      $exist = $this->Model_Get_Kekuatan->validate(TABLE,$post['id_kekuatan']);
      if($exist==1)
      {
		echo '<script>alert("ID Kekuatan Sudah Ada"); window.location.assign("'.base_url().'kekuatan");</script>';
        //redirect('kekuatan');
      }
      else {
        //INSERT TO DATABASE
        $this->Model_Transaction->Insert_To_Db($post,TABLE);
		echo '<script>alert("Berhasil Menambahkan Data"); window.location.assign("'.base_url().'kekuatan");</script>';
      }
    }
  }

  public function update(){
	$uri = $this->uri->segment(3);
	if(empty($uri)){
		$post = $this->input->post();
		$id = $post['id'];
		$data = array(
			'id_kekuatan' 	=> $post['id_kekuatan'],
			'kekuatan'		=> $post['kekuatan']
		);
		$this->Model_Transaction->Update_To_Db($data,TABLE,'id',$id);
		echo '<script>alert("Berhasil Merubah Data"); window.location.assign("'.base_url().'kekuatan");</script>';
	}else{
    //GET SEDIAAN DATA
		$kekuatan = $this->Model_Get_Kekuatan->Update_Select(TABLE,'id',$uri);
		//DECLARE VIEW DATA FOR WRAPPER
		$view_data['data']   = $kekuatan[0];
		$view_data['body']   = 'body/master/kekuatan/update_dsp';
		//LOAD VIEW DATA TO WRAPPER
		$this->load->view('wrapper',$view_data);
		}
  }

  public function delete(){
	$uri = $this->uri->segment(3);
	$data = array(
		'deleted'	=> '1'
	);
	$this->Model_Transaction->Update_To_Db($data,TABLE,'id',$uri);
	echo '<script>alert("Berhasil Menghapus Data"); window.location.assign("'.base_url().'kekuatan");</script>';
  }
  //END OF POST SEDIAAN
}
?>
