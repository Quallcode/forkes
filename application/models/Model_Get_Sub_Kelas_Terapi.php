<?php
class Model_Get_Sub_Kelas_Terapi extends CI_Model {
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
}
?>
