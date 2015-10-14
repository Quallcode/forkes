<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
  //CONSTRUCT FOR LOGIN
  function __construct(){
    parent::__construct();
  }

  //INDEX FOR FIRST VIEW
	public function index()
  {
    $this->load->view('login');
	}
}
