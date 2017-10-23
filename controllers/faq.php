<?php

class Faq extends Controller {
    function __construct() {
		parent::__construct();
		
		$this->view->css= array('about/css/style.css');
    }
    
    function index() {
		$this->view->title = 'FAQ';
		$this->view->lists= $this->model->sel(['pagename'=>'faq']);
        $this->view->render('header');
        $this->view->render('faq/index');  
		
        $this->view->render('footer');
    }

}