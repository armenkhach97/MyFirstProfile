<?php
	class Partners extends Controller {
    function __construct() {
		parent::__construct();
		
		$this->view->css= array('about/css/style.css');
    }
    
    function index() {
		$this->view->title = 'Partners';
        $this->view->render('header');
        $this->view->render('partners/index');  
		
        $this->view->render('footer');
    }

}