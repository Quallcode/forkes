<?php
class Model_Get_Kabupaten extends CI_Model {
  function Normal_Select ($table,$param = NULL ,$on = NULL,$param2 = NULL ,$on2 = NULL,$param3 = NULL ,$on3 = NULL) {
	$this->db->select('*');
    $this->db->from($table);
  if(!empty($param))
    $this->db->where($param. ' = ', $on);
  if(!empty($param2))
    $this->db->where($param2. ' = ', $on2);
  if(!empty($param3))
    $this->db->where($param3. ' = ', $on3);
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
