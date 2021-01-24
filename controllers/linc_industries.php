<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 11/7/2019
 * Time: 10:59 AM
 */

class linc_industries extends Controller
{
    function __construct()
    {
        parent::__construct();
        //Auth::handleLogin('students');
        $this->view->js = array('linc_industry/js/app.js');
    }

    public function index() {
        $this->view->title = "linc_industry";
        $this->view->render('header');
        $this->view->render('linc_industry/index');
        $this->view->render('footer');
    }

    public function start() {
        $this->view->title = "linc_industry";
        $this->view->render('header');
        $this->view->render('linc_industry/start');
        $this->view->render('footer');
    }

    public function page() {
        $this->view->title = "linc_industry";
        $this->view->render('header');
        $this->view->render('linc_industry/page');
        $this->view->render('footer');
    }

    public function save() {
        $this->model->save();
    }

    public function logout() {
        Session::destroy();
        header('Location: /login/type/linc_industry');
    }

}