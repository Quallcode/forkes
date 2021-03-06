<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_registrasi extends CI_Controller {
  //CONSTRUCT FOR KEKUATAN
  function __construct(){
    parent::__construct();
    //INIT MODEL TRANSACTION
    $this->load->model('Model_Transaction');
    $this->load->model('Model_Get_RumahSakit');
    $this->load->model('Model_Get_Dokter_Praktek');
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
    $post = $this->input->post();
    //print_r($post);exit;
    $id_provinsi = $this->input->post('id_provinsi');
    $id_kabkota = $this->input->post('id_kabkota');
    //SET SUB BREADCRUMB
    $data = $this->Model_Get_RumahSakit->Custom_Select($id_provinsi,$id_kabkota);
    //print_r($data); exit;
    $this->session->set_userdata(array('main_sub_breadcrumb'=>'form_rumah_sakit'));
    //DECLARE VIEW DATA FOR WRAPPER
    //$view_data['data']   = $kekuatan;
	  $view_data['data']   = $data;
    //$view_data['body']   = 'body/form/rumah_sak_dsp';
    //LOAD VIEW DATA TO WRAPPER
    $this->load->view('body/form/rumah_sakit_dsp',$view_data);
  }

  public function Daftar_User(){
    $post = $this->input->post();
    if(!empty($post)){
      //$arr_rs = explode('#',$post['organization']);
      //print_r($arr_rs);exit;
      $post['type']    = $post['organization'];
      unset($post['organization']);
      if($post['type'] == '1'){
        unset($post['nama_praktek']);
        unset($post['email_praktek']);
        unset($post['no_telp_praktek']);
        unset($post['username_praktek']);
        unset($post['password_praktek']);
      }else{
        unset($post['id_provinsi']);
        unset($post['id_kabkota']);
        unset($post['id_faskes']);
        unset($post['nama']);
        unset($post['email']);
        unset($post['no_telp']);
        unset($post['username']);
        unset($post['passwor']);
        $post['nama'] = $post['nama_praktek'];
        $post['email'] = $post['email_praktek'];
        $post['no_telp'] = $post['no_telp_praktek'];
        $post['username'] = $post['username_praktek'];
        $post['password'] = $post['password_praktek'];
        unset($post['nama_praktek']);
        unset($post['email_praktek']);
        unset($post['no_telp_praktek']);
        unset($post['username_praktek']);
        unset($post['password_praktek']);
      }
      $post['password']     = md5($post['password']);
      //print_r($post);exit;
      $this->Model_Transaction->Insert_To_Db($post,'users');
      echo '<script>alert("User Berhasil melakukan registrasi silahkan melakukan login"); window.location.assign("'.base_url().'login");</script>';
    }else{
      echo '<script>alert("Error, masukan anda kosong atau tidak terbaca di server"); window.location.assign("'.base_url().'form_registrasi/rumah_sakit");</script>';
    }
  }

  public function Dokter_praktek(){
    //SET SUB BREADCRUMB
    $data = $this->Model_Get_Dokter_Praktek->Normal_Select(TABLE);
    $view['data'] = $data;
    $this->session->set_userdata(array('main_sub_breadcrumb'=>'form_dokter_praktek'));
    //DECLARE VIEW DATA FOR WRAPPER
    //$view_data['data']   = $kekuatan;
    //$view_data['body']   = 'body/form/dokter_prak_dsp';
    //LOAD VIEW DATA TO WRAPPER
    $view['data'] = $data;
    $this->load->view('body/form/dokter_praktek_dsp',$view);
  }
}
?>
