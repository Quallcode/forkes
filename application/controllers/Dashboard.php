<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
  //CONSTRUCT FOR LOGIN
  function __construct(){
    parent::__construct();
    //CALL MODEL
    $this->load->model('Model_Users');
	$this->load->model('Model_Dashboard');
	$this->load->model('Model_Transaction');
    //CHECK SESSION LOGIN
    $session = $this->session->userdata('user_data');
    if(empty($session)) {
      redirect('login' , 'refresh');
      exit();
    }
    //SET BREADCRUMB
    $this->session->set_userdata(array('breadcrumb'=>'dashboard'));
  }

  //INDEX FOR FIRST VIEW
	public function Index(){
    //DECLARE USER DATA FROM SESSION
    $view_data['udata'] = $this->session->userdata('user_data');
    //DECLARE VIEW DATA FOR WRAPPER
    $view_data['body']   = 'body/dashboard/dsp';
    //LOAD VIEW DATA TO WRAPPER
    $this->load->view('wrapper',$view_data);
	}
	
	public function Change_password(){
		$uri = $this->uri->segment(3);
		$udata = $this->session->userdata('user_data');
		$password = $udata['password'];
		if(empty($uri)){
			$view_data['body']   = 'body/dashboard/change_password';
			$this->load->view('wrapper',$view_data);
		}else{
			$post = $this->input->post();
			$old_password = md5($post['old_password']);
			if($password == $old_password){
				$new_password = md5($post['new_password']);
				$data = array(
					'password' => $new_password
				);
				//print_r($data);exit;
				$this->Model_Transaction->Update_To_Db($data,'users','id',$uri);
				echo '<script>alert("Berhasil Mengganti Password"); window.location.assign("'.base_url().'Dashboard");</script>';
			}else{
				echo '<script>alert("Old Password yang Anda masukan salah"); window.location.assign("'.base_url().'Dashboard/Change_password");</script>';
			}
		}
	}
}
