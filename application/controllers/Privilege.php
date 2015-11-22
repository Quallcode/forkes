<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Privilege extends CI_Controller {
  //CONSTRUCT FOR KEKUATAN
  function __construct(){
    parent::__construct();
    //INIT MODEL TRANSACTION
    $this->load->model('Model_Transaction');
    $this->load->model('Model_Get_Privilege');
    //CHECK SESSION
    $sess = $this->session->userdata('user_data');
    if(empty($sess)){
      redirect('login','refresh');
      exit;
    }
    //SET TABLE NAME
    define('TABLE','privilege');
    //SET BREADCRUMB
    $this->session->set_userdata(array('breadcrumb'=>'manajemen_user'));
    $this->session->set_userdata(array('main_sub_breadcrumb'=>'privilege'));
  }

  //INDEX FOR FIRST VIEW
	public function Index(){
    //GET KEKUATAN DATA
    $sess = $this->session->userdata('user_data');
    $privilege = $sess['privilege_read'];
    if($privilege != 'on'){
      echo '<script>alert("Anda mempunyai limitasi untuk mengakses laman ini, silahkan hubungi administrator"); window.location.assign("'.base_url().'Dashboard");</script>';
      exit;
    }
    $users = $this->Model_Get_Privilege->Normal_Select(TABLE);
    //DECLARE VIEW DATA FOR WRAPPER
	  $view_data['data']   = $users;
    $view_data['body']   = 'body/privilege/record_dsp';
    //LOAD VIEW DATA TO WRAPPER
    $this->load->view('wrapper',$view_data);
	}
  //END OF INDEX FOR FIRST VIEW

  //POST KEKUATAN
  public function Insert(){
    //GET POST DATA
    $sess = $this->session->userdata('user_data');
    $privilege = $sess['privilege_write'];
    if($privilege != 'on'){
      echo '<script>alert("Anda mempunyai limitasi untuk mengakses laman ini, silahkan hubungi administrator"); window.location.assign("'.base_url().'Dashboard");</script>';
      exit;
    }
    $post = $this->input->post();

    //CHECK IF EMPTY POST
    if(empty($post)){
      //DECLARE VIEW DATA FOR WRAPPER
      $view_data['body']   = 'body/privilege/create_dsp';
      //LOAD VIEW DATA TO WRAPPER
      $this->load->view('wrapper',$view_data);
    }else{
      //print_r($post);exit;
      //VALIDATE TO DATABASE
      $exist = $this->Model_Get_Privilege->validate(TABLE,$post['nama_privilege']);
      if($exist==1){
		    echo '<script>alert("Privilege Sudah Tedaftar"); window.location.assign("'.base_url().'Privilege/Insert");</script>';
        //redirect('kekuatan');
      } else {
        //INSERT TO DATABASE
        $this->Model_Transaction->Insert_To_Db($post,TABLE);
		    echo '<script>alert("Berhasil Menambahkan Data"); window.location.assign("'.base_url().'Privilege/Insert");</script>';
      }
    }
  }

  public function Update(){
    $sess = $this->session->userdata('user_data');
    $privilege = $sess['privilege_write'];
    if($privilege != 'on'){
      echo '<script>alert("Anda mempunyai limitasi untuk mengakses laman ini, silahkan hubungi administrator"); window.location.assign("'.base_url().'Dashboard");</script>';
      exit;
    }
  	$uri = $this->uri->segment(3);
  	if(empty($uri)){
  		$post = $this->input->post();
  		$id = $post['id'];
  		$data = array(
  			'id_kekuatan' 	=> $post['id_kekuatan'],
  			'kekuatan'		=> $post['kekuatan']
  		);
  		$this->Model_Transaction->Update_To_Db($data,TABLE,'id',$id);
  		echo '<script>alert("Berhasil Merubah Data"); window.location.assign("'.base_url().'Kekuatan");</script>';
  	}else{
      //GET KEKUATAN DATA
  		$kekuatan = $this->Model_Get_Kekuatan->Update_Select(TABLE,'id',$uri);
  		//DECLARE VIEW DATA FOR WRAPPER
  		$view_data['data']   = $kekuatan[0];
  		$view_data['body']   = 'body/master/kekuatan/update_dsp';
  		//LOAD VIEW DATA TO WRAPPER
  		$this->load->view('wrapper',$view_data);
		}
  }

  public function Delete(){
    $sess = $this->session->userdata('user_data');
    $privilege = $sess['privilege_delete'];
    if($privilege != 'on'){
      echo '<script>alert("Anda mempunyai limitasi untuk mengakses laman ini, silahkan hubungi administrator"); window.location.assign("'.base_url().'Dashboard");</script>';
      exit;
    }
  	$uri = $this->uri->segment(3);
  	$data = array(
  		'deleted'	=> '1'
  	);
  	$this->Model_Transaction->Update_To_Db($data,TABLE,'id',$uri);
  	echo '<script>alert("Berhasil Menghapus Data"); window.location.assign("'.base_url().'Privilege");</script>';
  }
  //END OF POST KEKUATAN
}
?>
