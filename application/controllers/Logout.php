<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
  //CONSTRUCT FOR LOGIN
  function __construct(){
		parent::__construct();;
		//check session
		$this->session->unset_userdata('user_data');
		$this->session->sess_destroy();
	}
  //END OF POST LOGIN

  //LOGOUT FUNCTION
  public function Index(){
      session_write_close();
      redirect('login','refresh');
      exit;
  }
  //END OF LOGOUT
}
?>
