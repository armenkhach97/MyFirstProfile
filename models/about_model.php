<?php

class About_Model extends Model {

    public function __construct() {
        parent::__construct();
    }
	public function sel($arr){
		
		return $this->db->select("SELECT text,header,lang FROM data where pagename = :pagename AND lang= :lang",$arr);
	}
	public function ubd($x){
		$this->db->update('data',$x,'pagename = "about" and lang = "en"');
	}
}