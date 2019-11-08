<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


/** yönlendirmeler */

$route["urun-listesi"] = "home/product_list";
$route["urun-detay/(:any)"] = "home/product_detail/$1";

$route["hakkimizda"] = "home/about_us";

$route["iletisim"] = "home/contact";

$route["mesaj-gonder"] = "home/send_contact_message";

$route["sepetim"] = "home/sepetim";

$route["giris-yap"] = "home/login";
$route["kayit-ol"] = "home/register";




$route["kategoriler"] = "home/getCategoryView";
$route["kategoriler/(:any)"] = "home/getCategoryView/$1";
// örnek olarak detaile bakabilriiz.





$route["kataloglar"]           = "home/catalogs_list";
$route["katalog-detay/(:any)"] = "home/catalog_detail/$1";


$route["bir-daha-gosterme"] = "home/dontShowBtn";











