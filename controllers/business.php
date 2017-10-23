<?php
	class Business extends Controller {
    function __construct() {
		parent::__construct();
		
		$this->view->css= array('about/css/style.css');
    }
    function index() {
		$this->view->lists= $this->model->sel(['pagename'=>'business']);
		$this->view->title = 'Business';
        $this->view->render('header');
        $this->view->render('business/index');  
		
        $this->view->render('footer');
    }
}