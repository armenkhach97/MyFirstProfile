<?php

class Index extends Controller {

    function __construct() {
        parent::__construct();
		$this -> view -> js = array('index/js/index.js');
		$this -> view -> css = array('index/css/index.css');
    }
    
    function index() {
        //echo Hash::create('sha256', 'jesse', HASH_PASSWORD_KEY);
        //echo Hash::create('sha256', 'test2', HASH_PASSWORD_KEY);
        $this->view->title = 'Home';
		
        $this->view->render('header');
        $this->view->render('index/index');
		$this->view->render('footer');
    }
    
}