<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 11/7/2019
 * Time: 10:59 AM
 */

class graduates extends Controller
{
    function __construct()
    {
        parent::__construct();
        //Auth::handleLogin('graduates');
        $this->view->js = array('graduates/js/app.js');
    }

    public function index() {
        $this->view->title = "graduates";
        $this->view->render('header');
        $this->view->render('graduates/index');
        $this->view->render('footer');
    }
    public function start() {
        $this->view->title = "graduates";
        $this->view->render('header');
        $this->view->render('graduates/start');
        $this->view->render('footer');
    }

    public function page() {
        $this->view->title = "graduates";
        $this->view->render('header');
        $this->view->render('graduates/page');
        $this->view->render('footer');
    }

    public function save() {
        $this->model->save();
    }

    public function logout() {
        Session::destroy();
        header('Location: /login/type/graduates');
    }
}