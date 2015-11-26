<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {
  //CONSTRUCT FOR KEKUATAN
  function __construct(){
    parent::__construct();
    //INIT MODEL TRANSACTION
    $this->load->model('Model_News');
    $this->load->model('Model_Transaction');
    //CHECK SESSION
    $sess = $this->session->userdata('user_data');
    if(empty($sess)){
      redirect('login','refresh');
      exit;
    }
    //SET TABLE NAME
    define('TABLE','news');
    //SET BREADCRUMB
    $this->session->set_userdata(array('breadcrumb'=>'news'));
    $this->session->set_userdata(array('main_sub_breadcrumb'=>'news'));
  }

  //INDEX FOR FIRST VIEW
	public function Index(){
    //GET KEKUATAN DATA
    $sess = $this->session->userdata('user_data');
    //$privilege = $sess['users_read'];
    /*if($privilege != 'on'){
      echo '<script>alert("Anda mempunyai limitasi untuk mengakses laman ini, silahkan hubungi administrator"); window.location.assign("'.base_url().'Dashboard");</script>';
      exit;
    }*/
    $news = $this->Model_News->Custom_Select();
    //DECLARE VIEW DATA FOR WRAPPER
	$view_data['news']   = $news;
    $view_data['body']   = 'body/news/record_dsp';
    //LOAD VIEW DATA TO WRAPPER
    $this->load->view('wrapper',$view_data);
	}
  //END OF INDEX FOR FIRST VIEW

  //POST KEKUATAN
  public function Insert(){
    //GET POST DATA
    $sess = $this->session->userdata('user_data');
    $privilege = $sess['users_write'];
    if($privilege != 'on'){
      echo '<script>alert("Anda mempunyai limitasi untuk mengakses laman ini, silahkan hubungi administrator"); window.location.assign("'.base_url().'Dashboard");</script>';
      exit;
    }
    $post = $this->input->post();
    //CHECK IF EMPTY POST
    if(empty($post)){
      //DECLARE VIEW DATA FOR WRAPPER
      $view_data['body']   = 'body/news/create_dsp';
      //LOAD VIEW DATA TO WRAPPER
      $this->load->view('wrapper',$view_data);
    }else{
      //VALIDATE TO DATABASE
	  $data = array(
	  	'create_date' => date("Y-m-d H:i:s"),
	  	'create_by' => $sess['nama'],
	  	'news_title' => $post['news_title'],
	  	'news_content' => $post['news_content'],
	  	'deleted' => '0'
	  );
	  $this->Model_Transaction->Insert_To_Db($data,TABLE);
	  echo '<script>alert("Berhasil Menambahkan Berita Baru"); window.location.assign("'.base_url().'News");</script>';
    }
  }

  public function Update(){
    $sess = $this->session->userdata('user_data');
    /*$privilege = $sess['users_write'];
    if($privilege != 'on'){
      echo '<script>alert("Anda mempunyai limitasi untuk mengakses laman ini, silahkan hubungi administrator"); window.location.assign("'.base_url().'Dashboard");</script>';
      exit;
    }*/
  	$uri = $this->uri->segment(3);
	$post = $this->input->post();
  	if(empty($post)){
      	$news = $this->Model_News->Get_News($uri);
  		$view_data['data']   = $news[0];
  		$view_data['body']   = 'body/news/update_dsp';
  		$this->load->view('wrapper',$view_data);
  	}else{
		$id_news = $post['id_news'];
		$data = array(
			'create_date' => $post['create_date'],
			'create_by' => $post['create_by'],
			'news_title' => $post['news_title'],
			'news_content' => $post['news_content'],
			'modified_date' => date("Y-m-d H:i:s"),
			'modified_by' => $sess['nama']
		);
  		$users = $this->Model_Transaction->Update_To_Db($data,TABLE,'id_news',$id_news);
		echo '<script>alert("Anda Berhasil Memperbaharui Berita"); window.location.assign("'.base_url().'News");</script>';
      exit;
		}
  }

  public function Delete(){
    $sess = $this->session->userdata('user_data');
    /*$privilege = $sess['users_delete'];
    if($privilege != 'on'){
      echo '<script>alert("Anda mempunyai limitasi untuk mengakses laman ini, silahkan hubungi administrator"); window.location.assign("'.base_url().'Dashboard");</script>';
      exit;
    }*/
  	$uri = $this->uri->segment(3);
  	$data = array(
  		'deleted'	=> '1'
  	);
  	$this->Model_Transaction->Update_To_Db($data,TABLE,'id_news',$uri);
  	echo '<script>alert("Berhasil Menghapus Data"); window.location.assign("'.base_url().'News");</script>';
  }
  //END OF POST KEKUATAN
}
?>
