<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usulan extends CI_Controller {
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
    define('TABLE','usulan');
    define('NOUSULAN','e-forkes/'.$sess['id_provinsi'].$sess['id_kabkota'].$sess['id_faskes'].'/'.date('d').'/'.date('m').'/'.date('Y').'/'.(date('His') + rand(10000,99999)));
    //SET BREADCRUMB
    $this->session->set_userdata(array('breadcrumb'=>'usulan'));
  }

  //INDEX FOR ADD USULAN VIEW
	public function Index(){
    //SET SUB BREADCRUMB
    $this->session->set_userdata(array('main_sub_breadcrumb'=>'tambah_usulan'));
    //GET KEKUATAN DATA
    //$kekuatan = $this->Model_Get_Kekuatan->Normal_Select(TABLE);
    //DECLARE VIEW DATA FOR WRAPPER
    $view_data['body']   = 'body/usulan/dsp';
    //LOAD VIEW DATA TO WRAPPER
    $this->load->view('wrapper',$view_data);
	}
  //END OF INDEX FOR ADD USULAN VIEW

  //INDEX FOR DAFTAR USULAN LENGKAP VIEW
	public function Daftar_lengkap(){
    //SET SUB BREADCRUMB
    $this->session->set_userdata(array('main_sub_breadcrumb'=>'daftar_usulan_lengkap'));
    //GET KEKUATAN DATA
    //$kekuatan = $this->Model_Get_Kekuatan->Normal_Select(TABLE);
    //DECLARE VIEW DATA FOR WRAPPER
    $view_data['body']   = 'body/usulan/daftar_lengkap_dsp';
    //LOAD VIEW DATA TO WRAPPER
    $this->load->view('wrapper',$view_data);
	}
  //END OF INDEX FOR DAFTAR USULAN LENGKAP VIEW

  //INDEX FOR DAFTAR USULAN TIDAK LENGKAP VIEW
	public function Daftar_tidak_lengkap(){
    //SET SUB BREADCRUMB
    $this->session->set_userdata(array('main_sub_breadcrumb'=>'daftar_usulan_tidak_lengkap'));
    //GET KEKUATAN DATA
    //$kekuatan = $this->Model_Get_Kekuatan->Normal_Select(TABLE);
    //DECLARE VIEW DATA FOR WRAPPER
    $view_data['body']   = 'body/usulan/daftar_tidak_lengkap_dsp';
    //LOAD VIEW DATA TO WRAPPER
    $this->load->view('wrapper',$view_data);
	}
  //END OF INDEX FOR DAFTAR USULAN TIDAK LENGKAP VIEW

  //INDEX FOR VERIFIKASI USULAN VIEW
	public function Verifikasi(){
    //SET SUB BREADCRUMB
    $this->session->set_userdata(array('main_sub_breadcrumb'=>'verifikasi_usulan'));
    //GET KEKUATAN DATA
    //$kekuatan = $this->Model_Get_Kekuatan->Normal_Select(TABLE);
    //DECLARE VIEW DATA FOR WRAPPER
    $view_data['body']   = 'body/usulan/verifikasi_dsp';
    //LOAD VIEW DATA TO WRAPPER
    $this->load->view('wrapper',$view_data);
	}
  //END OF INDEX FOR VERIFIKASI USULAN VIEW
}
?>
