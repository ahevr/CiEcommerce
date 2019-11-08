<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bulbs extends CI_Controller {

    public $viewFolder="";

    public function __construct()
    {
        parent::__construct();

        $this->viewFolder = "bulb_v";
        $this->load->model("bulb_model");

        if(!get_active_user()){
            redirect(base_url("login"));
        }
    }

    public function index()
    {
        $viewData = new stdClass();

        $items = $this->bulb_model->get_all();

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

        $this->form_validation->set_rules("bulb_name", "Ampül", "required|trim");

        $this->form_validation->set_message(
            array(
                "required" => "<b>{field}</b>  Alanını Lütfen Doldurun !!"
            )
        );

        // Form Validation Calistirilir..
        $validate = $this->form_validation->run();

        if($validate){


            // Upload Süreci...

            $insert = $this->bulb_model->add(
                array(
                    "bulb_name" => $this->input->post("bulb_name"),
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

            redirect(base_url("stocks"));

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

    public function update_form($id){

        $viewData = new stdClass();

        $item = $this->bulb_model->get(
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

        $this->form_validation->set_rules("bulb_name", "Ampül", "required");

        $this->form_validation->set_message(
            array(
                "required" => "<b>{field}</b>  Alanını Lütfen Doldurun !!"
            )
        );

        $validate = $this->form_validation->run();


        if ($validate) {

            $update = $this->bulb_model->update(
                array(
                    "id" => $id
                ),
                array(
                    "bulb_name"  => $this->input->post("bulb_name"),
                )
            );

            if ($update) {

                redirect(base_url("bulbs"));

            } else {

                redirect(base_url("bulbs"));

            }

        } else {

            $viewData = new stdClass();

            $item = $this->bulb_model->get(
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

        $delete = $this->bulb_model->delete(
            array(
                "id"    => $id
            )
        );

        if ($delete){
            redirect(base_url("bulb"));
        } else {
            redirect(base_url("bulb"));
        }

    }

    public function view_form($id){



        $viewData = new stdClass();

        $item = $this->bulb_model->get(
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
