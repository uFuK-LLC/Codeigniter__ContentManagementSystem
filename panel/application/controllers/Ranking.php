<?php

class Ranking extends CI_Controller {

    public $viewFolder = "";

    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "ranking_v";
        $this->load->model("ranking_m");
    }

    public function index() {
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";
        $viewData->items = $this->ranking_m->get_all(array(), "score DESC");

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function do_finish() {

        $this->load->model("coupons_m");
        $this->load->model("winners_m");

        $coupons = $this->coupons_m->get_all(
            array("isActive" => 1)
        );

        $index = 0;
        foreach ($_POST['userIds'] as $userId)
        {
            $this->setWinner($userId, $coupons, $index);
            $index += 1;
        }

        redirect(base_url("ranking"));
    }

    public function setWinner($userId, $coupons, $i)
    {
        $this->winners_m->add(
            array(
                "user_id"    => $userId,
                "coupon_id"  => $coupons[$i]->id,
                "isActive"   => 1,
                "createdAt"  => date("Y-m-d")
            )
        );
    }
}