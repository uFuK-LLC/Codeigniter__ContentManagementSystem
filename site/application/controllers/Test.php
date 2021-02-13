<?php

class Test extends CI_Controller {

    public $viewFolder = "";

    public function __construct()
    {
        parent::__construct();
        $this->load->model("test_m");
    }

    public function index()
    {
        $this->load->view("blank_v");
    }

    public function test_yks_list()
    {
        $this->load->model("lesson_m");
        $this->load->helper("text");

        $viewData = new stdClass();
        $viewData->viewFolder = "test_yks_list_v";
        $viewData->items = $this->test_m->get_all();
        $viewData->lessons = $this->lesson_m->get_all(array("con_YKS" => 1));

        $this->load->view($viewData->viewFolder, $viewData);
    }

    public function test_yks_detail($id)
    {
        $this->load->helper("text");
        $this->load->model("questions_m");

        if (!get_user()) {
            redirect(base_url("giris-yap"));
        } else {
            $viewData = new stdClass();
            $viewData->viewFolder = "test_yks_v";
            $viewData->items = $this->questions_m->get_all(array("test_id" => $id));

            $this->load->view($viewData->viewFolder, $viewData);
        }
    }

    public function calculate()
    {
        $score = 0;

        foreach ($_POST['questionIds'] as $questionId)
        {
            if (findAnswerIdCorrect($questionId) == $_POST['answer_'.$questionId])
            {
                $score++;
            }
        }

        $this->result($score);
    }

    public function result($score)
    {
        $this->load->model("ranking_m");
        if (get_user())
        {
            $user = get_user();
            $currentScore = $this->ranking_m->get();
            $this->ranking_m->update_score(
                array("user_id" => $user->id), $currentScore + $score
            );
        }

        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder = "result_v";
        $viewData->score = $score;
        $this->load->view($this->viewFolder, $viewData);
    }
}
