<?php

class Category_model extends CI_Model {

    public $tableName = "categories";

    public function __construct()
    {
        parent::__construct();

    }

    public function get($where=array()){

        return $this->db->where($where)->get($this->tableName)->row();
    }

    /** Tüm Kayıtları bana getirecek olan metot.. */
    public function get_all($where=array()){
        return $this->db->where($where)->get($this->tableName)->result();
    }

    public function add($data = array()){
        return $this->db->insert($this->tableName, $data);
    }

    public function update($where = array(), $data = array()){
        return $this->db->where($where)->update($this->tableName,$data);
    }

    public function delete($where = array())
    {
        return $this->db->where($where)->delete($this->tableName);
    }

    public function categoryList($url){
        // burada ürünler tablosundan url e göre çekiyorsun
        // gelen url masa-avize ancak bu url kategorinin url i
        // burada ya 2 sorgu kullanacaksın ya da join yapacaksın
        //aynnen bir arkadaşım daha join dedi ancak nasıl kullanmam gerekiyor.
        // alias biliyor musun? maalesef// products p yazdım. bundan sonra sorgu içinde p kullandığım yerde products olmuş olacak
        // p.* demek products tablosundaki tüm alanlar demek
        // c de  categories in aliası oldu
        // products tablosundaki categories_id alanı --> categories tablosundaki id alanı ile aynı olan
        return $this->db->select('p.*')->from('products p')
            ->join('categories c','p.categories_id=c.id','left')
            ->where('c.url',$url) // gelen url artık burada şart olarak eklenecek ama alias a göre
            ->get()
            ->result();
        // tamamdır hocam mantık bu yani şimdi şey sorucam benim bu yaptığım olay genel olarak sağlıklı değil yani ürünler tablosunda ürüne ait kategoriyi id olarak
        //tutmak mantıklı mı değil mi hangisi daha doğru diyim
        // ürünler tablosunda id olarak kategorileri saklamalısın.// şuanki mantık doğru ilerideki projelerimde yine join ile alıcam demektir.
        // evet ama benim kafa yerinde değil sorguda bir hata var galiba
        // güncellenmmeiş o yüzden :)tamamdır o zaman. kolay gelsin.
        // teşekkür ederim hocam ellerinize sağlık

        //return  $this->db->select('*')->from('products')->where('url',$url)->get()->result();


    }

}
