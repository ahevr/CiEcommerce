<?php

Class Sepet{

    public function kontrol(){
        if( isset($_SESSION['yeniUrun']) ){
            return true;
        }else{
            return false;
        }
    }

    public function varmi($arg){
        if( array_key_exists($arg, $_SESSION['yeniUrun']) ){
            return true;
        }else{
            return false;
        }
    }

    public function ekle($arg, $count){
        if( $this->kontrol() ){
            if( $this->varmi($arg) ){
                foreach( $_SESSION['yeniUrun'] as $key => $val ){
                    if( $key == $arg ){
                        $result = $val;
                    }
                }
                $_SESSION['yeniUrun'][$arg] = $result + $count;

            }else{
                $_SESSION['yeniUrun'][$arg] = $count;
            }
        }else{
            $_SESSION['yeniUrun'][$arg] = $count;
        }
    }

    public function sil($arg){
        foreach( $_SESSION['yeniUrun'] as $key => $val ){
            if( $key == $arg ){
                unset($_SESSION['yeniUrun'][$arg]);

            }
        }
    }

    public function tumunu_sil(){
        if( $this->kontrol() ){
            foreach( $_SESSION['yeniUrun'] as $key => $val ){
                $this->sil($key);
            }
        }
    }

    public function sepette_ne_kadar_urun_var(){
        if( $this->kontrol() ){
            return array_sum($_SESSION['yeniUrun']);
        }else{
            return 0;
        }
    }

    public function urunden_kac_tane_var($arg){
        if( $this->kontrol() ){
            if( $this->varmi($arg) ){
                foreach( $_SESSION['yeniUrun'] as $key => $val ){
                    if( $key == $arg ){
                        $result = $val;
                    }
                }
                return $result;
            }else{
                return 0;
            }
        }else{
            return 0;
        }
    }

}
