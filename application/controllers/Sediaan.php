<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sediaan extends CI_Controller {
  //CONSTRUCT FOR SEDIAAN
  function __construct(){
    parent::__construct();
    //INIT MODEL TRANSACTION
    $this->load->model('Model_Transaction');
    //CHECK SESSION
    $sess = $this->session->userdata('user_data');
    if(empty($sess)){
      redirect('login','refresh');
      exit;
    }
    //SET TABLE NAME
    define('TABLE','sediaan')
    //SET BREADCRUMB
    $this->session->set_userdata(array('breadcrumb'=>'sediaan'));
  }

  //INDEX FOR FIRST VIEW
	public function Index(){
    //GET SEDIAAN DATA
    $sediaan = $this->Model_Get_Sediaan->Normal_Select(TABLE);
    print_r($sediaan);exit;
    //DECLARE VIEW DATA FOR WRAPPER
    $view_data['body']   = 'body/master/sediaan/record_dsp';
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
      $view_data['body']   = 'body/master/sediaan/create_dsp';
      //LOAD VIEW DATA TO WRAPPER
      $this->load->view('wrapper',$view_data);
    }else{
      //INSERT TO DATABASE
      $this->Model_Transaction->Insert_To_Db($post,TABLE);
      redirect('sediaan');
    }
  }
  //END OF POST SEDIAAN
}
?>
