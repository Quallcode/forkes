<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Import extends CI_Controller {

  function __construct()
  {
      // Construct the parent class
      parent::__construct();
      $this->load->helper('cURL_helper');
      $this->load->model('users_model');
      $this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
  }

	public function index()
	{
    if($this->session->userdata('nama')==NULL)
    {
      redirect('users');
    }
    else
    {
      //$data['merchant']=$this->admin_model->merchant();
      //print_r($data['merchant']); exit;
      $this->load->view('import');
    }
	}

  public function insert_file()
  {
    
  }
}
