<?php

class Home extends CI_Controller
{

    public $viewFolder = "";

    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "homepage";
    }

    public function index()
    {

        $viewData = new stdClass();

        $this->load->helper("text");
        $this->load->model("slide_m");
        $this->load->model("subject_m");
        $this->load->model("setting_m");

        $slides = $this->slide_m->get_all(
            array(
                "isActive" => 1
            ), "rank ASC"
        );

        $items = $this->subject_m->get_all(
            array()
        );

        $viewData->settings = $this->setting_m->get();
        $viewData->slides = $slides;
        $viewData->items = $items;
        $viewData->viewFolder = "home_v";

        $this->load->view($viewData->viewFolder, $viewData);

    }

    public function about_us()
    {

        $viewData = new stdClass();
        $viewData->viewFolder = "about_v";
        $this->load->helper("text");

        $this->load->model("setting_m");

        $viewData->settings = $this->setting_m->get();

        $this->load->view($viewData->viewFolder, $viewData);

    }

    public function login()
    {

        $viewData = new stdClass();
        $viewData->viewFolder = "login_v";

        $this->load->view($viewData->viewFolder, $viewData);

    }

    public function do_login()
    {

        $this->load->model("login_m");
        $this->load->library("form_validation");

        $this->form_validation->set_rules("user_email", "E-posta", "trim|required|valid_email");
        $this->form_validation->set_rules("user_password", "Şifre", "trim|required");

        if ($this->form_validation->run() == FALSE) {


            // TODO Alert...

            redirect(base_url("login"));


        } else {

            // TODO Alert..
            $user = $this->login_m->get(
                array(
                    "email"    => $this->input->post("user_email"),
                    "password" => $this->input->post("user_password")
                )
            );

            if($user) {

                $this->session->set_userdata('user', $user);
                redirect(base_url());

            } else {

            }

        }

    }

    public function logout() {
        $this->session->unset_userdata('user');
        redirect(base_url("giris-yap"));
    }

    public function popup_never_show_again()
    {

        $popup_id = $this->input->post("popup_id");

        set_cookie($popup_id, "true", 60 * 60 * 24 * 365);

    }

    public function register() {
        $viewData = new stdClass();
        $viewData->viewFolder = "register_v";

        $this->load->view($viewData->viewFolder, $viewData);
    }

    public function do_register() {

        $this->load->model("login_m");
        $this->load->library("form_validation");

        $this->form_validation->set_rules("user_email", "E-posta", "trim|required|valid_email");
        $this->form_validation->set_rules("user_password", "Şifre", "trim|required");

        if ($this->form_validation->run() == FALSE) {


            // TODO Alert...

            redirect(base_url("login"));


        } else {

            // TODO Alert..
            $insert = $this->login_m->add(
                array(
                    "email"     => $this->input->post("user_email"),
                    "username"  => $this->input->post("user_username"),
                    "type"      => $this->input->post("user_type"),
                    "password"  => $this->input->post("user_password"),
                    "createdAt" => date("Y:m:d")
                )
            );

            if($insert) {

                $user = $this->login_m->get(
                    array(
                        "email"    => $this->input->post("user_email"),
                        "password" => $this->input->post("user_password")
                    )
                );

                $this->session->set_userdata('user', $user);
                redirect(base_url());

            } else {

            }

        }
    }

    public function show_profile() {
        $viewData = new stdClass();
        $viewData->viewFolder = "profile_v";

        $this->load->view($viewData->viewFolder, $viewData);
    }

    public function create_lesson() {
        $viewData = new stdClass();
        $viewData->viewFolder = "create_lesson_v";

        $this->load->view($viewData->viewFolder, $viewData);
    }

    public function created_lesson() {
        $viewData = new stdClass();
        $viewData->viewFolder = "created_lesson_v";

        $this->load->view($viewData->viewFolder, $viewData);
    }

    public function add_lesson() {
        $this->load->model("courses_m");

        $insert = $this->courses_m->add(
            array(
                "lesson_name" => $this->input->post("lesson_name"),
                "instructor_name" => $this->input->post("lesson_instructor"),
                "instructor_id" => $this->input->post("instructor_id"),
                "isOnline" => (!get_user()) ? 0 : 1,
                "subject" => $this->input->post("lesson_subject"),
                "isActive" => 1,
                "createdAt" => date("Y-m-d")
            )
        );

        if ($insert) {
            print_r("Kayıt işlemi başarılı");
        } else {
            print_r("Kayıt işlemi başarısız");
        }
        die();
    }

    public function courses() {

        $this->load->model("courses_m");
        $this->load->model("coupons_m");

        $viewData = new stdClass();
        $viewData->viewFolder = "courses_v";
        $viewData->items = $this->courses_m->get_all();

        $user = get_user();
        if (!$user) {
            redirect(base_url("giris-yap"));
        } else {
            $viewData->coupons = $this->coupons_m->get($user->id);
        }

        $this->load->view($viewData->viewFolder, $viewData);
    }

    public function join($id)
    {
        $this->load->model("coupons_m");

        $viewData = new stdClass();
        $viewData->viewFolder = "connect_v";
        $this->coupons_m->update(
            array(
                "id" => $id
            ),
            array(
                "isActive" => 0
            )
        );
        $this->load->view($viewData->viewFolder, $viewData);
    }

    public function join_instructor()
    {
        $viewData = new stdClass();
        $viewData->viewFolder = "connect_v";
        $this->load->view($viewData->viewFolder, $viewData);
    }

}