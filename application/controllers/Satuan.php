<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satuan extends CI_Controller {
  //CONSTRUCT FOR SEDIAAN
  function __construct(){
    parent::__construct();
    //INIT MODEL TRANSACTION
    $this->load->model('Model_Transaction');
    $this->load->model('Model_Get_Satuan');
    //CHECK SESSION
    $sess = $this->session->userdata('user_data');
    if(empty($sess)){
      redirect('login','refresh');
      exit;
    }
    //SET TABLE NAME
    define('TABLE','satuan');
    //SET BREADCRUMB
    $this->session->set_userdata(array('breadcrumb'=>'master'));
    $this->session->set_userdata(array('main_sub_breadcrumb'=>'satuan'));
  }

  //INDEX FOR FIRST VIEW
	public function Index(){
    //GET SEDIAAN DATA
    $satuan = $this->Model_Get_Satuan->Normal_Select(TABLE);
    //print_r($satuan);exit;
    //DECLARE VIEW DATA FOR WRAPPER
    $view_data['data']   = $satuan;
    $view_data['body']   = 'body/master/satuan/record_dsp';
    //LOAD VIEW DATA TO WRAPPER
    $this->load->view('wrapper',$view_data);
	}
  //END OF INDEX FOR FIRST VIEW

  //POST SEDIAAN
  public function Insert(){
    //GET POST DATA
    $post = $this->input->post();
    //CHECK IF EMPTY POST
    if(empty($post)){
      //DECLARE VIEW DATA FOR WRAPPER
      $view_data['body']   = 'body/master/satuan/create_dsp';
      //LOAD VIEW DATA TO WRAPPER
      $this->load->view('wrapper',$view_data);
    }else{
      //INSERT TO DATABASE
      $this->Model_Transaction->Insert_To_Db($post,TABLE);
      redirect('satuan');
    }
  }
  //END OF POST SEDIAAN
}
?>
