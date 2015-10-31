<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usulan extends CI_Controller {
  //CONSTRUCT FOR KEKUATAN
  function __construct(){
    parent::__construct();
    //INIT MODEL TRANSACTION
    $this->load->model('Model_Transaction');
    $this->load->model('Model_Get_Usulan');
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
    $sess = $this->session->userdata('user_data');
    $view_data['nousulan'] = NOUSULAN;
    $rumah_sakit = $this->Model_Get_Usulan->Normal_Select('rumah_sakit','id_rs',$sess['id_faskes'],'id_provinsi',$sess['id_provinsi'],'id_kabkota',$sess['id_kabkota']);
    $obat        = $this->Model_Get_Usulan->Normal_Select('atc_obat');
    $sediaan     = $this->Model_Get_Usulan->Normal_Select('sediaan');
    $satuan      = $this->Model_Get_Usulan->Normal_Select('satuan');
    $kekuatan    = $this->Model_Get_Usulan->Normal_Select('kekuatan');
    //print_r($rumah_sakit);exit;
    $view_data['obat'] = $obat;
    $view_data['sediaan'] = $sediaan;
    $view_data['satuan'] = $satuan;
    $view_data['kekuatan'] = $kekuatan;
    $view_data['rs'] = $rumah_sakit[0];
    //DECLARE VIEW DATA FOR WRAPPER
    $view_data['body']   = 'body/usulan/dsp';
    //LOAD VIEW DATA TO WRAPPER
    $this->load->view('wrapper',$view_data);
	}
  //END OF INDEX FOR ADD USULAN VIEW


  public function Add_Usulan(){
    $post = $this->input->post();
    $sess = $this->session->userdata('user_data');
    if(!empty($post)){
      $check = $this->Model_Get_Usulan->Validate($post['nomor_efornas']);
      if(!empty($check)){
        echo '<script type="text/javascript">alert("Nomor efornas '.$post['nomor_efornas'].' telah terdaftar. Silahkan mencoba beberapa saat lagi"); window.location.assign("'.base_url().'usulan");</script>';
      }
      $data_usulan = array(
        'nomor_efornas' => $post['nomor_efornas'],
        'id_faskes'     => $sess['id_faskes'],
        'id_provinsi'   => $sess['id_provinsi'],
        'id_kabkota'    => $sess['id_kabkota']
      );
      $this->Model_Transaction->Insert_To_Db($data_usulan,'usulan');
      $counted = count($post['id_atc_obat']);
      for($i = 0; $i <$counted; $i++){
        $data_detail_usulan = array(
          'nomor_efornas' => $post['nomor_efornas'],
          'id_atc_obat'   => $post['id_atc_obat'][$i],
          'id_sediaan'    => $post['id_sediaan'][$i],
          'id_kekuatan'   => $post['id_kekuatan'][$i],
          'id_satuan'     => $post['id_satuan'][$i],
        );
        $this->Model_Transaction->Insert_To_Db($data_detail_usulan,'detail_usulan');
      }
      echo '<script type="text/javascript">alert("User Berhasil melakukan penambahan usulan dengan nomor efornas '.$post['nomor_efornas'].'"); window.location.assign("'.base_url().'dashboard");</script>';
    }else{
      echo "Error empty post occured";
    }
  }

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
