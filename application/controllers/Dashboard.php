<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
  //CONSTRUCT FOR LOGIN
  function __construct(){
    parent::__construct();
    //CALL MODEL
    $this->load->model('Model_users');
    //CHECK SESSION LOGIN
    $session = $this->session->userdata('username');
    if(!empty($session)) {
      redirect('dashboard' , 'refresh');
      exit();
    }
  }

  //INDEX FOR FIRST VIEW
	public function Index()
  {
    //DECLARE VIEW DATA FOR WRAPPER
    $view_data['body']   = 'body/dashboard/dsp';
    //LOAD VIEW DATA TO WRAPPER
    $this->load->view('wrapper',$view_data);
	}
}
