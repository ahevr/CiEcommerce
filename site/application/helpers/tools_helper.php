<?php

function get_product_cover_image($product_id){

    $t = &get_instance();

    $t->load->model("product_image_model");

    $cover_image = $t->product_image_model->get(
        array(
            "product_id" => $product_id
        )
    );

    if (empty($cover_image)){
        $cover_image = $t->product_image_model->get(
            array(
                "product_id" => $product_id
            )
        );
    }

    return !empty($cover_image) ? $cover_image->img_url : "";



}

function get_settings(){

    $t= &get_instance();

    $settings = $t->session->userdata("settings");

    if (empty($settings)){
        $t->load->model("settings_model");

        $settings = $t->settings_model->get();

        $t->session->set_userdata("settings",$settings);
    }
    return $settings;


}

function get_picture($path = "" , $picture = "" ,$resolution = "600x800" ){

    if ($picture != ""){

        if (file_exists(FCPATH."uploads/$path/$resolution/$picture")){

            $picture = base_url("uploads/$path/$resolution/$picture");
        }else{
            $picture = base_url("assets/dist/img/default_image.png");
        }

    } else {

        $picture = base_url("assets/dist/img/default_image.png");

    }

    return $picture;

}

function get_id_by_url($url = ""){

    $t = &get_instance();
    $t->load->model("catalog_model");

    $gallery = $t->catalog_model->get(
        array(
            "isActive"  => 1,
            "url"       => $url
        )
    );

    return ($gallery) ? $gallery : false;

}

function get_popup_service($page = ""){

     $t = &get_instance();
     $t->load->model("popup_model");
     $popup = $t->popup_model->get(
        array(
            "isActive" => 1,
            "page" => $page
        )
    );

    return (!empty($popup)) ? $popup : false ;

}