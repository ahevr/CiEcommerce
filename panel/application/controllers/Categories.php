<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

    public $viewFolder="";

    public function __construct()
    {
        parent::__construct();

        $this->viewFolder = "categories_v";
        $this->load->model("category_model");

        if(!get_active_user()){
            redirect(base_url("login"));
        }
    }

    public function index()
    {
        $viewData = new stdClass();

        $items = $this->category_model->get_all();

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

        $this->form_validation->set_rules("category_name", "Başlık", "required|trim");

        $this->form_validation->set_message(
            array(
                "required"  => "<b>{field}</b> alanı doldurulmalıdır"
            )
        );
        // Form Validation run biç..
        $validate = $this->form_validation->run();

        if($validate){


            // Upload Süreci...

            $file_name = convertToSEO(pathinfo($_FILES["img_url"]["name"], PATHINFO_FILENAME)) . "." . pathinfo($_FILES["img_url"]["name"], PATHINFO_EXTENSION);
            $image_600x800 = upload_pictures($_FILES["img_url"]["tmp_name"],"uploads/$this->viewFolder",600,800, $file_name);


            if($image_600x800){

                $insert = $this->category_model->add(
                    array(
                        "category_name"         => $this->input->post("category_name"),
                        "url"                   => convertToSEO($this->input->post("category_name")),
                        "img_url"               => $file_name,
                        "isActive"              => 1,
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

                redirect(base_url("categories/new_form"));

                die();

            }



            // İşlemin Sonucunu Session'a yazma işlemi...
            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("categories"));

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

        $update =  $this->db->where("id",$id)->update("categories",array("isActive"=>$isActive));
        echo $update;

    }

    public function delete($id){

        $delete = $this->category_model->delete(
            array(
                "id"    => $id
            )
        );

        if ($delete){
            redirect(base_url("categories"));
        } else {
            redirect(base_url("categories"));
        }

    }

    public function view_form($id){



        $viewData = new stdClass();

        $item = $this->category_model->get(
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

        $viewData->item= $this->category_model->get(
            array(
                "id"        => $id
            )
        );

        $viewData->item_images = $this->categories_image_model->get_all(
            array(
                "categories_id"    => $id
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

            $this->categories_image_model->add(
                array(
                    "img_url" => $uploaded_file,
                    "categories_id" => $id,
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

        $viewData->item_images = $this->categories_image_model->get_all(
            array(
                "categories_id"    => $id
            )
        );

        $render_html = $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/render_elements/image_list_v", $viewData,true);
        echo $render_html;
    }

    public function imageDelete($id,$parent_id){

        $delete = $this->categories_image_model->delete(
            array(
                "id"    => $id
            )
        );

        if ($delete){
            redirect(base_url("categories/image_form/$parent_id"));
        } else {
            redirect(base_url("categories/image_form/$parent_id"));
        }

    }





}
