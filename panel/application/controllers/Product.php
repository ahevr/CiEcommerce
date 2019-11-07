<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public $viewFolder="";

    public function __construct()
    {
        parent::__construct();

        $this->viewFolder = "product_v";
        $this->load->model("product_model");
        $this->load->model("product_image_model");

        if(!get_active_user()){
            redirect(base_url("login"));
        }
    }

    public function index()
    {
        $viewData = new stdClass();

        $items = $this->product_model->get_all();

        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";
        $viewData->items = $items;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function new_form(){

        $viewData = new stdClass();

        $viewData->categories   = $this->db->get("categories")->result();
        $viewData->stock_status = $this->db->get("stock")->result();

        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function save()
    {

        $this->load->library("form_validation");

        $this->form_validation->set_rules("product_name", "Ürün Adı", "required|trim");
        $this->form_validation->set_rules("price", "Fiyat", "required|trim");
        $this->form_validation->set_rules("bulb_id", "Ampül Sayısı", "required|trim");
      //  $this->form_validation->set_rules("category", "Kategori", "required|trim");
        $this->form_validation->set_rules("color_id", "Renk", "required|trim");
        $this->form_validation->set_rules("usage_area_id", "Kullanım Alanı", "required|trim");
        $this->form_validation->set_rules("material_id", "Malzeme", "required|trim");
        $this->form_validation->set_rules("description", "Açıklama", "required|trim");
        $this->form_validation->set_rules("stock_code", "Stok Kodu", "required|trim");
        $this->form_validation->set_rules("stock_status_id", "Stok Durumu", "required|trim");
        $this->form_validation->set_rules("depo", "Stok Adeti", "required|trim");

        $this->form_validation->set_message(
            array(
                "required" => "<b>{field}</b>  Alanını Lütfen Doldurun !!"
            )
        );

        $validate = $this->form_validation->run();


        if ($validate) {

            $insert = $this->product_model->add(
                array(
                    "product_name"  => $this->input->post("product_name"),
                    "price"         => $this->input->post("price"),
                    "categories_id"         => $this->input->post("categories_id"),
                    "discounted_rate" => $this->input->post("discounted_rate"),
                    "discounted_price"=> $this->input->post("discounted_price"),
                    "bulb_id"          => $this->input->post("bulb_id"),
                   // "category"      => $this->input->post("category"),
                    "color_id"         => $this->input->post("color_id"),
                    "usage_area_id"    => $this->input->post("usage_area_id"),
                    "material_id"      => $this->input->post("material_id"),
                    "description"   => $this->input->post("description"),
                    "stock_code"    => $this->input->post("stock_code"),
                    "stock_status_id"  => $this->input->post("stock_status_id"),
                    "depo"          => $this->input->post("depo"),
                    "width"         => $this->input->post("width"),
                    "height"        => $this->input->post("height"),
                    "length"        => $this->input->post("length"),
                    "url"           => convertToSEO($this->input->post("product_name")),
                    "isActive"      => 1,
                    "createdAt"     => date("Y-m-d H:i:s")
                )
            );

            if ($insert) {

                $alert = array(
                    "title"  => "Kayıt İşlemi Başarılı",
                    "text" => "Kayıt Başarılı Bir Şekilde Eklenmiştir",
                    "type"  => "success"
                );
            } else {
                $alert = array(
                    "title"  => "Kayıt İşlemi Başarısız",
                    "text" => "Kayıt İşlemi Yapılırken Bir Hata Oluştu",
                    "type"  => "error"
                );
            }

            $this->session->set_flashdata("alert",$alert);

            redirect(base_url("product"));

        } else {

            $viewData = new stdClass();

            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "add";
            $viewData->form_error = true;

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }
    }

    public function isActiveSetter(){

        $id       = $this->input->post("id");
        $isActive = ($this->input->post("isActive") == "true") ? 1 : 0 ;

        $update =  $this->db->where("id",$id)->update("products",array("isActive"=>$isActive));
        echo $update;
    }

    public function update_form($id){

        $viewData = new stdClass();

        $item = $this->product_model->get(
            array(
                "id"     => $id,
            )
        );

        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";
        $viewData->item = $item;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function update($id)
    {

        $this->load->library("form_validation");

        $this->form_validation->set_rules("product_name", "Ürün Adı", "required|trim");
        $this->form_validation->set_rules("price", "Fiyat", "required|trim");
        $this->form_validation->set_rules("bulb", "Ampül Sayısı", "required|trim");
        $this->form_validation->set_rules("category", "Kategori", "required|trim");
        $this->form_validation->set_rules("color", "Renk", "required|trim");
        $this->form_validation->set_rules("usage_area", "Kullanım Alanı", "required|trim");
        $this->form_validation->set_rules("material", "Malzeme", "required|trim");
        $this->form_validation->set_rules("description", "Açıklama", "required|trim");
        $this->form_validation->set_rules("stock_code", "Stok Kodu", "required|trim");
        $this->form_validation->set_rules("stock_status", "Stok Durumu", "required|trim");
        $this->form_validation->set_rules("depo", "Stok Adeti", "required|trim");

        $this->form_validation->set_message(
            array(
                "required" => "<b>{field}</b>  Alanını Lütfen Doldurun !!"
            )
        );

        $validate = $this->form_validation->run();


        if ($validate) {

            $update = $this->product_model->update(
                array(
                    "id" => $id
                ),
                array(
                    "product_name"  => $this->input->post("product_name"),
                    "price"         => $this->input->post("price"),
                    "discounted_rate"         => $this->input->post("discounted_rate"),
                    "discounted_price"=> $this->input->post("discounted_price"),
                    "bulb"          => $this->input->post("bulb"),
                    "category"      => $this->input->post("category"),
                    "color"         => $this->input->post("color"),
                    "usage_area"    => $this->input->post("usage_area"),
                    "material"      => $this->input->post("material"),
                    "description"   => $this->input->post("description"),
                    "stock_code"    => $this->input->post("stock_code"),
                    "stock_status"  => $this->input->post("stock_status"),
                    "depo"          => $this->input->post("depo"),
                    "width"         => $this->input->post("width"),
                    "height"        => $this->input->post("height"),
                    "length"        => $this->input->post("length"),
                    "url"           => convertToSEO($this->input->post("product_name"))
                )
            );

            if ($update) {

                redirect(base_url("product"));

            } else {

                redirect(base_url("product"));

            }

        } else {

            $viewData = new stdClass();

            $item = $this->product_model->get(
                array(
                    "id"    => $id,

                )
            );

            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "update";
            $viewData->form_error = true;
            $viewData->item = $item;

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }
    }

    public function delete($id){

        $delete = $this->product_model->delete(
            array(
                "id"    => $id
            )
        );

        if ($delete){
            redirect(base_url("product"));
        } else {
            redirect(base_url("product"));
        }

    }

    public function view_form($id){



        $viewData = new stdClass();

        $item = $this->product_model->get(
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

        $viewData->item= $this->product_model->get(
            array(
                "id"        => $id
            )
        );

        $viewData->item_images = $this->product_image_model->get_all(
            array(
                "product_id"    => $id
            )
        );

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function image_upload($id){

        $file_name = convertToSEO(pathinfo($_FILES["file"]["name"], PATHINFO_FILENAME)) . "." . pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);

        $image_600x800 = upload_pictures($_FILES["file"]["tmp_name"],"uploads/$this->viewFolder",600,800, $file_name);

        if ($image_600x800){

            $this->product_image_model->add(
                array(
                    "img_url" => $file_name,
                    "product_id" => $id,
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

        $viewData->item_images = $this->product_image_model->get_all(
            array(
                "product_id"    => $id
            )
        );

        $render_html = $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/render_elements/image_list_v", $viewData,true);
        echo $render_html;
    }

    public function imageDelete($id,$parent_id){

        $delete = $this->product_image_model->delete(
            array(
                "id"    => $id
            )
        );

        if ($delete){
            redirect(base_url("product/image_form/$parent_id"));
        } else {
            redirect(base_url("product/image_form/$parent_id"));
        }

    }





}
