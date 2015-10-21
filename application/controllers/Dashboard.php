<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
  //CONSTRUCT FOR LOGIN
  function __construct(){
    parent::__construct();
    //CALL MODEL
    $this->load->model('Model_Users');
	  $this->load->model('Model_Dashboard');
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
}
