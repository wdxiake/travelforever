<?php
/**
 * Created by PhpStorm.
 * User: duowang.wangduo
 * Date: 14-4-19
 * Time: 下午7:39
 */

class Group extends CI_Controller{
    private $secret = "daniao";
    public function __construct(){
        parent::__construct();
        $this->load->model('group_model');
        $this->load->library('result');
    }
    function index(){
        $get_params = $this->input->get();
        if(!empty($get_params['page'])){
            $page = intval($get_params['page']);
        } else {
            $page = 1;
        }
        $from = ($page-1)*10;
        $groups = $this->group_model->get_groups($from);
        $ret = $this->result->getResult("SUCCESS",$groups);
        echo json_encode($ret);
    }
    public function add(){
        $post_params = $this->input->post();
        $group = array(
            'product_name' => array_key_exists('name', $post_params) ? $post_params['name']:'',
            'product_type' => array_key_exists('type', $post_params) ? $post_params['type']:'',
            'url' => array_key_exists('url', $post_params) ? $post_params['url']:'',
            'duration' => array_key_exists('duration', $post_params) ? $post_params['duration']:0,
            'begin_time' => array_key_exists('begin_time', $post_params) ? $post_params['begin_time']:0,
            'end_time' => array_key_exists('end_time', $post_params) ? $post_params['end_time']:0,
            'market_price' => array_key_exists('market_price', $post_params) ? $post_params['market_price']:0,
            'ticket_price' => array_key_exists('ticket_price', $post_params) ? $post_params['ticket_price']:0,
            'discount' => array_key_exists('discount', $post_params) ? $post_params['discount']:0,
            'from_city' => array_key_exists('from_city', $post_params) ? $post_params['from_city']:1,
            'to_city' => array_key_exists('to_city', $post_params) ? $post_params['to_city']:2,
            'image_url' => array_key_exists('image_url', $post_params) ? $post_params['image_url']:'',
            'current_price' => array_key_exists('current_price', $post_params) ? $post_params['current_price']:0,
            'product_summary' => array_key_exists('product_summary', $post_params) ? $post_params['product_summary']:'',
        );

        $data = $this->group_model->add($group);
        $ret = $this->result->getResult("SUCCESS",$data);
        echo json_encode($ret);
    }
    public function delete(){
        $get_params = $this->input->get();
        if(!empty($get_params['id']) && !empty($get_params['secret']) && $get_params['secret'] == md5($this->secret)){
            $count = $this->group_model->delete($get_params['id']);
            $ret = $this->result->getResult("SUCCESS",$count);
        } else {
            $ret = $this->result->getResult("PARAM_WRONG");
        }
        echo json_encode($ret);
    }
    public function getById(){
        $get_params = $this->input->get();
        if(!empty($get_params['id'])){
            $result = $this->group_model->getById($get_params['id']);
            if (count($result) > 0) {
                $ret = $this->result->getResult("SUCCESS", $result[0]);
            } else {
                $ret = $this->result->getResult("NOT_FOUND");
            }
        } else {
            $ret = $this->result->getResult("PARAM_WRONG");
        }
        echo json_encode($ret);
    }
    public function update($id, $data){

    }
} 