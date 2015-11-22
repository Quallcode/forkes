<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sub_Kelas_Terapi2 extends CI_Controller {
  //CONSTRUCT FOR SATUAAN
  function __construct(){
    parent::__construct();
    //INIT MODEL TRANSACTION
    $this->load->model('Model_Transaction');
    $this->load->model('Model_Get_Sub_Kelas_Terapi2');
    $this->load->model('Model_Get_Sub_Kelas_Terapi');
    $this->load->model('Model_Get_Usulan');
    $this->load->model('Model_Get_Kelas_Terapi');
    //CHECK SESSION
    $sess = $this->session->userdata('user_data');
    if(empty($sess)){
      redirect('login','refresh');
      exit;
    }
    //SET TABLE NAME
    define('TABLE','sub_kelasterapi2');
    //SET BREADCRUMB
    $this->session->set_userdata(array('breadcrumb'=>'master'));
    $this->session->set_userdata(array('main_sub_breadcrumb'=>'sub_kelas_terapi2'));
  }

  //INDEX FOR FIRST VIEW
	public function Index(){
    //GET SATUAAN DATA
    $sub_kelas_terapi2 = $this->Model_Get_Sub_Kelas_Terapi2->Normal_Select(TABLE);
    //print_r($satuan);exit;
    //DECLARE VIEW DATA FOR WRAPPER
    $view_data['data']   = $sub_kelas_terapi2;
    $view_data['body']   = 'body/master/sub_kelas_terapi2/record_dsp';
    //LOAD VIEW DATA TO WRAPPER
    $this->load->view('wrapper',$view_data);
	}
  //END OF INDEX FOR FIRST VIEW

  //POST SATUAAN
  public function Insert(){
    //GET POST DATA
    $post = $this->input->post();
    //print_r($post); exit;
    //CHECK IF EMPTY POST
    if(empty($post)){
      //DECLARE VIEW DATA FOR WRAPPER
      $terapi      = $this->Model_Get_Kelas_Terapi->Normal_Select('kelas_terapi');
      $sub_terapi      = $this->Model_Get_Sub_Kelas_Terapi->Custom_Select();
      //print_r($sub_terapi); exit;
      $view_data['terapi'] = $terapi;
      $view_data['sub_terapi'] = $sub_terapi;
      $view_data['body']   = 'body/master/sub_kelas_terapi2/create_dsp';
      //LOAD VIEW DATA TO WRAPPER
      $this->load->view('wrapper',$view_data);
    }else{
      //VALIDATE TO DATABASE
      //print_r($post); exit;
      $data = array(
        'id_terapi' 	=> $post['id_terapi'][0],
        'id_sub_kelasterapi'	=> $post['id_sub_kelasterapi'][0],
        'id_sub_kelasterapi2' => $post['id_sub_kelasterapi2'],
        'Sub_Kelas_Terapi_2'  => $post['Sub_Kelas_Terapi2'],
        'deleted' =>  '0'
      );
      $exist = $this->Model_Get_Sub_Kelas_Terapi2->validate($post['id_terapi'][0],$post['id_sub_kelasterapi'][0],$post['id_sub_kelasterapi2'],$post['Sub_Kelas_Terapi2']);
      if($exist==1)
      {
        echo '<script>alert("ID Sub Kelas Terapi 2 Sudah Ada"); window.location.assign("'.base_url().'Sub_Kelas_Terapi2/Insert");</script>';
      }
      else {
        //INSERT TO DATABASE
        $this->Model_Transaction->Insert_To_Db($data,TABLE);
		echo '<script>alert("Berhasil Menambahkan Data"); window.location.assign("'.base_url().'Sub_Kelas_Terapi2");</script>';
      }
    }
  }

  public function Update(){
	$uri = $this->uri->segment(3);
	if(empty($uri)){
		$post = $this->input->post();
    //print_r($post); exit;
		$id = $post['id'];
		$data = array(
			'id_sub_kelasterapi2' 	=> $post['id_sub_kelasterapi2'],
			'Sub_Kelas_Terapi_2'	=> $post['Sub_Kelas_Terapi2']
		);
		$this->Model_Transaction->Update_To_Db($data,TABLE,'id',$id);
		echo '<script>alert("Berhasil Merubah Data"); window.location.assign("'.base_url().'Sub_Kelas_Terapi2");</script>';
	}else{
    //GET SATUAAN DATA
		$satuan = $this->Model_Get_Sub_Kelas_Terapi->Update_Select(TABLE,'id',$uri);
    //print_r($satuan); exit;
		//DECLARE VIEW DATA FOR WRAPPER
		$view_data['data']   = $satuan[0];
		$view_data['body']   = 'body/master/sub_kelas_terapi2/update_dsp';
		//LOAD VIEW DATA TO WRAPPER
		$this->load->view('wrapper',$view_data);
		}
  }

  public function Delete(){
	$uri = $this->uri->segment(3);
	$data = array(
		'deleted'	=> '1'
	);
	$this->Model_Transaction->Update_To_Db($data,TABLE,'id',$uri);
	echo '<script>alert("Berhasil Menghapus Data"); window.location.assign("'.base_url().'Sub_Kelas_Terapi2");</script>';
  }
  //END OF POST SATUAAN
}
?>
