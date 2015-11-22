<?php
class Model_Get_Fornas extends CI_Model {
	
  function Custom_Fornas(){
      $query = "SELECT id_fornas, KELAS_TERAPI, SUB_KELASTERAPI1, SUB_KELASTERAPI2, SUB_KELASTERAPI3, Nama_obat, Sediaan, Kekuatan, Satuan FROM fornas WHERE deleted = 0";
    $result = $this->db->query($query);
	//print_r($result->result_array());exit;
    $i = 0;
    if ($result->num_rows() > 0) {
      foreach($result->result_array() as $row){
        $data[$i] = $row;
        $detail_fornas = $this->Detail_Fornas('fornas','id_fornas',$row['id_fornas']);
        $data[$i]['detail_fornas'] = $detail_fornas;
		$kelas_terapi = $this->Kelas_Terapi('fornas','id_fornas',$row['id_fornas']);
        $data[$i]['kelas_trapi'] = $kelas_terapi;
		$restriksi_obat = $this->Restriksi_Obat('fornas','id_fornas',$row['id_fornas']);
        $data[$i]['restriksi_obat'] = $restriksi_obat;
		$restriksi_sediaan = $this->Restriksi_Sediaan('fornas','id_fornas',$row['id_fornas']);
        $data[$i]['restriksi_sediaan'] = $restriksi_sediaan;
        $i++;
      }
      return $data;
    }
    else{
      return FALSE;
    }
  }
  
  function Detail_Fornas($table,$param,$on){
    $this->db->select('Subkutan, intrakutan, intramuscular, intravena, intravena_bolus, intra_arteri, intralumbal, intraperitoneal, intrapleural, intracardial, anti_artikuler, implantasi_subkutan, rektal, intranasal, intra_okuler, intra_aurikuler, intrapulmonal, intravaginal, infus_drip, injeksi_infiltr, p_v, Tk1, Tk2, Tk3, PRB, PP');
    $this->db->from($table);
	$this->db->where($param,$on);
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
	
	function Kelas_Terapi($table,$param,$on){
    $this->db->select('RESTRIKSI_KELAS_TERAPI, RESTRIKSI_SUBKELAS_TERAPI_1, RESTRIKSI_SUBKELAS_TERAPI_2, RESTRIKSI_SUBKELAS_TERAPI_3');
    $this->db->from($table);
	$this->db->where($param,$on);
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
	
	function Restriksi_Obat($table,$param,$on){
    $this->db->select('RESTRIKSI_OBAT, RESTRIKSI_OBAT1, RESTRIKSI_OBAT2, RESTRIKSI_OBAT3, RESTRIKSI_OBAT4');
    $this->db->from($table);
	$this->db->where($param,$on);
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
	
	function Restriksi_Sediaan($table,$param,$on){
    $this->db->select('RESTRIKSI_SEDIAAN, RESTRIKSI_SEDIAAN2, RESTRIKSI_SEDIAAN3');
    $this->db->from($table);
	$this->db->where($param,$on);
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
	
	function Get_Atc_Obat_GB () {
  	$this->db->select('*');
    $this->db->from('atc_obat');
  	$this->db->where('deleted = ', '0');
  	$this->db->group_by('id_atc_obat');
	$this->db->order_by('nama_obat','ASC');
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
	
	function Get_Kelas_Terapi_GB () {
  	$this->db->select('*');
    $this->db->from('kelas_terapi');
  	$this->db->where('deleted = ', '0');
  	$this->db->group_by('id_terapi');
	$this->db->order_by('Kelas_terapi','ASC');
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
	
	function Get_Sub_Kelasterapi_GB () {
  	$this->db->select('*');
    $this->db->from('sub_kelasterapi');
  	$this->db->where('deleted = ', '0');
  	$this->db->group_by('id_sub_kelasterapi');
	$this->db->order_by('Sub_Kelas_Terapi','ASC');
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
	
	function Get_Sub_Kelasterapi2_GB () {
  	$this->db->select('*');
    $this->db->from('sub_kelasterapi2');
  	$this->db->where('deleted = ', '0');
  	$this->db->group_by('Sub_Kelas_Terapi_2');
	$this->db->order_by('Sub_Kelas_Terapi_2','ASC');
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
	
	function Get_Sub_Kelasterapi3_GB () {
  	$this->db->select('*');
    $this->db->from('sub_kelasterapi3');
  	$this->db->where('deleted = ', '0');
  	$this->db->group_by('Sub_Kelas_Terapi_3');
	$this->db->order_by('Sub_Kelas_Terapi_3','ASC');
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
	
	function Get_Sediaan_GB () {
  	$this->db->select('*');
    $this->db->from('sediaan');
  	$this->db->where('deleted = ', '0');
  	$this->db->group_by('id_sediaan');
	$this->db->order_by('nama_sediaan','ASC');
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
	
	function Get_Kekuatan_GB () {
  	$this->db->select('*');
    $this->db->from('kekuatan');
  	$this->db->where('deleted = ', '0');
  	$this->db->group_by('id_kekuatan');
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
	
	function Get_Satuan_GB () {
  	$this->db->select('*');
    $this->db->from('satuan');
  	$this->db->where('deleted = ', '0');
  	$this->db->group_by('id_satuan');
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
