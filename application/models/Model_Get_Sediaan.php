<?php
class Model_Get_Sediaan extends CI_Model {
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
}
?>
