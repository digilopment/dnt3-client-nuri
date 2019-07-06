<?php

class ArchimedaUser extends Database{
	
	public $init;
	public $data;


	protected function model(){
		
		$rest = new Rest;
		$session = new Sessions;
		
		$type	= "archimeda-patient";
		$email 	= $session->get("archimeda-patient_id");
		if(empty($email)){
			$email = Cookie::Get("archimeda-patient_id");
		}
		
		$query = "SELECT * FROM `dnt_registred_users` WHERE type = '" . $type . "' AND email = '" . $email . "' AND vendor_id = '" . Vendor::getId() . "' ";
		if ($this->num_rows($query) > 0) {
			$this->data = $this->get_results($query, true);
		}
		$this->init = true;
		
	}
	
	public function getAlphabet(){
		
		$alphabet = array(
			'A' => 1267,
			'B' => 1268,
			'C' => 1269,
			'D' => 1280,
			'E' => 1281,
			'F' => 1282,
			//'G' => 1283,
			//'H' => 1284,
			'K' => 1285,
			'L' => 1286,
			//'M' => 1287,
			//'N' => 1288,
			'O' => 1289,
			//'P' => 1290,
			//'R' => 1291,
			//'S' => 1292,
			'T' => 1293,
			'U' => 1294,
			'V' => 1295,
			'W' => 1296,
			'Z' => 1297,
		);
		return $alphabet;
	}
	
	public function logged(){
		$session = new Sessions;
		if($session->get("archimeda-patient_logged") || (Cookie::Get("archimeda-patient_logged") == 1 && Cookie::Get("archimeda-patient_id") != "")){
			return true;
		}else{
			return false;
		}
	}
	
	public function loadHtmlTemplate($userData, $tpl){
		include "dnt-view/layouts/".Vendor::getLayout()."/plugins/".$tpl.".php";
		return $data;
	}
	public function get(){
		if($this->init){
			return $this->data[0];
		}else{
			$this->model();
			return $this->data[0];
		}
	}
	
}