<?php
class Model_Checking extends CI_Model {
  function Get_WIth_Param ($table,$param = NULL ,$on = NULL, $param2 = NULL ,$on2 = NULL,$param3 = NULL ,$on3 = NULL, $param4 = NULL, $on4 = NULL) {
	$this->db->select('id');
  $this->db->from($table);
	$this->db->where('deleted = ', '0');
  if(!empty($param))
    $this->db->where($param. ' = ', $on);
  if(!empty($param2))
    $this->db->where($param2. ' = ', $on2);
  if(!empty($param3))
    $this->db->where($param3. ' = ', $on3);
  if(!empty($param4))
    $this->db->where($param4. ' = ', $on4);
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
