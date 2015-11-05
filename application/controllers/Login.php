<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
  //CONSTRUCT FOR LOGIN
  function __construct(){
    parent::__construct();
    //INIT MODEL USERS
    $this->load->model('Model_Users');
    //CHECK SESSION
    $sess = $this->session->userdata('user_data');
    if(!empty($sess)){
      redirect('dashboard','refresh');
      exit;
    }
  }

  //INDEX FOR FIRST VIEW
	public function Index(){
    $this->load->view('login');
	}
  //END OF INDEX FOR FIRST VIEW

  //POST LOGIN
  public function Verify(){
    //GET POST DATA
    $post = $this->input->post();
    //CHECK IF EMPTY POST
    if(empty($post['username']) || empty($post['password'])){
      echo '<script>alert("Username atau Password anda kosong"); window.location.assign("'.base_url().'login");</script>';
    }else{
      //CHECK POST TO DATABASE
      $data = $this->Model_Users->Check_Login_Valid($post);
      $this->session->set_userdata(array('user_data'=>$data));
      if(!empty($data)) {
        //IF DATA EXIST
        echo '<script>alert("Selamat Datang '.$data['nama'].'"); window.location.assign("'.base_url().'dashboard");</script>';
      } else {
        //IF DATA NOT EXIST
        echo '<script>alert("Username atau Password anda salah"); window.location.assign("'.base_url().'login");</script>';
      }
    }
  }
  //END OF POST LOGIN

  //LOGOUT FUNCTION
  public function Logout(){
      $this->session->unset_userdata('user_data');
      session_write_close();
      redirect('login','refresh');
      exit;
  }
  //END OF LOGOUT
}
?>
