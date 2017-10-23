<?php
class About extends Controller {
    function __construct() {
		parent::__construct();
		
		$this->view->css= array('about/css/style.css');
    }
    function index() {
		$this->view->title = 'About';
		
		$this->view->lists= $this->model->sel(['pagename'=>'about', 'lang' => 'en']);
		
        $this->view->render('header');
        $this->view->render('about/index');  
        $this->view->render('footer');
    }
	public function upd(){
		
		if($_POST["atr"]=="header")
		{$this->model->ubd( array('text' => $_POST["textsave"]));}
		else {$this->model->ubd( array('header' => $_POST["textsave"]));}
	
	}
	public function lang()
	{
		if(isset($_POST["lang"]))
		{	
		
			$this->view->lists = $this->model->sel(['pagename'=>'about', 'lang' => $_POST['lang']]);
			echo json_encode($this->view->lists[0]);


		}
		
	}
}