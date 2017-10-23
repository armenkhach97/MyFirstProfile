<?php

class Consumer extends Controller {
    function __construct() {
		parent::__construct();
		
		$this->view->css= array('about/css/style.css');
    }
    
    function index() {
		$this->view->lists= $this->model->sel(['pagename'=>'consumer']);
		$this->view->title = 'Consumer';
        $this->view->render('header');
        $this->view->render('consumer/index');  
        $this->view->render('footer');
    }

}