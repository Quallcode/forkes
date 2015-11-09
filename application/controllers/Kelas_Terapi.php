<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_Terapi extends CI_Controller {
  //CONSTRUCT FOR SATUAAN
  function __construct(){
    parent::__construct();
    //INIT MODEL TRANSACTION
    $this->load->model('Model_Transaction');
    $this->load->model('Model_Get_Kelas_Terapi');
    //CHECK SESSION
    $sess = $this->session->userdata('user_data');
    if(empty($sess)){
      redirect('login','refresh');
      exit;
    }
    //SET TABLE NAME
    define('TABLE','kelas_terapi');
    //SET BREADCRUMB
    $this->session->set_userdata(array('breadcrumb'=>'master'));
    $this->session->set_userdata(array('main_sub_breadcrumb'=>'kelas_terapi'));
  }

  //INDEX FOR FIRST VIEW
	public function Index(){
    //GET SATUAAN DATA
    $satuan = $this->Model_Get_Satuan->Normal_Select(TABLE);
    //print_r($satuan);exit;
    //DECLARE VIEW DATA FOR WRAPPER
    $view_data['data']   = $satuan;
    $view_data['body']   = 'body/master/kelas_terapi/record_dsp';
    //LOAD VIEW DATA TO WRAPPER
    $this->load->view('wrapper',$view_data);
	}
  //END OF INDEX FOR FIRST VIEW

  //POST SATUAAN
  public function Insert(){
    //GET POST DATA
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
        echo '<script>alert("ID Kelas Terapi Sudah Ada"); window.location.assign("'.base_url().'kelas_terapi");</script>';
      }
      else {
        //INSERT TO DATABASE
        $this->Model_Transaction->Insert_To_Db($post,TABLE);
		echo '<script>alert("Berhasil Menambahkan Data"); window.location.assign("'.base_url().'kelas_terapi");</script>';
      }
    }
  }

  public function update(){
	$uri = $this->uri->segment(3);
	if(empty($uri)){
		$post = $this->input->post();
		$id = $post['id'];
		$data = array(
			'id_kelas_terapi' 	=> $post['id_kelas_terapi'],
			'nama_satuan'	=> $post['nama_satuan']
		);
		$this->Model_Transaction->Update_To_Db($data,TABLE,'id',$id);
		echo '<script>alert("Berhasil Merubah Data"); window.location.assign("'.base_url().'kelas_terapi");</script>';
	}else{
    //GET SATUAAN DATA
		$satuan = $this->Model_Get_Satuan->Update_Select(TABLE,'id',$uri);
		//DECLARE VIEW DATA FOR WRAPPER
		$view_data['data']   = $satuan[0];
		$view_data['body']   = 'body/master/kelas_terapi/update_dsp';
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
	echo '<script>alert("Berhasil Menghapus Data"); window.location.assign("'.base_url().'kelas_terapi");</script>';
  }
  //END OF POST SATUAAN
}
?>
