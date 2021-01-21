<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 11/7/2019
 * Time: 10:59 AM
 */

class staff extends Controller
{
    function __construct()
    {
        parent::__construct();
        //Auth::handleLogin('staff');
       $this->view->js = array('staff/js/app.js');
    }

    public function index() {
        $this->view->title = "Staff";
        $this->view->render('header');
        $this->view->render('staff/index');
        $this->view->render('footer');
    }

    public function page() {
        $this->view->title = "Staff";
        $this->view->render('header');
        $this->view->render('staff/page');
        $this->view->render('footer');
    }

    public function start(){
        $this->view->title = "staff";
        $this->view->render('header');
        $this->view->render('staff/start');
        $this->view->render('footer');
    }

    public function save(){
        $this->model->save();
    }

//    public function logout() {
//        Session::destroy();
//        header('Location: /login/type/staff');
//    }

}