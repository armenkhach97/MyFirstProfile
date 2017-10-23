<?php
	class Support extends Controller {
    function __construct() {
		parent::__construct();
		
		$this->view->css= array('about/css/style.css');
    }
    
    function index() {
		$this->view->title='Support';
        $this->view->render('header');
        $this->view->render('support/index');  
		
        $this->view->render('footer');
    }

}