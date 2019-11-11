<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public $viewFolder = "";
     public function __construct()
     {
         parent::__construct();
         $this->viewFolder ="homepage";
     }

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

     /** index ve homepage işlemleri */
        public function index()
	{

        $viewData = new stdClass();


        $this->load->model("slide_model");

        $this->load->model("product_model");

        $this->load->model("category_model");

        $this->load->helper ("tools");


        $slides = $this->slide_model->get_all(
            array(
                "isActive"    => 1
            )
        );

        $viewData->products = $this->product_model->get_all(
            array(
                "isActive" => 1
            )
        );


        $categories = $this->category_model->get_all(
            array(
                "isActive"    => 1
            )
        );

        $viewData->kacurunvar = $this->sepet->sepette_ne_kadar_urun_var();


        $viewData->viewFolder = "home_v";

        $viewData->slides = $slides;

        $viewData->categories = $categories;

        $this->load->view($viewData->viewFolder,$viewData);



	}
    /** #index ve homepage işlemleri */

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    /** ürün listeleme sayfası */
	    public function product_list(){

         $viewData = new stdClass();

         $viewData->viewFolder = "product_list_v";

         $this->load->model("product_model");

         $this->load->model("category_model");

         $this->load->helper("text");


        $this->load->library("pagination");


        $config["base_url"] = base_url("home/product_list");
        $config["total_rows"] = $this->product_model->get_count();
        $config["uri_segment"] = 3;
        $config["per_page"] = 9;


        $this->pagination->initialize($config);


        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $viewData-> results = $this->product_model->get_records($config["per_page"],$page);

        $viewData->links = $this->pagination->create_links();


        $viewData->products = $this->product_model->get_all(
             array(
                 "isActive" => 1
            )
         );

        $viewData->categories   = $this->db->get("categories")->result();


        $viewData->kacurunvar = $this->sepet->sepette_ne_kadar_urun_var();

         $this->load->view($viewData->viewFolder,$viewData);

    }
    /** #ürün listeleme sayfası */

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    /**kategoriler sayfası*/

    public function getCategoryView($url){

        $this->load->model("category_model");
        $this->load->model("product_model");
        $this->load->model("ayar_model");

        $getCategory = $this->category_model->categoryList($url);

        $viewData = new stdClass();

        $viewData->viewFolder = "category_detail_v";

        $viewData->products     = $getCategory;
        $viewData->categories   = $this->db->get("categories")->result();

        $this->load->library("pagination");


        $config["base_url"] = base_url("home/product_list");
        $config["total_rows"] = $this->product_model->get_count();
        $config["uri_segment"] = 3;
        $config["per_page"] = 9;


        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $viewData-> results = $this->product_model->get_records($config["per_page"],$page);

        $viewData->links = $this->pagination->create_links();

        $viewData->urunlistesi = $this->ayar_model->getAll();
        $viewData->kacurunvar = $this->sepet->sepette_ne_kadar_urun_var();


        $this->load->view($viewData->viewFolder,$viewData);

    }

    /**#kategoriler sayfası*/

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    /** ürün detay sayfası */
        public function product_detail($url = ""){

        $viewData = new stdClass();
        $viewData->viewFolder = "product_v";

        $this->load->model("product_model");
        $this->load->model("ayar_model");
        $this->load->model("product_image_model");
        $this->load->model("category_model");




        $viewData->product = $this->product_model->get(
            array(
                "isActive" => 1,
                "url" => $url
            )
        );

        $viewData->product_images = $this->product_image_model->get_all(
            array(
                "product_id"    =>$viewData->product->id

            )
        );


        $viewData->products = $this->product_model->get_all(
            array(
                "isActive" => 1
            )
        );

        $viewData->categories = $this->category_model->get_all(
            array(
                "url" => $url,
                "isActive" => 1
            )
        );

        $viewData->urunlistesi = $this->ayar_model->getAll();
        $viewData->kacurunvar = $this->sepet->sepette_ne_kadar_urun_var();

        $this->load->view($viewData->viewFolder,$viewData);

    }
    /** #ürün detay sayfası */

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    /** hakkımızda bölümü */
        public function about_us(){

        $viewData = new stdClass();

        $viewData->viewFolder = "about_v";

        $this->load->model("settings_model");

        $viewData->settings = $this->settings_model->get();

        $viewData->kacurunvar = $this->sepet->sepette_ne_kadar_urun_var();

        $this->load->view($viewData->viewFolder,$viewData);
    }
    /** #hakkımızda bölümü */

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    /** iletişim bölümü */
        public function contact(){

            $viewData = new stdClass();
            $viewData->viewFolder = "contact_v";


            $this->load->helper("captcha");

            $config = array(

                "word"          => "",
                "img_path"      => "captcha/",
                "img_url"       => base_url("captcha"),
                "font_path"     => 'site/fonts/Audiowide-Regular.ttf',
                "img_width"     => 150,
                "img_height"    => 50,
                "expiration"    => 7200,
                "word_length"   => 5,
                "font_size"     => 20,
                "img_id"        => "captcha_img",
                "pool"          =>"0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ",
                "colors"        => array(
                    "background"=> array(64,255,45),
                    "border"    => array(255,255,255),
                    "text"      => array(0,0,0),
                    "grid"      => array(255,40,45)
                )
            );

            $viewData->captcha = create_captcha($config);

            $this->session->set_userdata("captcha",$viewData->captcha["word"]);

            $viewData->kacurunvar = $this->sepet->sepette_ne_kadar_urun_var();

            $this->load->view($viewData->viewFolder,$viewData);
        }
        public function send_contact_message(){

             $this->load->library("form_validation");

             $this->form_validation->set_rules("name","Ad","trim|required");
             $this->form_validation->set_rules("email","Eposta","trim|required");
             $this->form_validation->set_rules("message","Mesajınız","trim|required");
             $this->form_validation->set_rules("captcha","Doğrulama Kodu","trim|required");

             if ($this->form_validation->run() === FALSE ) {

                 redirect(base_url("iletisim"));


             } else {

                 if($this->session->userdata("captcha") == $this->input->post("captcha")){

                     $name = $this->input->post("name");
                     $email = $this->input->post("email");
                     $message = $this->input->post("message");

                     $email_message = "{$name} isimli ziyaretçi. Mesaj Bıraktı <br><b>Mesaj : </b> {$message} <br> <b>E-posta : </b> {$email}";

                     if(send_email("", "Site İletişim Mesajı", $email_message)){

                         echo "işlem başarılı";
                     } else {
                         echo "işlem başarısız";
                     }

                 } else {

                     // TODO Alert..

                     redirect(base_url("iletisim"));

                 }

             }
        }
    /** #iletişim bölümü */

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    /** homepage slider alanı */
        public function slider(){
        $viewData = new stdClass();
        $viewData->viewFolder = "home/slider";
        $this->load->model("slides_model");
        $viewData->slide = $this->slides_model->get_all(
            array(
                "isActive" => 1
            )
        );
        $this->load->view($viewData->viewFolder,$viewData);
    }
    /** #homepage slider alanı */

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    /** homepage kategoriler alanı */
    public function banner($url){

        $viewData = new stdClass();

        $viewData->viewFolder = "home/banner";

        $this->load->model("category_model");

        $this->load->helper("text");

        $viewData->categories = $this->category_model->get_all(
            array(
                "category_url" => $url,
                "isActive" => 1
            )
        );
        $this->load->view($viewData->viewFolder,$viewData);



    }
    /** #homepage kategoriler alanı */

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    /** kullanıcı login olma işlemleri */
        public function login(){
            $viewData = new stdClass();
            $viewData->viewFolder = "login_v";


            $this->load->view($viewData->viewFolder,$viewData);
        }
        public function do_login(){

            $this->load->model("member_model");

            $email = $this->input->post("email");
            $password = $this->input->post("password");

            $sonuc=$this->member_model->check_member($email,$password);

            if ($sonuc){

                $alert = array(
                    "title" => "İşlem Başarılı",
                    "text" => "Hoşgeldiniz",
                    "type"  => "success"
                );

            }else {

                $alert = array(
                    "title" => "İşlem Başarısız",
                    "text" => "Lütfen giriş bilgilerinizi kontrol ediniz",
                    "type" => "error"
                );
            }

                $this->session->set_flashdata("alert", $alert);

                redirect(base_url(""));

            }
        public function register(){

            $viewData = new stdClass();

            $viewData->viewFolder = $this->viewFolder;
            $viewData->viewFolder = "register_v";


            $this->load->view($viewData->viewFolder,$viewData);
        }
        public function do_register(){

            $this->load->library("form_validation");

            // Kurallar yazilir..

            $this->form_validation->set_rules("full_name", "AdSoyad", "required|trim");
            $this->form_validation->set_rules("email", "Eposta", "required|trim|valid_email");
            $this->form_validation->set_rules("password", "Şifre", "required|trim");

            $this->form_validation->set_message(
                array(
                    "required"      => "<b>{field}</b> alanı doldurulmalıdır",
                    "valid_email"   => "Lütfen geçerli bir eposta adresi giriniz",
                    "is_unique"     => "<b>{field}</b> alanı daha önceden kullanılmıştır",
                )
            );

            // Form Validation Calistirilir..
            if ($this->form_validation->run()){

                $full_name = $this->input->post("full_name");
                $email = $this->input->post("email");
                $password = $this->input->post("password");

                $data=array(
                    'full_name' =>$full_name,
                    'email'     =>$email,
                    'password'  =>md5($password),
                    "isActive"  => 1,
                    "createdAt" => date("Y-m-d H:i:s"));

                $this->load->model("member_model");

                $insert=$this->member_model->add($data,'members');

                if ($insert){

                    $this->session->set_flashdata('inf','Kayıt İşlemi Başarılı Lütfen Giriş Yapın');

                    redirect("giris-yap");
                }else{
                    echo "yanlış birşeyler yabtın gardaş";
                }

            } else {


                redirect(base_url(""));
            }




        }
    /** #kullanıcı login olma işlemleri */

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    /** #kataloglar bölümü */
        public function catalogs_list(){

        $viewData = new stdClass();
        $viewData->viewFolder = "catalogs_v";

        $this->load->model("catalogs_model");

        $viewData->catalogs = $this->catalogs_model->get_all(
            array(
                "isActive" => 1,
            )
        );

        $viewData->kacurunvar = $this->sepet->sepette_ne_kadar_urun_var();

        $this->load->view($viewData->viewFolder,$viewData);
    }
        public function catalog_detail($url = ""){

        $viewData = new stdClass();

        $viewData->viewFolder = "catalog_detail_v";

        $this->load->model("catalogs_model");

        $viewData->catalogin = $this->catalogs_model->get_all(
            array(
                "isActive" => 1,
                "url" => $url
            )
        );
        $viewData->kacurunvar = $this->sepet->sepette_ne_kadar_urun_var();

        $this->load->view($viewData->viewFolder,$viewData);
    }
    /** #kataloglar bölümü */

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    /** #ürünarama bölümü */
        public function searchUser()
    {

        $term = $this->input->get("term");

        $rows = $this->db->select("product_name as value, url")->like("product_name",$term)->get("products")->result_array();

       echo json_encode($rows);

    }
    /** #ürünarama bölümü */

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    /** popUps bölümü */
        public function dontShowBtn(){

         $popup_id = $this->input->post("popup_id");

         set_cookie($popup_id,true,60*60*24*365);

    }
    /** #popUps bölümü */

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    /** sepet işlemleri */
        public function sepeteekle($id){
            if(!$id){
                redirect(base_url());
            }
            $urunbul = $this->Ayar_model->get(['id' => $id]);
            if(count($urunbul) > 0){
                $this->sepet->ekle($id, 1);
                redirect(base_url("home/product_list"));
            }
        }
        public function sepetitemizle(){
            $this->sepet->tumunu_sil();
            redirect(base_url());
        }
        public function sepettencikar($id){
            $this->sepet->sil($id,$this->session->userdata('yeniUrun')[$id]);
            redirect(base_url("home/product_list"));
        }
        public function sepetim(){


            $viewData = new stdClass();

            $viewData->viewFolder = "cart_v";

            $viewData->products = $this->session->userdata('yeniUrun');
            $viewData->kacurunvar = $this->sepet->sepette_ne_kadar_urun_var();



            $this->load->view($viewData->viewFolder,$viewData);


          //  $this->load->view('cart_v/content',['products' => $this->session->userdata('yeniUrun')]);
        }
    /** #sepet işlemleri */

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



}

