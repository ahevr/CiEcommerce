<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slides extends CI_Controller {

    public $viewFolder="";

    public function __construct()
    {
        parent::__construct();

        $this->viewFolder = "slides_v";
        
        $this->load->model("slide_model");

        if(!get_active_user()){
            redirect(base_url("login"));
        }
    }

    public function index()
    {
        $viewData = new stdClass();

        $items = $this->slide_model->get_all();

        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";
        $viewData->items = $items;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function new_form(){

        $viewData = new stdClass();

        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function save(){

        $this->load->library("form_validation");

        // Kurallar yazilir..
        if($_FILES["img_url"]["name"] == ""){

            $alert = array(
                "title" => "İşlem Başarısız",
                "text" => "Lütfen bir görsel seçiniz",
                "type"  => "error"
            );

            // İşlemin Sonucunu Session'a yazma işlemi...
            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("slides/new_form"));

            die();
        }


        $this->form_validation->set_rules("title", "Başlık", "required|trim");

        $this->form_validation->set_message(
            array(
                "required"  => "<b>{field}</b> alanı doldurulmalıdır"
            )
        );

        // Form Validation Calistirilir..
        $validate = $this->form_validation->run();

        if($validate){


            // Upload Süreci...

            $file_name = convertToSEO(pathinfo($_FILES["img_url"]["name"], PATHINFO_FILENAME)) . "." . pathinfo($_FILES["img_url"]["name"], PATHINFO_EXTENSION);

            $config["allowed_types"] = "jpg|jpeg|png";
            $config["upload_path"]   = "uploads/$this->viewFolder/";
            $config["file_name"] = $file_name;

            $this->load->library("upload", $config);

            $upload = $this->upload->do_upload("img_url");

            if($upload){

                $uploaded_file = $this->upload->data("file_name");

                $insert = $this->slide_model->add(
                    array(
                        "title"                 => $this->input->post("title"),
                        "description"           => $this->input->post("description"),
                        "img_url"               => $uploaded_file
                    )
                );

                // TODO Alert sistemi eklenecek...
                if($insert){

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

            } else {

                $alert = array(
                    "title" => "İşlem Başarısız",
                    "text" => "Görsel yüklenirken bir problem oluştu",
                    "type"  => "error"
                );

                $this->session->set_flashdata("alert", $alert);

                redirect(base_url("slides/new_form"));

                die();

            }



            // İşlemin Sonucunu Session'a yazma işlemi...
            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("slides"));

        } else {

            $viewData = new stdClass();

            /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "add";
            $viewData->form_error = true;

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }

    }

    public function isActiveSetter(){

        $id       = $this->input->post("id");
        $isActive = ($this->input->post("isActive") == "true") ? 1 : 0 ;

        $update =  $this->db->where("id",$id)->update("slides",array("isActive"=>$isActive));
        echo $update;

    }

    public function update_form($id){

        $viewData = new stdClass();

        $item = $this->slide_model->get(
            array(
                "id"     => $id,
            )
        );

        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";
        $viewData->item = $item;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function update($id){

        $this->load->library("form_validation");

        // Kurallar yazilir..

        $slides_type = $this->input->post("slides_type");

        if($slides_type == "video"){

            $this->form_validation->set_rules("video_url", "Video URL", "required|trim");

        }

        $this->form_validation->set_rules("title", "Başlık", "required|trim");

        $this->form_validation->set_message(
            array(
                "required"  => "<b>{field}</b> alanı doldurulmalıdır"
            )
        );

        // Form Validation Calistirilir..
        $validate = $this->form_validation->run();

        if($validate){

            if($slides_type == "image"){

                // Upload Süreci...


                if($_FILES["img_url"]["name"] !== "") {

                    $file_name = convertToSEO(pathinfo($_FILES["img_url"]["name"], PATHINFO_FILENAME)) . "." . pathinfo($_FILES["img_url"]["name"], PATHINFO_EXTENSION);

                    $config["allowed_types"] = "jpg|jpeg|png";
                    $config["upload_path"] = "uploads/$this->viewFolder/";
                    $config["file_name"] = $file_name;

                    $this->load->library("upload", $config);

                    $upload = $this->upload->do_upload("img_url");

                    if ($upload) {

                        $uploaded_file = $this->upload->data("file_name");

                        $data = array(
                            "title" => $this->input->post("title"),
                            "description" => $this->input->post("description"),
                            "url" => convertToSEO($this->input->post("title")),
                            "slides_type" => $slides_type,
                            "img_url" => $uploaded_file,
                            "video_url" => "#",
                        );

                    } else {

                        $alert = array(
                            "title" => "İşlem Başarısız",
                            "text" => "Görsel yüklenirken bir problem oluştu",
                            "type" => "error"
                        );

                        $this->session->set_flashdata("alert", $alert);

                        redirect(base_url("slides/update_form/$id"));

                        die();

                    }

                } else {

                    $data = array(
                        "title" => $this->input->post("title"),
                        "description" => $this->input->post("description"),
                        "url" => convertToSEO($this->input->post("title")),
                    );

                }

            } else if($slides_type == "video"){

                $data = array(
                    "title"         => $this->input->post("title"),
                    "description"   => $this->input->post("description"),
                    "url"           => convertToSEO($this->input->post("title")),
                    "slides_type"     => $slides_type,
                    "img_url"       => "#",
                    "video_url"     => $this->input->post("video_url")
                );

            }

            if (isset($data)) {
                $update = $this->slide_model->update(array("id" => $id), $data);
            }

            // TODO Alert sistemi eklenecek...
            if($update){

                $alert = array(
                    "title" => "İşlem Başarılı",
                    "text" => "Kayıt başarılı bir şekilde güncellendi",
                    "type"  => "success"
                );

            } else {

                $alert = array(
                    "title" => "İşlem Başarısız",
                    "text" => "Kayıt Güncelleme sırasında bir problem oluştu",
                    "type"  => "error"
                );
            }

            // İşlemin Sonucunu Session'a yazma işlemi...
            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("slides"));

        } else {

            $viewData = new stdClass();

            /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "update";
            $viewData->form_error = true;
            $viewData->slides_type = $slides_type;

            /** Tablodan Verilerin Getirilmesi.. */
            $viewData->item = $this->slide_model->get(
                array(
                    "id"    => $id,
                )
            );

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }

    }

    public function delete($id){

        $delete = $this->slide_model->delete(
            array(
                "id"    => $id
            )
        );

        if ($delete){
            redirect(base_url("slides"));
        } else {
            redirect(base_url("slides"));
        }

    }

    public function view_form($id){



        $viewData = new stdClass();

        $item = $this->slide_model->get(
            array(
                "id"    => $id
            )
        );

        /** view gönderileceklerin ekrana basılması */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "view";
        $viewData->item = $item;

        $this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index",$viewData);
    }

    public function image_form($id){

        $viewData = new stdClass();

        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "image";

        $viewData->item= $this->slide_model->get(
            array(
                "id"        => $id
            )
        );

        $viewData->item_images = $this->slides_image_model->get_all(
            array(
                "slides_id"    => $id
            )
        );

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function image_upload($id){

        $config["allowed_types"]    = "jpg|jpeg|png";
        $config["upload_path"]      = "uploads/$this->viewFolder/";

        $this->load->library("upload",$config);

        $upload = $this->upload->do_upload("file");

        if ($upload){

            $uploaded_file = $this->upload->data("file_name");

            $this->slides_image_model->add(
                array(
                    "img_url" => $uploaded_file,
                    "slides_id" => $id,
                    "createdAt" => date("Y-m-d H:i:s")
                )
            );

        }else{
            echo "işlem başarısız";
        }

    }

    public function refresh_image_list($id){

        $viewData = new stdClass();

        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "image";

        $viewData->item_images = $this->slides_image_model->get_all(
            array(
                "slides_id"    => $id
            )
        );

        $render_html = $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/render_elements/image_list_v", $viewData,true);
        echo $render_html;
    }

    public function imageDelete($id,$parent_id){

        $delete = $this->slides_image_model->delete(
            array(
                "id"    => $id
            )
        );

        if ($delete){
            redirect(base_url("slides/image_form/$parent_id"));
        } else {
            redirect(base_url("slides/image_form/$parent_id"));
        }

    }





}
