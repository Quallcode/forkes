<?php
class Model_Get_Atc_Obat extends CI_Model {
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

  function Custom_Select($table,$table2){
    $this->db->select($table.'.id, '.$table.'.nama_obat ,'.$table.'.id_atc_obat, '.$table2.'.keterangan');
    $this->db->from($table);
    $this->db->from($table2);
  	$this->db->where($table.'.id_keterangan = '.$table2.'.id');
    $this->db->where($table.".deleted = '0'");
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

  function Validate($table,$id){
    $this->db->select('id');
    $this->db->from($table);
    $this->db->where('id_atc_obat',$id);
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

	function Update_Select ($table,$fieldname,$post) {
		$this->db->select('*');
		$this->db->where($fieldname,$post);
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
}
?>
