<?php
function convertToSEO($text){
    $turkce  = array("ç", "Ç", "ğ", "Ğ", "ü", "Ü", "ö", "Ö", "ı", "İ", "ş", "Ş", ".", ",", "!", "'", "\"", " ", "?", "*", "_", "|", "=", "(", ")", "[", "]", "{", "}");
    $convert = array("c", "c", "g", "g", "u", "u", "o", "o", "i", "i", "s", "s", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-");
    return strtolower(str_replace($turkce,$convert,$text));
}
function get_active_user(){
    $t = &get_instance();

    $user = $t->session->userdata("user");

    if ($user)
        return $user;
    else
        return false;


}
function send_email($toEmail = "", $subject = "", $message = ""){

    $t = &get_instance();

    $t->load->model("emailsettings_model");

    $email_settings = $t->emailsettings_model->get(
        array(
            "isActive"  => 1
        )
    );

    if(empty($toEmail))
        $toEmail = $email_settings->to;

    $config = array(

        "protocol"   => $email_settings->protocol,
        "smtp_host"  => $email_settings->host,
        "smtp_port"  => $email_settings->port,
        "smtp_user"  => $email_settings->user,
        "smtp_pass"  => $email_settings->password,
        "starttls"   => true,
        "charset"    => "utf-8",
        "mailtype"   => "html",
        "wordwrap"   => true,
        "newline"    => "\r\n"
    );

    $t->load->library("email", $config);

    $t->email->from($email_settings->from, $email_settings->user_name);
    $t->email->to($toEmail);
    $t->email->subject($subject);
    $t->email->message($message);

    return $t->email->send();

}
function get_page_list(){
    return array(
        "home_v"=> "Anasayfa",
    );

}
function upload_pictures($file,$uploadPath,$width,$height,$name){

    $t = &get_instance();

    $t->load->library("simpleimagelib");


    if (!is_dir("{$uploadPath}/{$width}x{$height}")){
        mkdir("{$uploadPath}/{$width}x{$height}");
    }

    $upload_error = false;
    try {
        // Create a new SimpleImage object
        $simpleImage = $t->simpleimagelib->get_simple_image_instance();

        // Magic! ✨
        $simpleImage
            ->fromFile($file)
            ->thumbnail($width, $height,'center')
            ->toFile("{$uploadPath}/{$width}x{$height}/$name",'image/png');

        // And much more! 💪
    } catch(Exception $err) {
        // Handle errors
        echo $err->getMessage();
        $upload_error = true;
    }
    if ($upload_error){
        echo $error;
    } else{
        return true;
    }



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

function get_category_name($id){

    $t = &get_instance();

    $title = $t->db
        ->where("id",$id)
        ->get("categories")
        ->row()
        ->category_name;

    return $title;
}
function get_stock_status($id){

    $t = &get_instance();

    $title = $t->db
        ->where("id",$id)
        ->get("stock")
        ->row()
        ->stok_name;

    return $title;
}
function get_bulb($id){

    $t = &get_instance();

    $title = $t->db
        ->where("id",$id)
        ->get("bulb")
        ->row()
        ->bulb_name;
    return $title;
}
function get_material_name($id){

    $t = &get_instance();

    $title = $t->db
        ->where("id",$id)
        ->get("materials")
        ->row()
        ->material_name;
    return $title;
}
function get_color_name($id){

    $t = &get_instance();

    $title = $t->db
        ->where("id",$id)
        ->get("colors")
        ->row()
        ->color_name;
    return $title;
}
function get_usage_area($id){

    $t = &get_instance();

    $title = $t->db
        ->where("id",$id)
        ->get("usage_area")
        ->row()
        ->area_name;
    return $title;
}



