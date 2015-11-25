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
  function validate($id_sub_terapi,$id_sub_kelasterapi2,$sub_kelasterapi2){
    $query = "select id from sub_kelasterapi2 where id_sub_kelasterapi='".$id_sub_terapi."' and id_sub_kelasterapi2='".$id_sub_kelasterapi2."' and Sub_Kelas_Terapi_2='".$sub_kelasterapi2."'";
    $result = $this->db->query($query);
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
    $query = "select * from sub_kelasterapi2 where deleted='0' group by Sub_Kelas_Terapi_2";
    $result = $this->db->query($query);
    //print_r($result->result_array()); exit;
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
}
?>
