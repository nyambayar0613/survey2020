<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 11/7/2019
 * Time: 10:59 AM
 */

class teachers extends Controller
{
    function __construct()
    {
        parent::__construct();
        //Auth::handleLogin('teachers');
        $this->view->js = array('teacher/js/app.js');
    }

    public function index() {
        $this->view->title = "teachers";
        $this->view->render('header');
        $this->view->render('teacher/index');
        $this->view->render('footer');
    }

    public function start() {
        $this->view->title = "teachers";
        $this->view->render('header');
        $this->view->render('teacher/start');
        $this->view->render('footer');
    }

    public function page() {
        $this->view->title = "teachers";
        $this->view->render('header');
        $this->view->render('teacher/page');
        $this->view->render('footer');
    }

    public function save() {
        $this->model->save();
    }

    public function logout() {
        Session::destroy();
        header('Location: /login/type/teachers');
    }

}