<?php

function get_subject_cover_image($subject_id) {
    $t = &get_instance();

    $t->load->model("subject_image_m");

    $cover_image = $t->subject_image_m->get(
        array("subject_id" => $subject_id, "isCover" => 1)
    );


    if (empty($cover_image))
    {
        $cover_image = $t->subject_image_m->get(
            array("subject_id" => $subject_id)
        );
    }

    return !empty($cover_image) ? $cover_image->img_url : "";
}

function get_settings(){

    $t = &get_instance();

    $t->load->model("setting_m");

    $settings = $t->setting_m->get();

    $t->session->set_userdata("settings", $settings);

    return $settings;
}

function get_picture($path = "", $picture = "", $resolution = "50x50"){


    if($picture != ""){

        if(file_exists(FCPATH . "panel/uploads/$path/$resolution/$picture")){
            $picture = base_url("panel/uploads/$path/$resolution/$picture");
        } else {
            $picture = base_url("assets/images/default_image.png");

        }

    } else {

        $picture = base_url("assets/images/default_image.png");

    }

    return $picture;

}

function get_popup_service($page = ""){

    $t = &get_instance();

    $t->load->model("popup_model");
    $popup = $t->popup_model->get(
        array(
            "isActive"  => 1,
            "page"      => $page
        )
    );

    return (!empty($popup)) ? $popup : false;

}

function get_user() {
    $t = &get_instance();
    $user = $t->session->userdata("user");
    if ($user)
        return $user;
    else
        return false;
}

function findAnswerByQuestion($id) {
    $t = &get_instance();
    $t->load->model("answers_m");
    return $t->answers_m->get_all(array("question_id" => $id));
}

function findAnswerIdCorrect($id) {
    $t = &get_instance();
    $t->load->model("answers_m");
    return $t->answers_m->answer_control(array("question_id" => $id, "correct" => 1));
}