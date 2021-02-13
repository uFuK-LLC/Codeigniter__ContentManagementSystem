<?php

class Subject extends CI_Controller
{

    public $viewFolder = "";

    public function __construct()
    {
        parent::__construct();

        $this->viewFolder = "subject_v";

        $this->load->model("subject_m");
        $this->load->model("subject_image_m");
    }

    public function index()
    {
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";
        $viewData->items = $this->subject_m->get_all();

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function new_form()
    {
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";
        $viewData->exams = get_exams();
        $viewData->lessons = get_lessons();

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function save()
    {
        $this->load->library("form_validation");

        $this->form_validation->set_rules("title", "Başlık", "required|trim");

        $this->form_validation->set_message(
            array(
                "required" => "<b>{field}</b> alanını boş olamaz."
            )
        );

        $validate = $this->form_validation->run();

        if ($validate) {
            $insert = $this->subject_m->add(
                array(
                    "title" => $this->input->post("title"),
                    "description" => $this->input->post("description"),
                    "content" => $this->input->post("content"),
                    "exam_id" => $this->input->post("exam"),
                    "lesson_id" => $this->input->post("lesson"),
                    "video_url" => $this->input->post("video"),
                    "rank" => 0,
                    "isActive" => 1,
                    "createdAt" => date("Y-m-d")
                )
            );

            if ($insert) {
                $alert = array(
                    "title" => "İşlem Başarılı",
                    "text" => "Kayıt başarılı bir şekilde eklendi",
                    "type"  => "success"
                );
            } else {
                $alert = array(
                    "title" => "İşlem Başarısız",
                    "text" => "Kayıt Ekleme sırasında bir problem oluştu",
                    "type"  => "error"
                );
            }

            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("subject"));


        } else {

            $viewData = new stdClass();
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "add";
            $viewData->form_error = true;

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }
    }

    public function update_form($id)
    {
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";
        $viewData->item = $this->subject_m->get(array("id" => $id));
        $viewData->current_exam = get_exam($viewData->item->exam_id);
        $viewData->current_lesson = get_lesson($viewData->item->lesson_id);
        $viewData->exams = get_exams();
        $viewData->lessons = get_lessons();


        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function update($id)
    {
        $this->load->library("form_validation");

        $this->form_validation->set_rules("title", "Başlık", "required|trim");

        $this->form_validation->set_message(
            array(
                "required" => "<b>{field}</b> alanını boş olamaz."
            )
        );

        $validate = $this->form_validation->run();

        if ($validate) {
            $update = $this->subject_m->update(

                array(
                    "id" => $id,
                ), array(
                    "title" => $this->input->post("title"),
                    "description" => $this->input->post("description"),
                    "content" => $this->input->post("content"),
                    "exam_id" => $this->input->post("exam"),
                    "lesson_id" => $this->input->post("lesson"),
                    "video_url" => $this->input->post("video"),
                )
            );

            //TODO alert sistemi eklenecek....
            if ($update) {
                $alert = array(
                    "title" => "İşlem Başarılı",
                    "text" => "Kayıt başarılı bir şekilde eklendi",
                    "type"  => "success"
                );
            } else {
                $alert = array(
                    "title" => "İşlem Başarısız",
                    "text" => "Kayıt Ekleme sırasında bir problem oluştu",
                    "type"  => "error"
                );
            }

            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("subject"));


        } else {

            $viewData = new stdClass();
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "update";
            $viewData->item = $this->subject_m->get(array("id" => $id));
            $viewData->current_exam = get_exam($viewData->item->exam_id);
            $viewData->current_lesson = get_lesson($viewData->item->lesson_id);
            $viewData->exams = get_exams();
            $viewData->lessons = get_lessons();
            $viewData->form_error = true;

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }
    }

    public function delete($id)
    {
        $delete = $this->subject_m->delete(array("id" => $id));

        if ($delete) {
            redirect(base_url("subject"));
        } else {
            redirect(base_url("subject"));
        }
    }

    public function isActiveSetter($id)
    {
        if ($id) {
            $isActive = ($this->input->post("data") == "true") ? 1 : 0;
            $this->subject_m->update(
                array("id" => $id), array("isActive" => $isActive)
            );
        }
    }

    public function image_form($id)
    {
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "image";

        $viewData->item = $this->subject_m->get(array("id" => $id));

        $viewData->item_images = $this->subject_image_m->get_all(array("subject_id" => $id));

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function image_upload($id) {

        $config["allowed_types"] = "jpg|jpeg|png";
        $config["upload_path"] = "uploads/$this->viewFolder/";

        $this->load->library("upload", $config);

        $upload = $this->upload->do_upload("file");

        if ($upload) {
            $uploaded_file = $this->upload->data("file_name");

            $this->subject_image_m->add(array(
                "img_url"     => $uploaded_file,
                "rank"        => 0,
                "isActive"    => 1,
                "createdAt"   => date("Y-m-d"),
                "isCover"     => 0,
                "subject_id"  => $id));
        } else {
            echo "işlem başarısız";
        }


    }
}