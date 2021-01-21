<?php

class Industry extends Controller {

    function __construct() {
        parent::__construct();
        //Auth::handleLogin('industry');
        $this->view->js = array('industry/js/app.js');
    }

    public function index() {
        $this->view->title = "Industry";
        $this->view->render('header');
        $this->view->render('industry/index');
        $this->view->render('footer');
    }


    function page() {
        $this->view->title = "Industry";
        $this->view->render('header');
        $this->view->render('industry/page');
        $this->view->render('footer');
    }

    public function save(){
        $this->model->save();
    }

}
