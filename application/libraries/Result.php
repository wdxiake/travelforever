<?php
/**
 * Created by PhpStorm.
 * User: duowang.wangduo
 * Date: 14-4-26
 * Time: 下午12:01
 */
class Result {
    private $result = array(
        //basic error code
        "SUCCESS" => 0,
        "PARAM_WRONG" => 1,
        "NOT_FOUND" => 2,
        //mysql error code
        "MYSQL_DELETE_ERROR" => 100,
    );
    public function getResult($msg, $data=NULL){
        $result = array();
        if(array_key_exists($msg, $this->result)){
            $result['code'] =$this->result[$msg];
            $result['message'] = $msg;
        } else {
            $result['code'] = -1;
            $result['message'] = "ERROR_CODE_NOT_FOUND";
        }
        if($data !== NULL){
            $result['data'] = $data;
        }
        return $result;
    }
}