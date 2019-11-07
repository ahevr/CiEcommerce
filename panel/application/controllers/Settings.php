<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

    public $viewFolder="";

    public function __construct()
    {
        parent::__construct();

        $this->viewFolder = "settings_v";
        $this->load->model("settings_model");

        if(!get_active_user()){
            redirect(base_url("login"));
        }
    }

    public function index()
    {
        $viewData = new stdClass();

        $item = $this->settings_model->get();

        $viewData->viewFolder = $this->viewFolder;
        if ($item){
            $viewData->subViewFolder = "update";
        } else {
            $viewData->subViewFolder = "no_content";
        }
        $viewData->item = $item;

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

        $this->form_validation->set_rules("company_name", "Şirket Adı", "required|trim");

        $this->form_validation->set_message(
            array(
                "required"     => "<b>{field}</b> alanı doldurulmalıdır",
                "valid_email"  => "Lütfen geçerli bir <b>{field}</b> giriniz"
            )
        );

        // Form Validation Calistirilir..
        $validate = $this->form_validation->run();

        if($validate){


            // Upload Süreci...

            $insert = $this->settings_model->add(
                array(
                    "company_name"  => $this->input->post("company_name"),
                    "phone"         => $this->input->post("phone"),
                    "fax"           => $this->input->post("fax"),
                    "adress"        => $this->input->post("adress"),
                    "about_us"      => $this->input->post("about_us"),
                    "mission"       => $this->input->post("mission"),
                    "vision"        => $this->input->post("vision"),
                    "email"         => $this->input->post("email"),
                    "facebook"      => $this->input->post("facebook"),
                    "twitter"       => $this->input->post("twitter"),
                    "instagram"     => $this->input->post("instagram"),
                    "linkedin"      => $this->input->post("linkedin"),
                    "createdAt"     => date("Y-m-d H:i:s")
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





            // İşlemin Sonucunu Session'a yazma işlemi...
            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("settings"));

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

        $update =  $this->db->where("id",$id)->update("settings",array("isActive"=>$isActive));
        echo $update;

    }

    public function update_form($id){

        $viewData = new stdClass();

        $item = $this->settings_model->get(
            array(
                "id"     => $id,
            )
        );

        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";
        $viewData->item = $item;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function password_form($id){

        $viewData = new stdClass();

        $item = $this->settings_model->get(
            array(
                "id"     => $id,
            )
        );

        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "password";
        $viewData->item = $item;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function update_password($id){

        $this->load->library("form_validation");


        // Kurallar yazilir..

        $this->form_validation->set_rules("password"   ,      "Şifre"             , "required|trim");


        $this->form_validation->set_message(
            array(
                "required"      => "<b>{field}</b> alanı doldurulmalıdır"
            )
        );


        // Form Validation Calistirilir..

        $validate = $this->form_validation->run();

        if($validate){


            // Upload Süreci...


            $update = $this->settings_model->update
            (array("id" => $id),
                array(
                    "password"                 => md5($this->input->post("password"))
                )
            );

            if($update){

                $alert = array(
                    "title" => "İşlem Başarılı",
                    "text" => "Şifreniz başarılı bir şekilde güncellendi",
                    "type"  => "success"
                );

            } else {

                $alert = array(
                    "title" => "İşlem Başarısız",
                    "text" => "Şifreniz Güncelleme sırasında bir problem oluştu",
                    "type"  => "error"
                );
            }

            // İşlemin Sonucunu Session'a yazma işlemi...
            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("settings"));

        } else {

            $viewData = new stdClass();

            /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "password";
            $viewData->form_error = true;

            /** Tablodan Verilerin Getirilmesi.. */
            $viewData->item = $this->settings_model->get(
                array(
                    "id"    => $id,
                )
            );

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }

    }

    public function update($id){

        $this->load->library("form_validation");

        $oldUser = $this->settings_model->get(
            array(
                "id"      => $id
            )
        );

        if ($oldUser->user_name != $this->input->post("user_name")){
            $this->form_validation->set_rules("user_name"  ,      "Kullanıcı Adı"     , "required|trim|is_unique[users.user_name]");
        }

        if ($oldUser->email != $this->input->post("email")){
            $this->form_validation->set_rules("email"      ,      "Email"             , "required|trim|valid_email|is_unique[users.email]");
        }

        // Kurallar yazilir..


        $this->form_validation->set_rules("full_name"  ,      "Ad Soyad"          , "required|trim");

        $this->form_validation->set_message(
            array(
                "required"      => "<b>{field}</b> alanı doldurulmalıdır",
                "valid_email"   => "Lütfen Geçerli Bir E-posta Adresi Giriniz",
                "is_unique"     => "<b>{field}     </b>   alanı kullanılmış"
            )
        );

        // Form Validation Calistirilir..

        $validate = $this->form_validation->run();

        if($validate){


            // Upload Süreci...


            $update = $this->settings_model->update
            (array("id" => $id),
                array(
                    "user_name"                 => $this->input->post("user_name"),
                    "full_name"                 => $this->input->post("full_name"),
                    "email"                     => $this->input->post("email")
                )
            );

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

            redirect(base_url("settings"));

        } else {

            $viewData = new stdClass();

            /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "update";
            $viewData->form_error = true;

            /** Tablodan Verilerin Getirilmesi.. */
            $viewData->item = $this->settings_model->get(
                array(
                    "id"    => $id,
                )
            );

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }

    }

    public function delete($id){

        $delete = $this->settings_model->delete(
            array(
                "id"    => $id
            )
        );

        if ($delete){
            redirect(base_url("settings"));
        } else {
            redirect(base_url("settings"));
        }

    }

    public function view_form($id){



        $viewData = new stdClass();

        $item = $this->settings_model->get(
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
