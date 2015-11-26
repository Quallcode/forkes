<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usulan extends CI_Controller {
  //CONSTRUCT FOR KEKUATAN
  function __construct(){
    parent::__construct();
    //INIT MODEL TRANSACTION
    $this->load->model('Model_Transaction');
    $this->load->model('Model_Get_Usulan');
    $this->load->model('Model_Get_Combinasi');
    $this->load->model('Model_Get_Users');
    $this->load->model('Model_Get_Typeobat');
    date_default_timezone_set('Asia/Jakarta');
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
    define('NOUSULAN','e-fornas/'.$sess['id_provinsi'].$sess['id_kabkota'].$sess['id_faskes'].'/'.$nomor_efornas['no']);
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
    }elseif($sess['type'] ==3){
      $faskes = $this->Model_Get_Usulan->Normal_Select('rumah_sakit','id_rs',$sess['id_faskes'],'id_provinsi',$sess['id_provinsi'],'id_kabkota',$sess['id_kabkota']);
      $view_data['faskes'] = $faskes[0]['nama_rs'];
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
    $terapi      = $this->Model_Get_Usulan->Normal_Select('kelas_terapi');
    $basefolder  = $sess['id_provinsi'].$sess['id_kabkota'].$sess['id_faskes'];
    $no_fornas   = $no_fornas['no'];
    //print_r($rumah_sakit);exit;
    $view_data['obat'] = $obat;
    $view_data['sediaan'] = $sediaan;
    $view_data['satuan'] = $satuan;
    $view_data['kekuatan'] = $kekuatan;
    $view_data['basefolder'] = $basefolder;
    $view_data['terapi'] = $terapi;
    $view_data['no_fornas'] = $no_fornas;
    $view_data['rs'] = $rumah_sakit[0];
    //DECLARE VIEW DATA FOR WRAPPER
    $view_data['body']   = 'body/usulan/add_dsp';
    //LOAD VIEW DATA TO WRAPPER
    $this->load->view('wrapper',$view_data);
	}
  //END OF INDEX FOR ADD USULAN VIEW

  //INDEX FOR ADD USULAN VIEW
	public function Update(){
    //SET SUB BREADCRUMB
    $this->session->set_userdata(array('main_sub_breadcrumb'=>'edit_usulan'));
    //GET KEKUATAN DATA
    $sess = $this->session->userdata('user_data');
    $post = $this->input->post();
    //print_r($post);exit;
    if(!empty($post)){
      $no_efornas = $post['nomor_efornas'];

      //print_r($nomor_efornas);exit;
      //print_r($no_fornas);exit;
      $rumah_sakit = $this->Model_Get_Usulan->Normal_Select('rumah_sakit','id_rs',$sess['id_faskes'],'id_provinsi',$sess['id_provinsi'],'id_kabkota',$sess['id_kabkota']);
      $obat        = $this->Model_Get_Usulan->Normal_Select('atc_obat');
      $sediaan     = $this->Model_Get_Usulan->Normal_Select('sediaan');
      $satuan      = $this->Model_Get_Usulan->Normal_Select('satuan');
      $kekuatan    = $this->Model_Get_Usulan->Normal_Select('kekuatan');
      $terapi      = $this->Model_Get_Usulan->Normal_Select('kelas_terapi');
      $basefolder  = $sess['id_provinsi'].$sess['id_kabkota'].$sess['id_faskes'];
      $nomor_efornas['no'] = str_replace("e-fornas/".$basefolder."/","",$no_efornas);
      $this->session->set_userdata(array('nomor_efornas'=>$nomor_efornas));
      $view_data['nomor_efornas'] = $nomor_efornas['no'];
      $view_data['detail_usulan'] = $this->Model_Get_Usulan->Normal_Select('detail_usulan','nomor_efornas',$no_efornas);
      //print_r($rumah_sakit);exit;
      $view_data['obat'] = $obat;
      $view_data['sediaan'] = $sediaan;
      $view_data['satuan'] = $satuan;
      $view_data['kekuatan'] = $kekuatan;
      $view_data['basefolder'] = $basefolder;
      $view_data['terapi'] = $terapi;
      $view_data['no_efornas'] = $no_efornas;
      $view_data['rs'] = $rumah_sakit[0];
      //DECLARE VIEW DATA FOR WRAPPER
      $view_data['body']   = 'body/usulan/edit_dsp';
      //LOAD VIEW DATA TO WRAPPER
      $this->load->view('wrapper',$view_data);
    }else{
      echo('Error page tidak dapat diakses');
    }
	}
  //END OF INDEX FOR ADD USULAN VIEW

  public function Add_Usulan(){
    $post = $this->input->post();
    //print_r($post);exit;
    $sess = $this->session->userdata('user_data');
    if(!empty($post)){
      $check = $this->Model_Get_Usulan->Validate('usulan',$post['nomor_efornas']);
      if(!empty($check)){
        echo '<script type="text/javascript">alert("Nomor efornas '.$post['nomor_efornas'].' telah terdaftar. Silahkan mencoba beberapa saat lagi"); window.location.assign("'.base_url().'Usulan");</script>';
      }
      if(!isset($post['UploadFile'][0]) || !isset($post['UploadFile'][1]) ){
        echo ('<script type="text/javascript">alert("Anda harus memasukkan file data usulan obat dan surat pengantar");window.location.assign("'.base_url().'Usulan/Insert");</script>');
        exit;
      }
      //print_r($this->session->userdata('nomor_efornas')); exit;
      $data_usulan = array(
        'nomor_efornas'      => $post['nomor_efornas'],
        'id_faskes'          => $sess['id_faskes'],
        'id_provinsi'        => $sess['id_provinsi'],
        'id_kabkota'         => $sess['id_kabkota'],
        'type'               => $sess['type'],
        'surat_pengantar'    => $post['UploadFile'][0],
        'daftar_usulan_obat' => $post['UploadFile'][1],
        'date_apply'         => date("Y-m-d H:i:s"),
        'apply_by'           => $sess['nama'],
        'id_user'            => $sess['id']
      );
      $this->Model_Transaction->Insert_To_Db($data_usulan,'usulan');
      $counted = count($post['id_atc_obat']);
      for($i = 0; $i <$counted; $i++){
        $data_detail_usulan = array(
          'nomor_efornas' => $post['nomor_efornas'],
          'id_terapi'     => $post['id_terapi'][$i],
          'id_sub_kelasterapi'     => $post['id_sub_kelasterapi'][$i],
          'id_sub_kelasterapi2'     => $post['id_sub_kelasterapi2'][$i],
          'id_sub_kelasterapi3'     => $post['id_sub_kelasterapi3'][$i],
          'id_atc_obat'   => $post['id_atc_obat'][$i],
          'id_sediaan'    => $post['id_sediaan'][$i],
          'id_kekuatan'   => $post['id_kekuatan'][$i],
          'id_satuan'     => $post['id_satuan'][$i],
          'jurnal'        => $post['jurnal'][$i],
          'alasan'        => $post['alasan'][$i],
          'restriksi'     => $post['restriksi'][$i],
          'tipe_usulan'   => $post['tipe_usulan'][$i],
          'id_tingkat'    => $post['tingkat_faskes'.($i+1)]
        );
        //print_r($data_detail_usulan); exit;
        $this->Model_Transaction->Insert_To_Db($data_detail_usulan,'detail_usulan');
      }
      $this->session->unset_userdata('nomor_efornas');
      echo '<script type="text/javascript">alert("User Berhasil melakukan penambahan usulan dengan nomor efornas '.$post['nomor_efornas'].'"); window.location.assign("'.base_url().'Usulan");</script>';
    }else{
      echo "Error empty post occured";
    }
  }

  public function Add_Usulan_By_Admin(){
    //print_r($this->session->userdata('nomor_efornas')); exit;
    $post = $this->input->post();
    //print_r($post);exit;
    $sess = $this->session->userdata('user_data');
    if(!empty($post)){
      $check = $this->Model_Get_Usulan->Validate('usulan',$post['nomor_efornas']);
      if(!empty($check)){
        echo '<script type="text/javascript">alert("Nomor efornas '.$post['nomor_efornas'].' telah terdaftar. Silahkan mencoba beberapa saat lagi"); window.location.assign("'.base_url().'Usulan");</script>';
      }
      if(!isset($post['UploadFile'][0]) || !isset($post['UploadFile'][1]) ){
        echo ('<script type="text/javascript">alert("Anda harus memasukkan file data usulan obat dan surat pengantar");window.location.assign("'.base_url().'Usulan/Insert_Obat_Baru");</script>');
        exit;
      }

      $query_select_data_rs = $this->Model_Get_Usulan->Select_Data_RS($post['id_rs'][0]);
      //print_r($query_select_data_rs); exit;

      $data_usulan = array(
        'nomor_efornas'      => $post['nomor_efornas'],
        'id_faskes'          => $query_select_data_rs[0]['id_rs'],
        'id_provinsi'        => $query_select_data_rs[0]['id_provinsi'],
        'id_kabkota'         => $query_select_data_rs[0]['id_kabkota'],
        'type'               => $sess['type'],
        'surat_pengantar'    => $post['UploadFile'][0],
        'daftar_usulan_obat' => $post['UploadFile'][1],
        'date_apply'         => date("Y-m-d H:i:s"),
        'apply_by'           => $sess['nama'],
        'id_user'            => $sess['id']
      );
      $this->Model_Transaction->Insert_To_Db($data_usulan,'usulan');
      $counted = count($post['id_atc_obat']);
      for($i = 0; $i <$counted; $i++){
        if(empty($post['id_atc_obat'][$i])){
          $id_obat = $post['id_obat_combinasi'][$i];
        }
        else {
          $id_obat = $post['id_atc_obat'][$i];
        }
        $data_detail_usulan = array(
          'nomor_efornas' => $post['nomor_efornas'],
          'type_obat'     => $post['type_obat'][$i],
          'id_terapi'     => $post['id_terapi'][$i],
          'id_sub_kelasterapi'     => $post['inputSubKelasTerapi_1'][$i],
          'id_sub_kelasterapi2'     => $post['inputSubKelasTerapi2_1'][$i],
          'id_sub_kelasterapi3'     => $post['inputSubKelasTerapi3_1'][$i],
          'id_atc_obat'   => $id_obat,
          'id_sediaan'    => $post['id_sediaan'][$i],
          'id_kekuatan'   => $post['id_kekuatan'][$i],
          'id_satuan'     => $post['id_satuan'][$i],
          'jurnal'        => $post['jurnal'][$i],
          'alasan'        => $post['alasan'][$i],
          'restriksi'     => $post['restriksi'][$i],
          'tipe_usulan'   => $post['tipe_usulan'][$i],
          'id_tingkat'    => $post['tingkat_faskes'.($i+1)]
        );
        //print_r($data_detail_usulan); exit;
        $this->Model_Transaction->Insert_To_Db($data_detail_usulan,'detail_usulan');
      }
      $this->session->unset_userdata('nomor_efornas');
      echo '<script type="text/javascript">alert("User Berhasil melakukan penambahan usulan dengan nomor efornas '.$post['nomor_efornas'].'"); window.location.assign("'.base_url().'Usulan/Verifikasi");</script>';
    }else{
      echo "Error empty post occured";
    }
  }

  public function Edit_Usulan(){
    $post = $this->input->post();
    //print_r($post);exit;
    $sess = $this->session->userdata('user_data');
    if(!empty($post)){
      if(!isset($post['UploadFile'][0]) || !isset($post['UploadFile'][1]) ){
        echo ('<script type="text/javascript">alert("Anda harus memasukkan file data usulan obat dan surat pengantar");window.location.assign("'.base_url().'Usulan");</script>');
        exit;
      }
      $data_usulan = array(
        'surat_pengantar'    => $post['UploadFile'][0],
        'daftar_usulan_obat' => $post['UploadFile'][1],
        'status'             => 'PEMBAHARUAN',
        'date_apply'         => date("Y-m-d H:i:s"),
        'apply_by'           => $sess['nama']
      );
      $this->Model_Transaction->Update_To_Db($data_usulan,'usulan','nomor_efornas',$post['edit_no_fornas']);
      $this->Model_Transaction->Delete_To_Db('detail_usulan','nomor_efornas',$post['edit_no_fornas']);
      $counted = count($post['id_atc_obat']);
      for($i = 0; $i <$counted; $i++){
        $data_detail_usulan = array(
          'nomor_efornas' => $post['edit_no_fornas'],
          'id_terapi'     => $post['id_terapi'][$i],
          'id_atc_obat'   => $post['id_atc_obat'][$i],
          'id_sediaan'    => $post['id_sediaan'][$i],
          'id_kekuatan'   => $post['id_kekuatan'][$i],
          'id_satuan'     => $post['id_satuan'][$i],
          'jurnal'        => $post['jurnal'][$i],
          'alasan'        => $post['alasan'][$i],
          'restriksi'     => $post['restriksi'][$i],
          'tipe_usulan'   => $post['tipe_usulan'][$i],
          'id_tingkat'    => $post['tingkat_faskes'.($i+1)]
        );
        //print_r($data_detail_usulan); exit;
        $this->Model_Transaction->Insert_To_Db($data_detail_usulan,'detail_usulan');
      }
      echo '<script type="text/javascript">alert("User Berhasil melakukan Pengeditan usulan dengan nomor efornas '.$post['edit_no_fornas'].'"); window.location.assign("'.base_url().'Usulan");</script>';
    }else{
      echo "Error empty post occured";
    }
  }

  public function Add_Obat_Combinasi(){
    $sess = $this->session->userdata('user_data');
	//print_r($sess);exit;
    $privilege = $sess['obat_kombinasi_write'];
    if($privilege != 'on'){
      echo '<script>alert("Anda mempunyai limitasi untuk mengakses laman ini, silahkan hubungi administrator"); window.location.assign("'.base_url().'Dashboard");</script>';
      exit;
    }
    $post = $this->input->post();
    //print_r($post);exit;
    $sess = $this->session->userdata('user_data');
    if(!empty($post['obat_combinasi'])){
      $check = $this->Model_Get_Combinasi->Validate('obat_combinasi',$post['obat_combinasi']);
      if(!empty($check)){
        echo '<script type="text/javascript">alert("Nama Obat Kombinasi '.$post['obat_combinasi'].' telah terdaftar. Silahkan mencoba beberapa saat lagi"); window.location.assign("'.base_url().'Usulan/Insert_Obat_Combinasi");</script>';
      }
      $data_obat_combinasi = array(
        'nama_obat_combinasi' => $post['obat_combinasi']
      );
      $this->Model_Transaction->Insert_To_Db($data_obat_combinasi,'obat_combinasi');

      $counted = count($post['id_atc_obat']);
      for($i = 0; $i <$counted; $i++){
        $data_detail_obat_combinasi = array(
          'nama_obat_combinasi' => $post['obat_combinasi'],
          'id_atc_obat'   => $post['id_atc_obat'][$i]
        );
        //print_r($data_detail_usulan); exit;
        $this->Model_Transaction->Insert_To_Db($data_detail_obat_combinasi,'detail_obat_combinasi');
      }
      $check = $this->Model_Get_Combinasi->Validate('obat_combinasi',$post['obat_combinasi']);
      if(!empty($check)){
        echo '<script type="text/javascript">alert("User Berhasil melakukan penambahan kombinasi obat dengan nama obat combinasi '.$post['obat_combinasi'].'"); window.location.assign("'.base_url().'Obat_Combinasi");</script>';
      }
      else {
        echo '<script type="text/javascript">alert("Gagal memasukkan obat kombinasi"); window.location.assign("'.base_url().'Usulan/Insert_Obat_Combinasi");</script>';
      }
    }else{
      echo '<script type="text/javascript">alert("Nama Obat Kombinasi Tidak Boleh Kosong!!"); window.location.assign("'.base_url().'Usulan/Insert_Obat_Combinasi");</script>';
    }
  }

  //INDEX FOR DAFTAR USULAN LENGKAP VIEW
	public function Daftar_Lengkap(){
    //SET SUB BREADCRUMB
    $sess = $this->session->userdata('user_data');
    $privilege = $sess['daftar_usulan_lengkap_read'];
    if($privilege != 'on'){
      echo '<script>alert("Anda mempunyai limitasi untuk mengakses laman ini, silahkan hubungi administrator"); window.location.assign("'.base_url().'Dashboard");</script>';
      exit;
    }
    $this->session->set_userdata(array('breadcrumb'=>'verifikasi'));
    $this->session->set_userdata(array('main_sub_breadcrumb'=>'daftar_usulan_lengkap'));
    $usulan_rs = $this->Model_Get_Usulan->Custom_Usulan_Lengkap(1);
    $usulan_klinik = $this->Model_Get_Usulan->Custom_Usulan_Lengkap(1);
    $usulan_klinik = array();
    $view_data['usulan_rs'] = $usulan_rs;
    $view_data['usulan_klinik'] = $usulan_klinik;
    //GET KEKUATAN DATA
    //$kekuatan = $this->Model_Get_Kekuatan->Normal_Select(TABLE);
    //DECLARE VIEW DATA FOR WRAPPER
    $view_data['body']   = 'body/usulan/daftar_lengkap_dsp';
    //LOAD VIEW DATA TO WRAPPER
    $this->load->view('wrapper',$view_data);
	}
  //END OF INDEX FOR DAFTAR USULAN LENGKAP VIEW

  //INDEX FOR DAFTAR USULAN TIDAK LENGKAP VIEW
	public function Daftar_Tidak_Lengkap(){
    //SET SUB BREADCRUMB
    $sess = $this->session->userdata('user_data');
    $privilege = $sess['daftar_usulan_tidak_lengkap_read'];
    if($privilege != 'on'){
      echo '<script>alert("Anda mempunyai limitasi untuk mengakses laman ini, silahkan hubungi administrator"); window.location.assign("'.base_url().'Dashboard");</script>';
      exit;
    }
    $this->session->set_userdata(array('breadcrumb'=>'verifikasi'));
    $this->session->set_userdata(array('main_sub_breadcrumb'=>'daftar_usulan_tidak_lengkap'));
    $usulan_rs = $this->Model_Get_Usulan->Custom_Usulan_Tidak_Lengkap(1);
    $usulan_klinik = $this->Model_Get_Usulan->Custom_Usulan_Tidak_Lengkap(1);
    $usulan_klinik = array();
    $view_data['usulan_rs'] = $usulan_rs;
    $view_data['usulan_klinik'] = $usulan_klinik;
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
    $sess = $this->session->userdata('user_data');
    $privilege = $sess['usulan_terbaru_read'];
    if($privilege != 'on'){
      echo '<script>alert("Anda mempunyai limitasi untuk mengakses laman ini, silahkan hubungi administrator"); window.location.assign("'.base_url().'Dashboard");</script>';
      exit;
    }
    //SET SUB BREADCRUMB
    $this->session->set_userdata(array('breadcrumb'=>'verifikasi'));
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
    $sess = $this->session->userdata('user_data');
    $privilege = $sess['usulan_terbaru_write'];
    if($privilege != 'on'){
      echo json_encode(array("code"=>"01","msg"=>"Anda mempunyai limitasi untuk mengakses laman ini, silahkan hubungi administrator"));
      exit;
    }
    $post = $this->input->post();
    if(!empty($post)){
      $data = array(
        'status' => 'LENGKAP',
        'date_approve' => date('Y-m-d')
      );
      $usulan = $this->Model_Get_Usulan->Normal_Select('usulan','nomor_efornas',$post['nomor_efornas']);
      $id_user = $usulan[0]['id_user'];
      $user = $this->Model_Get_Users->Normal_Select('users','`users`.`id`',$id_user);
      $this->Model_Transaction->Update_To_Db($data,'usulan','nomor_efornas',$post['nomor_efornas']);
      echo json_encode(array('code'=>'00','msg'=>$user[0]['email']));
      exit;
    }else{
      echo json_encode(array('code'=>'02','msg'=>'Anda tidak bisa mengakses laman ini'));
      exit;
    }
  }

  Public function Email_Now(){
    $post = $this->input->post();
    if(!empty($post)){
      $this->load->library('email');

      $config['protocol'] = 'smtp';
      //$config['smtp_host'] = 'pacific.unlimited.id';
      $config['smtp_host'] = 'ssl://smtp.googlemail.com';
      $config['smtp_user'] = 'efornas.test@gmail.com';
      $config['smtp_pass'] = '123efornas';
      $config['smtp_port'] = '465';
      //$config['smtp_port'] = '465';
      //$config['smtp_crypto'] = 'ssl';
      $config['mailtype'] = 'html';
      $config['wordwrap'] = TRUE;
      $config['charset'] = 'iso-8859-1';

      $this->email->initialize($config);

      $this->email->from('efornas.test@gmail.com', 'E-Fornas');
      $this->email->to($post['email']);
      if($post['type'] == 'LENGKAP')
        $this->email->subject('Usulan '.$post['nomor_efornas'].' Diterima');
      else
        $this->email->subject('Usulan '.$post['nomor_efornas'].' Ditolak');
      $this->email->message($post['text_email_usulan']);

      $this->email->send();
      echo json_encode(array('code'=>'00','msg'=>$post));
    }else{
      echo json_encode(array('code'=>'01','msg'=>'Anda tidak bisa mengakses laman ini'));
    }
  }
  //END OF INDEX FOR TERIMA USULAN
  //FUNCTION FOR TOLAK USULAN
  Public function Tolak(){
    $sess = $this->session->userdata('user_data');
    $privilege = $sess['usulan_terbaru_write'];
    if($privilege != 'on'){
      echo json_encode(array('code'=>'01','msg'=>'Anda mempunyai limitasi untuk mengakses laman ini, silahkan hubungi administrator'));
      exit;
    }
    $post = $this->input->post();
    if(!empty($post)){
      $data = array(
        'status' => 'TIDAK LENGKAP',
        'date_approve' => date('Y-m-d')
      );
      $usulan = $this->Model_Transaction->Normal_Select('usulan','nomor_efornas',$post['nomor_efornas']);
      $id_user = $usulan[0]['id_user'];
      $user = $this->Model_Get_Users->Normal_Select('users','id',$id_user);
      $this->Model_Transaction->Update_To_Db($data,'usulan','nomor_efornas',$post['nomor_efornas']);
      echo json_encode(array('code'=>'00','msg'=>'Usulan '.$post['nomor_efornas'].'telah diverifikasi dan ditolak','email'=>$user[0]['email']));
      exit;
    }else{
      echo json_encode(array('code'=>'02','msg'=>'Anda tidak bisa mengakses laman ini'));
      exit;
    }
  }
  //END OF INDEX FOR TOLAK USULAN

  //INDEX FOR ADD USULAN VIEW IN ADMIN
	public function Insert_Obat_Baru(){
    //SET SUB BREADCRUMB
    $sess = $this->session->userdata('user_data');
    $privilege = $sess['usulan_obat_baru_write'];
    if($privilege != 'on'){
      echo '<script>alert("Anda mempunyai limitasi untuk mengakses laman ini, silahkan hubungi administrator"); window.location.assign("'.base_url().'Dashboard");</script>';
      exit;
    }
    $this->session->set_userdata(array('breadcrumb'=>'usulan_obat_baru'));
    $this->session->set_userdata(array('main_sub_breadcrumb'=>'usulan_obat_baru'));
    //GET KEKUATAN DATA
    $sess = $this->session->userdata('user_data');
    $no_fornas = $this->session->userdata('nomor_efornas');
    //print_r($no_fornas);exit;
    $view_data['nousulan'] = NOUSULAN;
    $type_obat = $this->Model_Get_Typeobat->Normal_Select('typeobat');
    $rumah_sakit = $this->Model_Get_Usulan->Normal_Select('rumah_sakit');
    $sub_kelasterapi = $this->Model_Get_Usulan -> Select_Data_Subterapi();
    $sub_kelasterapi2 = $this->Model_Get_Usulan -> Select_Data_Subterapi2();
    $sub_kelasterapi3 = $this->Model_Get_Usulan -> Select_Data_Subterapi3();
    $obat        = $this->Model_Get_Usulan->Normal_Select('atc_obat');
    $sediaan     = $this->Model_Get_Usulan->Normal_Select('sediaan');
    $satuan      = $this->Model_Get_Usulan->Normal_Select('satuan');
    $kekuatan    = $this->Model_Get_Usulan->Normal_Select('kekuatan');
    $terapi      = $this->Model_Get_Usulan->Normal_Select('kelas_terapi');
    $basefolder  = $sess['id_provinsi'].$sess['id_kabkota'].$sess['id_faskes'];
    $no_fornas   = $no_fornas['no'];
    //print_r($rumah_sakit);exit;
    $view_data['type_obat'] = $type_obat;
    $view_data['rumah_sakit'] = $rumah_sakit;
    $view_data['sub_kelasterapi'] = $sub_kelasterapi;
    $view_data['sub_kelasterapi2'] = $sub_kelasterapi2;
    $view_data['sub_kelasterapi3'] = $sub_kelasterapi3;
    $view_data['obat'] = $obat;
    $view_data['sediaan'] = $sediaan;
    $view_data['satuan'] = $satuan;
    $view_data['kekuatan'] = $kekuatan;
    $view_data['basefolder'] = $basefolder;
    $view_data['no_fornas'] = $no_fornas;
    $view_data['terapi'] = $terapi;
    $view_data['rs'] = $rumah_sakit[0];
    //DECLARE VIEW DATA FOR WRAPPER
    $view_data['body']   = 'body/usulan/add_dsp_by_admin';
    //LOAD VIEW DATA TO WRAPPER
    $this->load->view('wrapper',$view_data);
	}
  //END OF INDEX FOR ADD USULAN VIEW IN ADMIN

  //INDEX FOR ADD USULAN VIEW IN ADMIN
	public function Insert_Obat_Combinasi(){
    //SET SUB BREADCRUMB
    $sess = $this->session->userdata('user_data');
    $privilege = $sess['obat_kombinasi_write'];
    if($privilege != 'on'){
      echo '<script>alert("Anda mempunyai limitasi untuk mengakses laman ini, silahkan hubungi administrator"); window.location.assign("'.base_url().'Dashboard");</script>';
      exit;
    }
    $this->session->set_userdata(array('breadcrumb'=>'master'));
    $this->session->set_userdata(array('main_sub_breadcrumb'=>'usulan_obat_combinasi'));
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
    $terapi      = $this->Model_Get_Usulan->Normal_Select('kelas_terapi');
    $basefolder  = $sess['id_provinsi'].$sess['id_kabkota'].$sess['id_faskes'];
    $no_fornas   = $no_fornas['no'];
    //print_r($rumah_sakit);exit;
    $view_data['obat'] = $obat;
    $view_data['sediaan'] = $sediaan;
    $view_data['satuan'] = $satuan;
    $view_data['kekuatan'] = $kekuatan;
    $view_data['basefolder'] = $basefolder;
    $view_data['no_fornas'] = $no_fornas;
    $view_data['terapi'] = $terapi;
    $view_data['rs'] = $rumah_sakit[0];
    //DECLARE VIEW DATA FOR WRAPPER
    $view_data['body']   = 'body/usulan/add_obat_combinasi';
    //LOAD VIEW DATA TO WRAPPER
    $this->load->view('wrapper',$view_data);
	}
  //END OF INDEX FOR ADD USULAN VIEW IN ADMIN

  public function Get_Sub_Kelasterapi(){
    $id = $this->input->get('id_terapi');
    //print_r($id); exit;
    if(!empty($id)){
      $sub_terapi = $this->Model_Get_Usulan->Select_Data_Subterapi_Query($id);
      if(empty($sub_terapi)){
        echo json_encode(array('status'=>'01','msg'=>'error sub terapi untuk kelas terapi ini kosong'));
      }else{
        echo json_encode(array('status'=>'00','msg'=>$sub_terapi));
      }
    }else{
      echo json_encode(array('status'=>'01','msg'=>'error post kosong'));
    }
  }
  public function Get_Sub_Kelasterapi2(){
    $id_subterapi = $this->input->get('id_subterapi');

    //print_r($id); exit;
    if(!empty($id_subterapi)){
      $sub_terapi2 = $this->Model_Get_Usulan->Select_Data_Subterapi2_Query($id_subterapi);
      if(empty($sub_terapi2)){
        echo json_encode(array('status'=>'01','msg'=>'error sub terapi untuk kelas terapi ini kosong'));
      }else{
        echo json_encode(array('status'=>'00','msg'=>$sub_terapi2));
      }
    }else{
      echo json_encode(array('status'=>'01','msg'=>'error post kosong'));
    }
  }
  public function Get_Sub_Kelasterapi3(){
    $id_subterapi2 = $this->input->get('id_subterapi2');

    //print_r($id); exit;
    if(!empty($id_subterapi2)){
      $sub_terapi3 = $this->Model_Get_Usulan->Select_Data_Subterapi3_Query($id_subterapi2);
      if(empty($sub_terapi2)){
        echo json_encode(array('status'=>'01','msg'=>'error sub terapi untuk kelas terapi ini kosong'));
      }else{
        echo json_encode(array('status'=>'00','msg'=>$sub_terapi3));
      }
    }else{
      echo json_encode(array('status'=>'01','msg'=>'error post kosong'));
    }
  }
  public function Get_Data_Obat(){
    $typeobat = $this->input->get('type_obat');

    //print_r($id); exit;
    if(!empty($typeobat)){
      if($typeobat == '1')
      {
        $data_obat = $this->Model_Get_Usulan->Select_Data_Obat_Umum();
        if(empty($data_obat)){
          echo json_encode(array('status'=>'01','msg'=>'error atc obat kosong'));
        }
        else {
          echo json_encode(array('status'=>'00','msg'=>$data_obat));
        }
      }else {
        $data_obat = $this->Model_Get_Usulan->Select_Data_Obat_Kombinasi();
        if(empty($data_obat)){
          echo json_encode(array('status'=>'01','msg'=>'error atc obat kosong'));
        }
        else {
          echo json_encode(array('status'=>'10','msg'=>$data_obat));
        }
      }
    }else{
      echo json_encode(array('status'=>'01','msg'=>'error post kosong'));
    }
  }
}
?>
