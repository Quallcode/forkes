<?php
class Model_Get_Satuan extends CI_Model {
  function Normal_Select ($table) {
		$this->db->select('*');
    $this->db->from($table);
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
    $this->db->select('id');
    $this->db->from($table);
    $this->db->where('id_satuan',$id);
    $result = $this->db->get();
    $view_result = $result->result_array();
    if($view_result == Array ( ))
    {
      return FALSE;
    }
    else {
      return TRUE;
    }
  }

}
?>
