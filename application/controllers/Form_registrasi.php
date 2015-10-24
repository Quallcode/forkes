<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_registrasi extends CI_Controller {
  //CONSTRUCT FOR KEKUATAN
  function __construct(){
    parent::__construct();
    //INIT MODEL TRANSACTION
    //$this->load->model('Model_Transaction');
    //$this->load->model('Model_Get_Kekuatan');
    //CHECK SESSION
    $sess = $this->session->userdata('user_data');
    if(empty($sess)){
      redirect('login','refresh');
      exit;
    }
    //SET TABLE NAME
    define('TABLE','kekuatan');
    //SET BREADCRUMB
    $this->session->set_userdata(array('breadcrumb'=>'form'));
  }

  public function Rumah_sakit(){
    //SET SUB BREADCRUMB
    $this->session->set_userdata(array('main_sub_breadcrumb'=>'form_rumah_sakit'));
    //DECLARE VIEW DATA FOR WRAPPER
    //$view_data['data']   = $kekuatan;
    $view_data['body']   = 'body/form/rumah_sakit_dsp';
    //LOAD VIEW DATA TO WRAPPER
    $this->load->view('wrapper',$view_data);
  }

  public function Dokter_praktek(){
    //SET SUB BREADCRUMB
    $this->session->set_userdata(array('main_sub_breadcrumb'=>'form_dokter_praktek'));
    //DECLARE VIEW DATA FOR WRAPPER
    //$view_data['data']   = $kekuatan;
    $view_data['body']   = 'body/form/dokter_praktek_dsp';
    //LOAD VIEW DATA TO WRAPPER
    $this->load->view('wrapper',$view_data);
  }
}
?>
