<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materials extends CI_Controller {

    public $viewFolder="";

    public function __construct()
    {
        parent::__construct();

        $this->viewFolder = "material_v";
        $this->load->model("material_model");

        if(!get_active_user()){
            redirect(base_url("login"));
        }
    }

    public function index()
    {
        $viewData = new stdClass();

        $items = $this->material_model->get_all();

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

        $this->form_validation->set_rules("material_name", "Stok", "required|trim");

        $this->form_validation->set_message(
            array(
                "required" => "<b>{field}</b>  Alanını Lütfen Doldurun !!"
            )
        );

        // Form Validation Calistirilir..
        $validate = $this->form_validation->run();

        if($validate){


            // Upload Süreci...

            $insert = $this->material_model->add(
                array(
                    "material_name" => $this->input->post("material_name"),
                    "isActive"  => 1,
                )
            );

            if($insert){

                $alert = array(
                    "title" => "İşlem Başarılı",
                    "text"  => "Kayıt başarılı bir şekilde eklendi",
                    "type"  => "success"
                );

            } else {

                $alert = array(
                    "title" => "İşlem Başarısız",
                    "text"  => "Kayıt Ekleme sırasında bir problem oluştu",
                    "type"  => "error"
                );
            }

            // İşlemin Sonucunu Session'a yazma işlemi...
            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("materials"));

            die();

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

        $update =  $this->db->where("id",$id)->update("materials",array("isActive"=>$isActive));
        echo $update;

    }

    public function update_form($id){

        $viewData = new stdClass();

        $item = $this->material_model->get(
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

        $this->form_validation->set_rules("material_name", "Stok", "required");

        $this->form_validation->set_message(
            array(
                "required" => "<b>{field}</b>  Alanını Lütfen Doldurun !!"
            )
        );

        $validate = $this->form_validation->run();


        if ($validate) {

            $update = $this->material_model->update(
                array(
                    "id" => $id
                ),
                array(
                    "material_name"  => $this->input->post("material_name"),
                )
            );

            if ($update) {

                redirect(base_url("materials"));

            } else {

                redirect(base_url("materials"));

            }

        } else {

            $viewData = new stdClass();

            $item = $this->material_model->get(
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

        $delete = $this->material_model->delete(
            array(
                "id"    => $id
            )
        );

        if ($delete){
            redirect(base_url("materials"));
        } else {
            redirect(base_url("materials"));
        }

    }

    public function view_form($id){



        $viewData = new stdClass();

        $item = $this->material_model->get(
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








}
