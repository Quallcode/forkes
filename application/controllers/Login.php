<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
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
	public function index()
  {
    $this->load->dbforge();
    $fields = array(
            'blog_title' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
            ),
            'blog_author' => array(
                    'type' =>'VARCHAR',
                    'constraint' => '100',
                    'default' => 'King of Town',
            ),
            'blog_description' => array(
                    'type' => 'TEXT',
                    'null' => TRUE,
            ),
    );
    $this->dbforge->add_field($fields);
    $this->dbforge->add_field('id');
    $this->dbforge->create_table('users');
    //DECLARE VIEW DATA FOR WRAPPER
    $view_data['header'] = 'header';
    $view_data['body']   = 'body/users/login/dsp';
    $view_data['footer'] = 'footer';
    //LOAD VIEW DATA TO WRAPPER
    $this->load->view('wrapper',$view_data,TRUE);
	}
}
