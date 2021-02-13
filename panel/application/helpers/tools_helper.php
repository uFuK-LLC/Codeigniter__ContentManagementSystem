<?php

function convertToSEO($text)
{

    $turkish = array("ç", "Ç", "ğ", "Ğ", "ü", "Ü", "ö", "Ö", "ı", "İ", "ş", "Ş", ".", ",", "!", "'", "\"", " ", "?", "*", "_", "|", "=", "(", ")", "[", "]", "{", "}");
    $convert = array("c", "c", "g", "g", "u", "u", "o", "o", "i", "i", "s", "s", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-");

    return strtolower(str_replace($turkish, $convert, $text));

}

function get_exam($id)
{
	$t = &get_instance();

	$t->load->model("exam_m");

	return $t->exam_m->get(array("id" => $id));

}

function get_exams() 
{
	$t = &get_instance();

	$t->load->model("exam_m");

	return $t->exam_m->get_all();
}

function get_lesson($id)
{
	$t = &get_instance();

	$t->load->model("lesson_m");

	return $t->lesson_m->get(array("id" => $id));
}

function get_lessons() 
{
	$t = &get_instance();

	$t->load->model("lesson_m");

	return $t->lesson_m->get_all();
}

function upload_picture($file, $uploadPath, $width, $height, $name){

    $t = &get_instance();
    $t->load->library("simpleimagelib");


    if(!is_dir("{$uploadPath}/{$width}x{$height}")){
        mkdir("{$uploadPath}/{$width}x{$height}");
    }

    $upload_error = false;
    try {

        $simpleImage = $t->simpleimagelib->get_simple_image_instance();

        $simpleImage
            ->fromFile($file)
            ->thumbnail($width,$height,'center')
            ->toFile("{$uploadPath}/{$width}x{$height}/$name", null, 75);

    } catch(Exception $err) {
        $error =  $err->getMessage();
        $upload_error = true;
    }

    if($upload_error){
        echo $error;
    } else {
        return true;
    }


}

function get_picture($path = "", $picture = "", $resolution = "50x50"){

    if($picture != ""){

        if(file_exists(FCPATH . "uploads/$path/$resolution/$picture")){
            $picture = base_url("uploads/$path/$resolution/$picture");
        } else {
            $picture = base_url("assets/images/default_image.png");

        }

    } else {

        $picture = base_url("assets/images/default_image.png");

    }

    return $picture;

}

function get_page_list($page){

    $page_list = array(
        "home_v"     => "Ana Sayfa",
        "about_v"    => "Hakkımızda Sayfası",
        "contact_v"  => "İletişim Sayfası",
    );


    return (empty($page)) ? $page_list : $page_list[$page];
}
