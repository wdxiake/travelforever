<?php
/**
 * Created by PhpStorm.
 * User: duowang.wangduo
 * Date: 14-4-26
 * Time: 下午10:04
 */
class City {
    public $chufa = ["北京","南京","苏州","成都","广州", "深圳","杭州"];
    public $mudi = ["北京","天津","青岛","苏州","南京", "厦门","杭州","深圳","成都","广州","武汉","西安","三亚"];

    public function chufaExisted($city){
        if(in_array($city, $this->chufa)){
            return true;
        }else {
            return false;
        }
    }
    public function mudiExisted($city){
        if(in_array($city, $this->mudi)){
            return true;
        }else {
            return false;
        }
    }
}