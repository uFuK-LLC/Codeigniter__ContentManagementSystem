<?php

class Test extends CI_Controller {

    public $viewFolder = "";

    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "test_v";
        $this->load->view("test_m");
    }

    public function index() {
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";
        $viewData->items = $this->test_m->get_all(array());

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function new_form() {

    }

}