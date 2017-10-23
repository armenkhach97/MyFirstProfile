<?php

class Business_Model extends Model {

    public function __construct() {
        parent::__construct();
    }
	public function sel($arr){
		
		return $this->db->select("SELECT text,header,lang FROM data where pagename = :pagename",$arr);
	}
}