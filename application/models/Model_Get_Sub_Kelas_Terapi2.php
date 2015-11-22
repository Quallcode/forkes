<?php
class Model_Get_Sub_Kelas_Terapi2 extends CI_Model {
  function Normal_Select ($table) {
	$this->db->select('*');
    $this->db->from($table);
	$this->db->where('deleted = ', '0');
	$result = $this->db->get();
    $i = 0;
		if ($result->num_rows() > 0) {
			foreach($result->result_array() as $row){
				$data[$i] = $row;
        $i++;
      }
			return $data;
		}
		else{
			return FALSE;
		}
	}
  function validate($table,$id){
    $this->db->select('id_sub_kelasterapi');
    $this->db->from($table);
    $this->db->where('id_sub_kelasterapi',$id);
    $result = $this->db->get();
    //print_r($result->result_array()); exit;
    $view_result = $result->result_array();
    if($view_result == Array ( ))
    {
      return FALSE;
    }
    else {
      return TRUE;
    }
  }

  function Update_Select ($table,$fieldname,$post) {
		$this->db->select('*');
    	$this->db->from($table);
		$this->db->where($fieldname,$post);
		$result = $this->db->get();
    	$i = 0;
		if ($result->num_rows() > 0) {
			foreach($result->result_array() as $row){
				$data[$i] = $row;
        $i++;
      }
			return $data;
		}
		else{
			return FALSE;
		}
	}

  function Custom_Select() {

    $query = "select id_terapi, Kelas_terapi from kelas_terapi where deleted=0 ";
    $result = $this->db->query($query);
    //print_r($result->result_array()); exit;
    $i = 0;
    foreach ($result->result_array() as $row) {
      $data[$i]= $row;
      $get_sub_kelas_terapi = $this->Get_Sub_Kelas_Terapi($data[$i]['id_terapi']);
      $data[$i]['sub_kelas_terapi'] = $get_sub_kelas_terapi;
      $i++;
    }
    //print_r($data); exit;
    return $data;
	}

  function Get_Sub_Kelas_Terapi($id_terapi) {
    $data = array();
    $query = "select id_terapi, id_sub_kelasterapi, Sub_Kelas_Terapi from sub_kelasterapi where deleted=0 and id_terapi='".$id_terapi."'";
    $result = $this->db->query($query);
    $sub_kelas_terapi = $result->result_array();
    $i = 0;
    foreach ($sub_kelas_terapi as $row) {
      $data[$i] = $row;
      $get_sub_kelas_terapi2 = $this->Get_Sub_Kelas_Terapi2($data[$i]['id_terapi'],$data[$i]['id_sub_kelasterapi']);
      $data[$i]['sub_kelas_terapi2'] = $get_sub_kelas_terapi2;
      $i++;
    }
    //print_r($data); exit;
    return $data;
    //print_r($result->result_array()); exit;
	}

  function Get_Sub_Kelas_Terapi2($id_terapi,$id_sub_terapi) {
    //print_r($id_terapi); print_r($id_sub_terapi); exit;
    $query = "select id_terapi, id_sub_kelasterapi, id_sub_kelasterapi2, Sub_Kelas_Terapi_2 from sub_kelasterapi2 where id_terapi='".$id_terapi."' and id_sub_kelasterapi='".$id_sub_terapi."' and deleted=0";
    $result = $this->db->query($query);
    return $result->result_array();
    //print_r($result->result_array()); exit;
	}

}
?>
