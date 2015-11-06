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
    $nomor_efornas = $this->session->userdata('nomor_efornas');
    if(empty($nomor_efornas)){
      $data = array(
        'no' => date('d').'/'.date('m').'/'.date('Y').'/'.(date('His') + rand(10000,99999))
      );
      $this->session->set_userdata(array('nomor_efornas'=>$data));
      $nomor_efornas = $data;
    }
    //SET TABLE NAME
    define('TABLE','usulan');
    define('NOUSULAN','e-forkes/'.$sess['id_provinsi'].$sess['id_kabkota'].$sess['id_faskes'].'/'.$nomor_efornas['no']);
    //SET BREADCRUMB
    $this->session->set_userdata(array('breadcrumb'=>'usulan'));
  }

  public function Index(){
    //SET SUB BREADCRUMB
    $this->session->set_userdata(array('main_sub_breadcrumb'=>'daftar_usulan'));
    $sess = $this->session->userdata('user_data');
    if($sess['type'] ==1){
      $faskes = $this->Model_Get_Usulan->Normal_Select('rumah_sakit','id_rs',$sess['id_faskes'],'id_provinsi',$sess['id_provinsi'],'id_kabkota',$sess['id_kabkota']);
      $view_data['faskes'] = $faskes[0]['nama_rs'];
    }elseif($sess['type'] ==2){
      $faskes = $this->Model_Get_Usulan->Normal_Select('klinik','id_klinik',$sess['id_faskes'],'id_provinsi',$sess['id_provinsi'],'id_kabkota',$sess['id_kabkota']);
      $view_data['faskes'] = $faskes[0]['nama_klinik'];
    }
    $data = $this->Model_Get_Usulan->Custom_UsulanWithParam($sess['type'],$sess);
    //print_r($data);exit;
    //DECLARE VIEW DATA FOR WRAPPER
    $view_data['usulan'] = $data;
    $view_data['body']   = 'body/usulan/record_dsp';
    //LOAD VIEW DATA TO WRAPPER
    $this->load->view('wrapper',$view_data);
  }

  //INDEX FOR ADD USULAN VIEW
	public function Insert(){
    //SET SUB BREADCRUMB
    $this->session->set_userdata(array('main_sub_breadcrumb'=>'tambah_usulan'));
    //GET KEKUATAN DATA
    $sess = $this->session->userdata('user_data');
    $no_fornas = $this->session->userdata('nomor_efornas');
    //print_r($no_fornas);exit;
    $view_data['nousulan'] = NOUSULAN;
    $rumah_sakit = $this->Model_Get_Usulan->Normal_Select('rumah_sakit','id_rs',$sess['id_faskes'],'id_provinsi',$sess['id_provinsi'],'id_kabkota',$sess['id_kabkota']);
    $obat        = $this->Model_Get_Usulan->Normal_Select('atc_obat');
    $sediaan     = $this->Model_Get_Usulan->Normal_Select('sediaan');
    $satuan      = $this->Model_Get_Usulan->Normal_Select('satuan');
    $kekuatan    = $this->Model_Get_Usulan->Normal_Select('kekuatan');
    $basefolder  = $sess['id_provinsi'].$sess['id_kabkota'].$sess['id_faskes'];
    $no_fornas   = $no_fornas['no'];
    //print_r($rumah_sakit);exit;
    $view_data['obat'] = $obat;
    $view_data['sediaan'] = $sediaan;
    $view_data['satuan'] = $satuan;
    $view_data['kekuatan'] = $kekuatan;
    $view_data['basefolder'] = $basefolder;
    $view_data['no_fornas'] = $no_fornas;
    $view_data['rs'] = $rumah_sakit[0];
    //DECLARE VIEW DATA FOR WRAPPER
    $view_data['body']   = 'body/usulan/add_dsp';
    //LOAD VIEW DATA TO WRAPPER
    $this->load->view('wrapper',$view_data);
	}
  //END OF INDEX FOR ADD USULAN VIEW


  public function Add_Usulan(){
    $post = $this->input->post();
    $sess = $this->session->userdata('user_data');
    if(!empty($post)){
      $check = $this->Model_Get_Usulan->Validate('usulan',$post['nomor_efornas']);
      if(!empty($check)){
        echo '<script type="text/javascript">alert("Nomor efornas '.$post['nomor_efornas'].' telah terdaftar. Silahkan mencoba beberapa saat lagi"); window.location.assign("'.base_url().'usulan");</script>';
      }
      if(!isset($post['UploadFile'][0]) || !isset($post['UploadFile'][1]) ){
        echo ('<script type="text/javascript">alert("Anda harus memasukkan file data usulan obat dan surat pengantar");window.location.assign("'.base_url().'usulan/insert");</script>');
        exit;
      }
      $data_usulan = array(
        'nomor_efornas'      => $post['nomor_efornas'],
        'id_faskes'          => $sess['id_faskes'],
        'id_provinsi'        => $sess['id_provinsi'],
        'id_kabkota'         => $sess['id_kabkota'],
        'type'               => $sess['type'],
        'surat_pengantar'    => $post['UploadFile'][0],
        'daftar_usulan_obat' => $post['UploadFile'][1]
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
          'jurnal'        => $post['jurnal'][$i],
          'alasan'        => $post['alasan'][$i],
          'restriksi'     => $post['restriksi'][$i],
          'tipe_usulan'   => $post['tipe_usulan'][$i],
        );
        $this->Model_Transaction->Insert_To_Db($data_detail_usulan,'detail_usulan');
      }
      $this->session->unset_userdata('nomor_efornas');
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
    $usulan_rs = $this->Model_Get_Usulan->Custom_Usulan(1);
    $usulan_klinik = $this->Model_Get_Usulan->Custom_Usulan(1);
    $usulan_klinik = array();
    $view_data['usulan_rs'] = $usulan_rs;
    $view_data['usulan_klinik'] = $usulan_klinik;
    //print_r($usulan_rs);exit;
    //GET KEKUATAN DATA
    //$kekuatan = $this->Model_Get_Kekuatan->Normal_Select(TABLE);
    //DECLARE VIEW DATA FOR WRAPPER
    $view_data['body']   = 'body/usulan/verifikasi_dsp';
    //LOAD VIEW DATA TO WRAPPER
    $this->load->view('wrapper',$view_data);
	}
  //END OF INDEX FOR VERIFIKASI USULAN VIEW
  //FUNCTION FOR TERIMA USULAN
  Public function Terima(){
    $post = $this->input->post();
    if(!empty($post)){
      $data = array(
        'status' => 'SUDAH'
      );
      $this->Model_Transaction->Update_To_Db($data,'usulan','nomor_efornas',$post['nomor_efornas']);
    }else{
      echo ('Anda tidak bisa mengakeses laman ini');
    }
  }
  //END OF INDEX FOR TERIMA USULAN
  //FUNCTION FOR TOLAK USULAN
  Public function Tolak(){
    $post = $this->input->post();
    if(!empty($post)){
      $data = array(
        'status' => 'TIDAK'
      );
      $this->Model_Transaction->Update_To_Db($data,'usulan','nomor_efornas',$post['nomor_efornas']);
    }else{
      echo ('Anda tidak bisa mengakeses laman ini');
    }
  }
  //END OF INDEX FOR TOLAK USULAN
}
?>
