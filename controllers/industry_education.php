<?php


class industry_education extends Controller {
    function __construct()
    {
        parent::__construct();
        $this->view->js = array('industry_education/js/app.js');
    }

    public function index() {
        $this->view->title = "Education";
        $this->view->render('header');
        $this->view->render('industry_education/index');
        $this->view->render('footer');
    }

    public function page() {
        $this->view->title = "Education";
        $this->view->render('header');
        $this->view->render('industry_education/page');
        $this->view->render('footer');
    }

    public function save() {
        $this->model->save();
    }

    public function getStatisticVotes() {
        $this->model->getStatisticVotes();
    }
}