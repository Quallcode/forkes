<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checking extends CI_Controller {
  //CONSTRUCT FOR KEKUATAN
  function __construct(){
    parent::__construct();
    //INIT MODEL TRANSACTION
    $this->load->model('Model_Transaction');
    $this->load->model('Model_Checking');
    date_default_timezone_set('Asia/Jakarta');
    //CHECK SESSION
    $sess = $this->session->userdata('user_data');
    //$this->session->set_userdata(array('status_obat'=>'0','status_sediaan'=>'0','status_satuan'=>'0','status_kekuatan'=>'0'));
    if(empty($sess)){
      echo json_encode(array('status'=>'60','msg'=>'Error, anda tidak sedang melakukan login'));
      exit;
    }
    //SET TABLE NAME
    define('TABLE','detail_usulan');
  }

  //CHECK OBAT FUNCTION
  public function Obat(){
    //check empty post
    $post = $this->input->post();
    if(!empty($post)){
      //DECLARE VARIABLE
      $this->session->set_userdata(array('id_atc_obat'=>$post['id_atc_obat']));
      //LOGIC
      $exist = $this->Model_Checking->Get_WIth_Param('detail_usulan','id_atc_obat',$post['id_atc_obat']);
      if(!$exist){
        $this->session->set_userdata(array('status_obat'=>'Tdk'));
      }else{
        $this->session->set_userdata(array('status_obat'=>'Ada'));
      }
      echo json_encode(array('status'=>'00','msg'=>'Berhasil Mencari Obat'));
    }else{
      echo json_encode(array('status'=>'60','msg'=>'Error, post yang diberikan kosong'));
    }
  }
  //END OF INDEX FOR CHECK OBAT

  //CHECK SEDIAAN FUNCTION
  public function Sediaan(){
    //check empty post
    $post = $this->input->post();
    if(!empty($post)){
      //DECLARE VARIABLE
      $id_atc_obat = $this->session->userdata('id_atc_obat');
      $this->session->set_userdata(array('id_sediaan'=>$post['id_sediaan']));
      //LOGIC
      $exist = $this->Model_Checking->Get_WIth_Param('detail_usulan','id_atc_obat',$id_atc_obat,'id_sediaan',$post['id_sediaan']);
      if(!$exist){
        $this->session->set_userdata(array('status_sediaan'=>'Tdk'));
      }else{
        $this->session->set_userdata(array('status_sediaan'=>'Ada'));
      }
      echo json_encode(array('status'=>'00','msg'=>'Berhasil Mencari Sediaan'));
    }else{
      echo json_encode(array('status'=>'60','msg'=>'Error, post yang diberikan kosong'));
    }
  }
  //END OF INDEX FOR CHECK SEDIAAN

  //CHECK SATUAN FUNCTION
  public function Satuan(){
    //check empty post
    $post = $this->input->post();
    if(!empty($post)){
      //DECLARE VARIABLE
      $id_atc_obat = $this->session->userdata('id_atc_obat');
      $id_sediaan = $this->session->userdata('id_sediaan');
      $this->session->set_userdata(array('id_satuan'=>$post['id_satuan']));
      //LOGIC
      $exist = $this->Model_Checking->Get_WIth_Param('detail_usulan','id_atc_obat',$id_atc_obat,'id_sediaan',$id_sediaan,'id_satuan',$post['id_satuan']);
      if(!$exist){
        $this->session->set_userdata(array('status_satuan'=>'Tdk'));
      }else{
        $this->session->set_userdata(array('status_satuan'=>'Ada'));
      }
      echo json_encode(array('status'=>'00','msg'=>'Berhasil Mencari Satuan'));
    }else{
      echo json_encode(array('status'=>'60','msg'=>'Error, post yang diberikan kosong'));
    }
  }
  //END OF INDEX FOR CHECK SATUAN

  //CHECK SATUAN FUNCTION
  public function Kekuatan(){
    //check empty post
    $post = $this->input->post();
    if(!empty($post)){
      //DECLARE VARIABLE
      $id_atc_obat = $this->session->userdata('id_atc_obat');
      $id_sediaan = $this->session->userdata('id_sediaan');
      $id_satuan = $this->session->userdata('id_satuan');
      //LOGIC
      $exist = $this->Model_Checking->Get_WIth_Param('detail_usulan','id_atc_obat',$id_atc_obat,'id_sediaan',$id_sediaan,'id_satuan',$id_satuan,'id_kekuatan',$post['id_kekuatan']);
      if(!$exist){
        $this->session->set_userdata(array('status_kekuatan'=>'Tdk'));
      }else{
        $this->session->set_userdata(array('status_kekuatan'=>'Ada'));
      }
      echo json_encode(array('status'=>'00','msg'=>'Berhasil Mencari Kekuatan'));
    }else{
      echo json_encode(array('status'=>'60','msg'=>'Error, post yang diberikan kosong'));
    }
  }
  //END OF INDEX FOR CHECK SATUAN

  //CHECK KELASTERAPI FUNCTION
  public function KelasTerapi(){
    //check empty post
    $post = $this->input->post();
    if(!empty($post)){
      $count = $this->Model_Checking->Get_Id_Terapi($post['id_terapi']);
      if(empty($count)){
        echo json_encode(array('status'=>'01','msg'=>$count));
      }else{
        echo json_encode(array('status'=>'00','msg'=>$count));
      }
    }else{
      echo json_encode(array('status'=>'60','msg'=>'Error, post yang diberikan kosong'));
    }
  }
  //END OF INDEX FOR CHECK KELASTERAPI

  //CHECK SUBKELASTERAPI FUNCTION
  public function SubKelasTerapi(){
    //check empty post
    $post = $this->input->post();
    if(!empty($post)){
      $count = $this->Model_Checking->Get_Id_SubTerapi($post['id_sub_kelasterapi']);
      if(empty($count)){
        echo json_encode(array('status'=>'01','msg'=>$count));
      }else{
        echo json_encode(array('status'=>'00','msg'=>$count));
      }
    }else{
      echo json_encode(array('status'=>'60','msg'=>'Error, post yang diberikan kosong'));
    }
  }
  //END OF INDEX FOR CHECK SUBKELASTERAPI

  //CHECK SUBKELASTERAPI2 FUNCTION
  public function SubKelasTerapi2(){
    //check empty post
    $post = $this->input->post();
    if(!empty($post)){
      $count = $this->Model_Checking->Get_Id_SubTerapi2($post['id_sub_kelasterapi2']);
      if(empty($count)){
        echo json_encode(array('status'=>'01','msg'=>$count));
      }else{
        echo json_encode(array('status'=>'00','msg'=>$count));
      }
    }else{
      echo json_encode(array('status'=>'60','msg'=>'Error, post yang diberikan kosong'));
    }
  }
  //END OF INDEX FOR CHECK SUBKELASTERAPI2

  public function GetMsg(){
    //check empty post
    $post = $this->input->post();
    //$status_obat = $this->session->userdata('status_obat');
    //print_r($status_obat);exit;
    if(!empty($post)){
      //DECLARE VARIABLE
      $status_obat = $this->session->userdata('status_obat');
      $status_sediaan = $this->session->userdata('status_sediaan');
      $status_satuan = $this->session->userdata('status_satuan');
      $status_kekuatan = $this->session->userdata('status_kekuatan');
      //DECLARE MESSAGE
      $msg  = "";
      $msg1 = "";
      $msg2 = "";
      $final_msg = "";
      //LOGIC
      //CHECK ISSET STATUS OBAT
      if(isset($status_obat)){
        //CHECK OBAT ADA
        if($status_obat == 'Ada'){
          //CHECK ISSET STATUS SEDIAAN
          if(isset($status_sediaan)){
            //CHECK SEDIAAN TIDAK ADA
            if($status_sediaan == 'Tdk'){
              $msg = 'Sediaan Obat Baru';
            }
          }
          //CHECK ISSET STATUS SATUAN
          if(isset($status_satuan)){
            //CHECK SEDIAAN TIDAK ADA
            if($status_satuan == 'Tdk'){
              $msg1 = 'Satuan Obat Baru';
            }
          }
          //CHECK ISSET STATUS KEKUATAN
          if(isset($status_kekuatan)){
            //CHECK KEKUATAN TIDAK ADA
            if($status_kekuatan == 'Tdk'){
              $msg2 = 'Kekuatan Obat Baru';
            }
          }
          //CHECK STATUS SEDIAAN, SATUAN AND KEKUATAN IS ADA
          if($status_sediaan == 'Ada' && $status_satuan == 'Ada' && $status_kekuatan == 'Ada'){
            echo json_encode(array('status'=>'00','msg'=>'Obat telah tersedia'));
          }else{
            //CHECK EMPTY msg
            if(!empty($msg)){
              $final_msg .= $msg;
              //CHECK EMPTY msg1
              if(!empty($msg1)){
                $final_msg .= ','.$msg1;
              }
              //CHECK EMPTY msg1
              if(!empty($msg2)){
                $final_msg .= ','.$msg2;
              }
            }else{
              //CHECK EMPTY msg1
              if(!empty($msg1)){
                $final_msg .= $msg1;
                //CHECK EMPTY msg1
                if(!empty($msg2)){
                  $final_msg .= ','.$msg2;
                }
              }else{
                if(!empty($msg2)){
                  $final_msg .= $msg2;
                }
              }
            }
            echo json_encode(array('status'=>'00','msg'=>$final_msg));
          }
        }else{
          echo json_encode(array('status'=>'00','msg'=>'Obat tidak tersedia'));
        }
      }
    }else{
      echo json_encode(array('status'=>'60','msg'=>'Error, post yang diberikan kosong'));
    }
  }


}
?>
