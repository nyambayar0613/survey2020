<?php

class Login extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    function index() 
    {    
        $this->view->title = 'Login';
        $this->view->render('header');
        $this->view->render('login/index');
        $this->view->render('footer');
    }


    function type($type) {
        $this->view->title = 'Login';

        $this->view->render('header');
        $this->view->render("login/$type/index");
        $this->view->render('footer');
    }

    function typeLogin($type) {
        $this->model->typeLogin($type);
    }
    
    function run()
    {
        $this->model->run();
    }

    function teacherLogin()
    {
        $this->model->teacherLogin();
    }
}