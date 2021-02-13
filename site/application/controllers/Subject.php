<?php

class Subject extends CI_Controller {

    public $viewFolder = "";

    public function __construct()
    {
        parent::__construct();
        $this->load->model("subject_m");
    }

    public function index()
    {
        $this->load->view("blank_v");
    }

    public function subject_yks_list()
    {
        $this->load->model("lesson_m");
        $this->load->helper("text");

        $viewData = new stdClass();
        $viewData->viewFolder = "subject_yks_list_v";
        $viewData->items = $this->subject_m->get_all();
        $viewData->lessons = $this->lesson_m->get_all(array("con_YKS" => 1));

        $this->load->view($viewData->viewFolder, $viewData);
    }

    public function subject_yks_detail($id)
    {
        $this->load->helper("text");

        $viewData = new stdClass();
        $viewData->viewFolder = "subject_yks_v";
        $viewData->items = $this->subject_m->get_all();

        $viewData->currentItem = $this->subject_m->get(array("id" => $id));


        $this->load->view($viewData->viewFolder, $viewData);
    }
}
