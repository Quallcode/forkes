<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create extends CI_Controller {
  //CONSTRUCT FOR LOGIN
  function __construct(){
    parent::__construct();
    //CALL MODEL
    $this->load->dbforge();
    $this->load->dbutil();
  }

  //INDEX FOR FIRST VIEW
	public function Index(){
    //GET POST DATABASE NAME
    $post = $this->input->post();
    if(!empty($post)){
      $db_name = $post['database'];
      //COMPILE FOR CREATE DATABASE
      if ($this->dbforge->create_database($db_name)){
        echo 'Database created! <br/>Compile for create database '.$db_name.' success <br/> <a href="'.base_url().'compiler/createdb">Click here to back</a>';
      }
    }else{
      $dbs = $this->dbutil->list_databases();
      $view_data['list_db'] = $dbs;
      $view_data['body'] = 'compiler/create/db';
      $this->load->view('compiler/wrapper',$view_data);
    }
	}

  public function Dropdb(){
    //GET POST DATABASE NAME
    $post = $this->input->post();
    if(!empty($post)){
      $db_name = $post['database'];
      //COMPILE FOR DROP DATABASE
      if ($this->dbforge->drop_database($db_name))
      {
        echo 'Database deleted!<br/>Compile for drop database '.$db_name.' success <br/> <a href="'.base_url().'compiler/createdb">Click here to back</a>';
      }
    }else{
      echo('Compile for drop database Failed');
    }
  }
}
