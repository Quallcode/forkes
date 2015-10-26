<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_registrasi extends CI_Controller {
  //CONSTRUCT FOR KEKUATAN
  function __construct(){
    parent::__construct();
    //INIT MODEL TRANSACTION
    $this->load->model('Model_Transaction');
    $this->load->model('Model_Get_RumahSakit');
    /**CHECK SESSION
    $sess = $this->session->userdata('user_data');
    if(!empty($sess)){
      redirect('dashboard','refresh');
      exit;
    }**/
    //SET TABLE NAME
    define('TABLE','rumah_sakit');
    //SET BREADCRUMB
    $this->session->set_userdata(array('breadcrumb'=>'form'));
  }

  public function Rumah_sakit(){
    //SET SUB BREADCRUMB
    $data = $this->Model_Get_RumahSakit->Normal_Select(TABLE);
    $this->session->set_userdata(array('main_sub_breadcrumb'=>'form_rumah_sakit'));
    //DECLARE VIEW DATA FOR WRAPPER
    //$view_data['data']   = $kekuatan;
    $view_data['data']   = $data;
    $view_data['body']   = 'body/form/rumah_sakit_dsp';
    //LOAD VIEW DATA TO WRAPPER
    $this->load->view('wrapper',$view_data);
  }

  public function Daftar_User(){
    $post = $this->input->post();
    if(!empty($post)){
      $arr_rs = explode('#',$post['organization']);
      //print_r($arr_rs);exit;
      unset($post['organization']);
      $post['id_provinsi']  = $arr_rs[0];
      $post['id_kabkota']   = $arr_rs[1];
      $post['id_faskes']    = $arr_rs[2];
      $post['password']     = md5($post['password']);
      $this->Model_Transaction->Insert_To_Db($post,'users');
      echo '<script>alert("User Berhasil melakukan registrasi silahkan melakukan login"); window.location.assign("'.base_url().'login");</script>';
    }else{
      echo '<script>alert("Error, masukan anda kosong atau tidak terbaca di server"); window.location.assign("'.base_url().'form_registrasi/rumah_sakit");</script>';
    }
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
