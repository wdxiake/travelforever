<?php
/**
 * Created by PhpStorm.
 * User: duowang.wangduo
 * Date: 14-4-19
 * Time: 下午8:47
 */

class Page extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('group_model');
        $this->load->library('smarty');
        $this->load->library('city');
    }
    private function handleParams($params){
        $result = array(
            'pageInfo' => array(),
            'cityInfo' => array()
        );
        if(!$params) {
            $params = array('page'=>1);
        }
        $page = array_key_exists('page', $params) ?intval( $params['page']):1;
        if($page > 0){
            $result['pageInfo']['offset'] = ($page-1)*10;
            $result['pageInfo']['page'] = $page;
        }else {
            $result['pageInfo']['offset'] = 0;
            $result['pageInfo']['page'] = 1;
        }

        if(array_key_exists('from',$params) && $this->city->chufaExisted($params['from'])){
            $result['cityInfo']['from_city'] = $params['from'];
            $result['cityInfo']['from_city_str'] = $params['from'];
            $result['cityInfo']['from_city_url'] = "&from=".$params['from'];
            print_r(0);
        }else {
            print_r(1);
            $result['cityInfo']['from_city'] = NULL;
            $result['cityInfo']['from_city_url'] = "";
            $result['cityInfo']['from_city_str'] = "全部";
        }
        if(array_key_exists('to',$params) && $this->city->mudiExisted($params['to'])){
            $result['cityInfo']['to_city'] = $params['to'];
            $result['cityInfo']['to_city_str'] = $params['to'];
            $result['cityInfo']['to_city_url'] = "&to=".$params['to'];
        } else {
            $result['cityInfo']['to_city'] = NULL;
            $result['cityInfo']['to_city_url'] = "";
            $result['cityInfo']['to_city_str'] = "全部";
        }
        return $result;
    }
    public function index(){
        echo 1;
    }
    public function groups(){
        $get_params = $this->input->get();
        //处理页面信息
        $data['menuIndex'] = 3;
        $data['title'] = '淘票么（taopiao.me）-旅游套餐';
        //处理分页，城市等信息
        $param = $this->handleParams($get_params);
        $data = array_merge($data,$param);

        //获取分页总数目
        $pageLen = floor(($this->group_model->getCount($param['cityInfo']['from_city'], $param['cityInfo']['to_city']))/10+1);
        $data['pageInfo']['pageLen'] = $pageLen;

        if($pageLen > $data['pageInfo']['page']){
            $data['pageInfo']['last'] = true;
        }else {
            $data['pageInfo']['last'] = false;
        }
        if($data['pageInfo']['page'] > 1){
            $data['pageInfo']['first'] = true;
        }else {
            $data['pageInfo']['first'] = false;
        }

        //获取groups的信息
        $groups = $this->group_model->get_groups($param['pageInfo']['offset'],$param['cityInfo']['from_city'], $param['cityInfo']['to_city']);
        $data['groups'] = $groups;
        $this->smarty->view( 'groups/index.tpl', $data );
    }
} 