<?php
class Model_Get_Combinasi extends CI_Model {
  function Normal_Select ($table,$param = NULL ,$on = NULL,$param2 = NULL ,$on2 = NULL,$param3 = NULL ,$on3 = NULL) {
	$this->db->select('*');
    $this->db->from($table);
	$this->db->where('deleted = ', '0');
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

  function Select_Data () {
	   $query = "select * from obat_combinasi";
     $execute = $this->db->query($query);
     $i = 0;
     //print_r($execute->result_array()); exit;
     if($execute->num_rows() > 0)
     {
       foreach ($execute->result_array() as $row) {
         $data[$i] = $row;
         //print_r($row['nama_obat_combinasi']); exit;
         $detail_obat_combinasi = $this->Select_Detail_Combinasi($row['nama_obat_combinasi']);
         $data[$i]['atc_obat'] = $detail_obat_combinasi;
         $i++;
       }
       return $data;
     }
     else {
       return FALSE;
     }
	}

  function Select_Detail_Combinasi($nama_combinasi){

    $query = "select detail_obat_combinasi.id_atc_obat, atc_obat.nama_obat, atc_obat.id_keterangan from detail_obat_combinasi, atc_obat where detail_obat_combinasi.id_atc_obat = atc_obat.id_atc_obat and detail_obat_combinasi.nama_obat_combinasi ='".$nama_combinasi."'";
    $execute = $this->db->query($query);
    //print_r($execute->result_array()); exit;
    $i = 0;

		if ($execute->num_rows() > 0) {
			foreach($execute->result_array() as $row){
				$data[$i] = $row;
        //print_r($row['id_keterangan']);exit;
        $detail_keterangan = $this->Select_Keterangan($row['id_keterangan']);
        $data[$i]['keterangan'] = $detail_keterangan;
        $i++;
      }
			return $data;
		}
		else{
			return FALSE;
		}
  }

  function Select_Keterangan($id_keterangan){

    $query = "select keterangan_atc_obat.keterangan from keterangan_atc_obat where keterangan_atc_obat.id ='".$id_keterangan."'";
    //print_r($query); exit;
    $execute = $this->db->query($query);
    //print_r($execute->result_array()); exit;
    $data = $execute->result_array();
    //print_r($data[0]['keterangan']);exit;

		if ($execute->num_rows() > 0) {
			return $data[0]['keterangan'];
		}
		else{
			return FALSE;
		}
  }

  function Validate($table,$id){
    $this->db->select('nama_obat_combinasi');
    $this->db->from($table);
    $this->db->where('nama_obat_combinasi',$id);
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
