<?php
	class Contact extends Controller {
    function __construct() {
		parent::__construct();
		
		$this->view->css= array('about/css/style.css');
    }
    
    function index() {
		$this->view->title='Contact';
        $this->view->render('header');
        $this->view->render('contact/index');  
		
        $this->view->render('footer');
    }

}