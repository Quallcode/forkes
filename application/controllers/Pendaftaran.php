<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {
  //CONSTRUCT FOR LOGIN
  function __construct(){
    parent::__construct();
    //INIT MODEL USERS
    $this->load->model('Model_Get_Provinsi');
    $this->load->model('Model_Get_Kabupaten');
    $this->load->model('Model_Get_RumahSakit');
    //CHECK SESSION
    $sess = $this->session->userdata('user_data');
    if(!empty($sess)){
      redirect('dashboard','refresh');
      exit;
    }
  }

  //INDEX FOR FIRST VIEW
	public function Index(){
    $provinsi      = $this->Model_Get_Provinsi->Normal_Select('provinsi');
    $kabupaten      = $this->Model_Get_Kabupaten->Normal_Select('kabkota');

    $view_data['provinsi'] = $provinsi;
    $view_data['kabupaten'] = $kabupaten;
    $this->load->view('pendaftaran',$view_data);

	}
  //END OF INDEX FOR FIRST VIEW

  //INDEX FOR FIRST VIEW
	public function Get_Kabupaten(){
    $id = $this->input->get('id');
    if(!empty($id)){
      $kabupaten = $this->Model_Get_Kabupaten->Normal_Select('kabkota','parent_id',$id);
      if(empty($kabupaten)){
        echo json_encode(array('status'=>'01','msg'=>'error kabupaten untuk provinsi ini kosong'));
      }else{
        echo json_encode(array('status'=>'00','msg'=>$kabupaten));
      }
    }else{
      echo json_encode(array('status'=>'01','msg'=>'error post kosong'));
    }
	}
  //END OF INDEX FOR FIRST VIEW

  //INDEX FOR FIRST VIEW
	public function Get_Rumah_Sakit(){
    $provinsi = $this->input->get('id_provinsi');
    $kabupaten = $this->input->get('id_kabkota');
    if(!empty($kabupaten) && !empty($provinsi)){
      $rumah_sakit = $this->Model_Get_RumahSakit->Many_Sub_Main_Select('id_provinsi',$provinsi,'rumah_sakit','id_kabkota',$kabupaten);
      if(empty($rumah_sakit)){
        echo json_encode(array('status'=>'01','msg'=>'error kabupaten untuk provinsi ini kosong'));
      }else{
        echo json_encode(array('status'=>'00','msg'=>$rumah_sakit));
      }
    }else{
      echo json_encode(array('status'=>'01','msg'=>'error post kosong'));
    }
	}
  //END OF INDEX FOR FIRST VIEW

  //POST LOGIN
  public function Verify(){
    //GET POST DATA
    $post = $this->input->post();
    //CHECK IF EMPTY POST
    if(empty($post['username']) || empty($post['password'])){
      echo '<script>alert("Username atau Password anda kosong"); window.location.assign("'.base_url().'login");</script>';
    }else{
      //CHECK POST TO DATABASE
      $data = $this->Model_Users->Check_Login_Valid($post);
      $this->session->set_userdata(array('user_data'=>$data));
      if(!empty($data)) {
        //IF DATA EXIST
        echo '<script>alert("Selamat Datang '.$data['nama'].'"); window.location.assign("'.base_url().'dashboard");</script>';
      } else {
        //IF DATA NOT EXIST
        echo '<script>alert("Username atau Password anda salah"); window.location.assign("'.base_url().'login");</script>';
      }
    }
  }
  //END OF POST LOGIN

  //LOGOUT FUNCTION
  public function Logout(){
      $this->session->unset_userdata('user_data');
      session_write_close();
      redirect('login','refresh');
      exit;
  }
  //END OF LOGOUT
}
?>
