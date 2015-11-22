<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
  //CONSTRUCT FOR LOGIN
  function __construct(){
		parent::__construct();;
		//INIT MODEL USERS
    	$this->load->model('Model_Users');
		//check session
		$sess = $this->session->userdata('user_data');
		//print_r($sess);exit;
	}
  //END OF POST LOGIN

  //LOGOUT FUNCTION
  public function Index(){
	  $sess = $this->session->userdata('user_data');
	  $data_input= array(
						'flag' 			=> '0',
						'date_login'	=> date('Y-m-d H:i:s'),
					);
					$this->Model_Users->Update_Flag_0($data_input,$sess['username']);
	  $this->session->unset_userdata('user_data');
	  $this->session->sess_destroy();
      session_write_close();
      redirect('login','refresh');
      exit;
  }
  //END OF LOGOUT
}
?>
