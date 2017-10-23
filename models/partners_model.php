<?php

class Partners_Model extends Model {

    public function __construct() {
        parent::__construct();
    }
	public function sel(){
		
		return $this->db->select("SELECT * FROM data");
	}
}