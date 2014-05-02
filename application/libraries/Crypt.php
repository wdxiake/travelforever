<?php
/**
 * Created by PhpStorm.
 * User: duowang.wangduo
 * Date: 14-4-26
 * Time: 下午1:13
 */

class Crypt {
    private $key = "daniao";
    private $cipher = MCRYPT_RIJNDAEL_256;
    private $mode = MCRYPT_MODE_CBC;

    public function encrypt($string){
        $encrypted = mcrypt_encrypt($this->cipher, md5($this->key), $string, $this->mode, md5(md5($this->key)));
        return $encrypted;
    }
    public function decrypt($string){
        $decrypted = mcrypt_decrypt($this->cipher, md5($this->key), $string, $this->mode, md5(md5($this->key)));
        return $decrypted;
    }
}