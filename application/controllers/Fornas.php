<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fornas extends CI_Controller {
  //CONSTRUCT FOR FORNAS
  function __construct(){
    parent::__construct();
    //INIT MODEL FORNAS
    $this->load->model('Model_Get_Fornas');
	$this->load->model('Model_Transaction');
    //CHECK SESSION
    $sess = $this->session->userdata('user_data');
    if(empty($sess)){
      redirect('login','refresh');
      exit;
    }
    //SET TABLE NAME
    define('TABLE','fornas');
    //SET BREADCRUMB
    $this->session->set_userdata(array('breadcrumb'=>'master'));
    $this->session->set_userdata(array('main_sub_breadcrumb'=>'fornas'));
  }

  //INDEX FOR FIRST VIEW
	public function Index(){
    //GET FORNAS DATA
    $fornas = $this->Model_Get_Fornas->Custom_Fornas();
    //print_r($fornas);exit;
    //DECLARE VIEW DATA FOR WRAPPER
    $view_data['data']   = $fornas;
    $view_data['body']   = 'body/master/fornas/record_dsp';
    //LOAD VIEW DATA TO WRAPPER
    $this->load->view('wrapper',$view_data);
	}
  //END OF INDEX FOR FIRST VIEW

  //POST FORNAS
  public function Insert(){
    //GET POST DATA
    $post = $this->input->post();
    //CHECK IF EMPTY POST
    if(empty($post)){
		$atc_obat			= $this->Model_Get_Fornas->Get_Atc_Obat_GB();
		$kelas_terapi		= $this->Model_Get_Fornas->Get_Kelas_Terapi_GB();
		$sub_kelasterapi	= $this->Model_Get_Fornas->Get_Sub_Kelasterapi_GB();
		$sub_kelasterapi2	= $this->Model_Get_Fornas->Get_Sub_Kelasterapi2_GB();
		$sub_kelasterapi3	= $this->Model_Get_Fornas->Get_Sub_Kelasterapi3_GB();
		$sediaan			= $this->Model_Get_Fornas->Get_Sediaan_GB();
		$kekuatan			= $this->Model_Get_Fornas->Get_Kekuatan_GB();
		$satuan				= $this->Model_Get_Fornas->Get_Satuan_GB();
		//print_r($satuan);exit;
		$view_data['kelas_terapi']		= $kelas_terapi;
		$view_data['sub_kelasterapi']	= $sub_kelasterapi;
		$view_data['sub_kelasterapi2']	= $sub_kelasterapi2;
		$view_data['sub_kelasterapi3']	= $sub_kelasterapi3;
		$view_data['atc_obat']			= $atc_obat;
		$view_data['sediaan']			= $sediaan;
		$view_data['kekuatan']			= $kekuatan;
		$view_data['satuan']			= $satuan;
      //DECLARE VIEW DATA FOR WRAPPER
      $view_data['body']   = 'body/master/fornas/create_dsp';
      //LOAD VIEW DATA TO WRAPPER
      $this->load->view('wrapper',$view_data);
    }else{
      //INSERT TO DATABASE
	  if(!empty($post['kelas_terapi'])){
		  $kelasterapi = explode("+",$post['kelas_terapi']);
		  $id_kelasterapi = $kelasterapi[0];
		  $nama_kelasterapi = $kelasterapi[1];
	  }else{
		  $id_kelasterapi = "";
		  $nama_kelasterapi = "";
	  }
	  
	  if(!empty($post['sub_kelasterapi'])){
		  $subkelasterapi = explode("+",$post['sub_kelasterapi']);
		  $id_subkelasterapi = $subkelasterapi[0];
		  $nama_subkelasterapi = $subkelasterapi[1];
	  }else{
		  $id_subkelasterapi = "";
		  $nama_subkelasterapi = "";
	  }
	  
	  if(!empty($post['sub_kelasterapi2'])){
		  $subkelasterapi2 = explode("+",$post['sub_kelasterapi2']);
		  $id_subkelasterapi2 = $subkelasterapi2[0];
		  $nama_subkelasterapi2 = $subkelasterapi2[1];
	  }else{
		  $id_subkelasterapi2 = "";
		  $nama_subkelasterapi2 = "";
	  }
	  
	  if(!empty($post['sub_kelasterapi3'])){
		  $subkelasterapi3 = explode("+",$post['sub_kelasterapi3']);
		  $id_subkelasterapi3 = $subkelasterapi3[0];
		  $nama_subkelasterapi3 = $subkelasterapi3[1];
	  }else{
		  $id_subkelasterapi3 = "";
		  $nama_subkelasterapi3 = "";
	  }
	  
	  if(!empty($post['atc_obat'])){
		  $atcobat = explode("+",$post['atc_obat']);
		  $id_atcobat = $atcobat[0];
		  $nama_atcobat = $atcobat[1];
	  }else{
		  $id_atcobat = "";
		  $nama_atcobat = "";
	  }
	  
	  if(!empty($post['sediaan'])){
		  $sediaan = explode("+",$post['sediaan']);
		  $id_sediaan = $sediaan[0];
		  $nama_sediaan = $sediaan[1];
	  }else{
		  $id_sediaan = "";
		  $nama_sediaan = "";
	  }
	  
	  if(!empty($post['kekuatan'])){
		  $kekuatan = explode("+",$post['kekuatan']);
		  $id_kekuatan = $kekuatan[0];
		  $nama_kekuatan = $kekuatan[1];
	  }else{
		  $id_kekuatan = "";
		  $nama_kekuatan = "";
	  }
	  
	  if(!empty($post['satuan'])){
		  $satuan = explode("+",$post['satuan']);
		  $id_satuan = $satuan[0];
		  $nama_satuan = $satuan[1];
	  }else{
		  $id_satuan = "";
		  $nama_satuan = "";
	  }
	  
	  $data = array(
	  		'KELAS_TERAPI' => $nama_kelasterapi,
			'id_terapi' => $id_kelasterapi,
			'SUB_KELASTERAPI1' => $nama_subkelasterapi,
			'id_sub_kelasterapi1' => $id_subkelasterapi,
			'SUB_KELASTERAPI2' => $nama_subkelasterapi2,
			'id_sub_kelasterapi2' => $id_subkelasterapi2,
			'SUB_KELASTERAPI3' => $nama_subkelasterapi3,
			'id_sub_kelasterapi3' => $id_subkelasterapi3,
			'Nama_obat' => $nama_atcobat,
			'id_ATC' => $id_atcobat,
			'Sediaan' => $nama_sediaan,
			'id_sediaan' => $id_sediaan,
			'Kekuatan' => $nama_kekuatan,
			'id_kekuatan' => $id_kekuatan,
			'Satuan' => $nama_satuan,
			'id_satuan' => $id_satuan,
			'Subkutan' => $post['subkutan'],
			'intrakutan' => $post['intrakutan'],
			'intramuscular' => $post['intramuscular'],
			'intravena' => $post['intravena'],
			'intravena_bolus' => $post['intravena_bolus'],
			'intra_arteri' => $post['intra_arteri'],
			'intralumbal' => $post['intralumbal'],
			'intraperitoneal' => $post['intraperitoneal'],
			'intrapleural' => $post['intrapleural'],
			'intracardial' => $post['intracardial'],
			'anti_artikuler' => $post['anti_artikuler'],
			'implantasi_subkutan' => $post['implantasi_subkutan'],
			'rektal' => $post['rektal'],
			'intranasal' => $post['intranasal'],
			'intra_okuler' => $post['intra_okuler'],
			'intra_aurikuler' => $post['intra_aurikuler'],
			'intrapulmonal' => $post['intrapulmonal'],
			'intravaginal' => $post['intravaginal'],
			'infus_drip' => $post['infus_drip'],
			'injeksi_infiltr' => $post['injeksi_infiltr'],
			'p_v' => $post['p_v'],
			'Tk1' => $post['Tk1'],
			'Tk2' => $post['Tk2'],
			'Tk3' => $post['Tk3'],
			'PRB' => $post['PRB'],
			'PP' => $post['PP'],
			'RESTRIKSI_KELAS_TERAPI' => $post['restriksi_kelas_terapi'],
			'RESTRIKSI_SUBKELAS_TERAPI_1' => $post['restriksi_subkelas_terapi_1'],
			'RESTRIKSI_SUBKELAS_TERAPI_2' => $post['restriksi_subkelas_terapi_2'],
			'RESTRIKSI_SUBKELAS_TERAPI_3' => $post['restriksi_subkelas_terapi_3'],
			'RESTRIKSI_OBAT' => $post['restriksi_obat'],
			'RESTRIKSI_OBAT1' => $post['restriksi_obat1'],
			'RESTRIKSI_OBAT2' => $post['restriksi_obat2'],
			'RESTRIKSI_OBAT3' => $post['restriksi_obat3'],
			'RESTRIKSI_OBAT4' => $post['restriksi_obat4'],
			'RESTRIKSI_SEDIAAN' => $post['restriksi_sediaan'],
			'RESTRIKSI_SEDIAAN2' => $post['restriksi_sediaan2'],
			'RESTRIKSI_SEDIAAN3' => $post['restriksi_sediaan3'],
	  );
	  //print_r($data);exit;
      $this->Model_Transaction->Insert_To_Db($data,TABLE);
	  echo '<script>alert("Berhasil Menginput Data"); window.location.assign("'.base_url().'Fornas");</script>';
    }
  }

  public function Update(){
	$uri = $this->uri->segment(3);
	if(empty($uri)){
		$post = $this->input->post();
		//print_r($post);exit;
		$id_fornas = $post['id_fornas'];
	  if(!empty($post['kelas_terapi'])){
		  $kelasterapi = explode("+",$post['kelas_terapi']);
		  $id_kelasterapi = $kelasterapi[0];
		  $nama_kelasterapi = $kelasterapi[1];
	  }else{
		  $id_kelasterapi = "";
		  $nama_kelasterapi = "";
	  }
	  
	  if(!empty($post['sub_kelasterapi'])){
		  $subkelasterapi = explode("+",$post['sub_kelasterapi']);
		  $id_subkelasterapi = $subkelasterapi[0];
		  $nama_subkelasterapi = $subkelasterapi[1];
	  }else{
		  $id_subkelasterapi = "";
		  $nama_subkelasterapi = "";
	  }
	  
	  if(!empty($post['sub_kelasterapi2'])){
		  $subkelasterapi2 = explode("+",$post['sub_kelasterapi2']);
		  $id_subkelasterapi2 = $subkelasterapi2[0];
		  $nama_subkelasterapi2 = $subkelasterapi2[1];
	  }else{
		  $id_subkelasterapi2 = "";
		  $nama_subkelasterapi2 = "";
	  }
	  
	  if(!empty($post['sub_kelasterapi3'])){
		  $subkelasterapi3 = explode("+",$post['sub_kelasterapi3']);
		  $id_subkelasterapi3 = $subkelasterapi3[0];
		  $nama_subkelasterapi3 = $subkelasterapi3[1];
	  }else{
		  $id_subkelasterapi3 = "";
		  $nama_subkelasterapi3 = "";
	  }
	  
	  if(!empty($post['atc_obat'])){
		  $atcobat = explode("+",$post['atc_obat']);
		  $id_atcobat = $atcobat[0];
		  $nama_atcobat = $atcobat[1];
	  }else{
		  $id_atcobat = "";
		  $nama_atcobat = "";
	  }
	  
	  if(!empty($post['sediaan'])){
		  $sediaan = explode("+",$post['sediaan']);
		  $id_sediaan = $sediaan[0];
		  $nama_sediaan = $sediaan[1];
	  }else{
		  $id_sediaan = "";
		  $nama_sediaan = "";
	  }
	  
	  if(!empty($post['kekuatan'])){
		  $kekuatan = explode("+",$post['kekuatan']);
		  $id_kekuatan = $kekuatan[0];
		  $nama_kekuatan = $kekuatan[1];
	  }else{
		  $id_kekuatan = "";
		  $nama_kekuatan = "";
	  }
	  
	  if(!empty($post['satuan'])){
		  $satuan = explode("+",$post['satuan']);
		  $id_satuan = $satuan[0];
		  $nama_satuan = $satuan[1];
	  }else{
		  $id_satuan = "";
		  $nama_satuan = "";
	  }
	  
	  $data = array(
	  		'KELAS_TERAPI' => $nama_kelasterapi,
			'id_terapi' => $id_kelasterapi,
			'SUB_KELASTERAPI1' => $nama_subkelasterapi,
			'id_sub_kelasterapi1' => $id_subkelasterapi,
			'SUB_KELASTERAPI2' => $nama_subkelasterapi2,
			'id_sub_kelasterapi2' => $id_subkelasterapi2,
			'SUB_KELASTERAPI3' => $nama_subkelasterapi3,
			'id_sub_kelasterapi3' => $id_subkelasterapi3,
			'Nama_obat' => $nama_atcobat,
			'id_ATC' => $id_atcobat,
			'Sediaan' => $nama_sediaan,
			'id_sediaan' => $id_sediaan,
			'Kekuatan' => $nama_kekuatan,
			'id_kekuatan' => $id_kekuatan,
			'Satuan' => $nama_satuan,
			'id_satuan' => $id_satuan,
			'Subkutan' => $post['subkutan'],
			'intrakutan' => $post['intrakutan'],
			'intramuscular' => $post['intramuscular'],
			'intravena' => $post['intravena'],
			'intravena_bolus' => $post['intravena_bolus'],
			'intra_arteri' => $post['intra_arteri'],
			'intralumbal' => $post['intralumbal'],
			'intraperitoneal' => $post['intraperitoneal'],
			'intrapleural' => $post['intrapleural'],
			'intracardial' => $post['intracardial'],
			'anti_artikuler' => $post['anti_artikuler'],
			'implantasi_subkutan' => $post['implantasi_subkutan'],
			'rektal' => $post['rektal'],
			'intranasal' => $post['intranasal'],
			'intra_okuler' => $post['intra_okuler'],
			'intra_aurikuler' => $post['intra_aurikuler'],
			'intrapulmonal' => $post['intrapulmonal'],
			'intravaginal' => $post['intravaginal'],
			'infus_drip' => $post['infus_drip'],
			'injeksi_infiltr' => $post['injeksi_infiltr'],
			'p_v' => $post['p_v'],
			'Tk1' => $post['Tk1'],
			'Tk2' => $post['Tk2'],
			'Tk3' => $post['Tk3'],
			'PRB' => $post['PRB'],
			'PP' => $post['PP'],
			'RESTRIKSI_KELAS_TERAPI' => $post['restriksi_kelas_terapi'],
			'RESTRIKSI_SUBKELAS_TERAPI_1' => $post['restriksi_subkelas_terapi_1'],
			'RESTRIKSI_SUBKELAS_TERAPI_2' => $post['restriksi_subkelas_terapi_2'],
			'RESTRIKSI_SUBKELAS_TERAPI_3' => $post['restriksi_subkelas_terapi_3'],
			'RESTRIKSI_OBAT' => $post['restriksi_obat'],
			'RESTRIKSI_OBAT1' => $post['restriksi_obat1'],
			'RESTRIKSI_OBAT2' => $post['restriksi_obat2'],
			'RESTRIKSI_OBAT3' => $post['restriksi_obat3'],
			'RESTRIKSI_OBAT4' => $post['restriksi_obat4'],
			'RESTRIKSI_SEDIAAN' => $post['restriksi_sediaan'],
			'RESTRIKSI_SEDIAAN2' => $post['restriksi_sediaan2'],
			'RESTRIKSI_SEDIAAN3' => $post['restriksi_sediaan3'],
	  );
	  //print_r($data);exit;
		$this->Model_Transaction->Update_To_Db($data,TABLE,'id_fornas',$id_fornas);
		echo '<script>alert("Berhasil Merubah Data"); window.location.assign("'.base_url().'Fornas");</script>';
	}else{
    //GET SATUAAN DATA
		$atc_obat			= $this->Model_Get_Fornas->Get_Atc_Obat_GB();
		$kelas_terapi		= $this->Model_Get_Fornas->Get_Kelas_Terapi_GB();
		$sub_kelasterapi	= $this->Model_Get_Fornas->Get_Sub_Kelasterapi_GB();
		$sub_kelasterapi2	= $this->Model_Get_Fornas->Get_Sub_Kelasterapi2_GB();
		$sub_kelasterapi3	= $this->Model_Get_Fornas->Get_Sub_Kelasterapi3_GB();
		$sediaan			= $this->Model_Get_Fornas->Get_Sediaan_GB();
		$kekuatan			= $this->Model_Get_Fornas->Get_Kekuatan_GB();
		$satuan				= $this->Model_Get_Fornas->Get_Satuan_GB();
		//print_r($satuan);exit;
		$view_data['kelas_terapi']		= $kelas_terapi;
		$view_data['sub_kelasterapi']	= $sub_kelasterapi;
		$view_data['sub_kelasterapi2']	= $sub_kelasterapi2;
		$view_data['sub_kelasterapi3']	= $sub_kelasterapi3;
		$view_data['atc_obat']			= $atc_obat;
		$view_data['sediaan']			= $sediaan;
		$view_data['kekuatan']			= $kekuatan;
		$view_data['satuan']			= $satuan;
		
		$update_fornas = $this->Model_Get_Fornas->Update_Select(TABLE,'id_fornas',$uri);
		//DECLARE VIEW DATA FOR WRAPPER
		$view_data['id_fornas']   = $uri;
		$view_data['data']   = $update_fornas;
		$view_data['body']   = 'body/master/fornas/update_dsp';
		//LOAD VIEW DATA TO WRAPPER
		$this->load->view('wrapper',$view_data);
		}
  }

  public function Delete(){
	$uri = $this->uri->segment(3);
	$data = array(
		'deleted'	=> '1'
	);
	$this->Model_Transaction->Update_To_Db($data,TABLE,'id_fornas',$uri);
	echo '<script>alert("Berhasil Menghapus Data"); window.location.assign("'.base_url().'Fornas");</script>';
  }
  //END OF POST SATUAAN
}
?>