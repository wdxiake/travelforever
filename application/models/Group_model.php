<?php
/**
 * Created by PhpStorm.
 * User: duowang.wangduo
 * Date: 14-4-19
 * Time: 下午7:52
 */

class Group_model extends CI_Model{
    private $table = "travel_group";
    private $table_info= "id, product_name, product_type, duration, begin_time, end_time, market_price, ticket_price, discount, from_city, to_city, url, image_url, current_price, product_summary";
    private $page_length = 10;
    public function __construct(){
        $this->load->database();
    }
    public function get_groups($from, $from_city=null, $to_city=null){
        $this->db->limit($this->page_length, $from);
        $this->db->where('is_deleted', '0');
        if($from_city != null){
            $this->db->where('from_city', $from_city);
        }
        if($to_city != null){
            $this->db->where('to_city', $to_city);
        }
        $this->db->order_by('create_time');
        $query = $this->db->get($this->table);
        return $query->result_array();
    }
    public function add($group){
        $str = $this->db->insert($this->table, $group);
        print_r($str);
        $count = $this->db->affected_rows();
        return $count;
    }
    public function delete($id){
        $data = array(
            'is_deleted' => 1
        );
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
        $count = $this->db->affected_rows();
        return $count;
    }
    public function getById($id){
        $this->db->where('id', $id);
        $this->db->select($this->table_info);
        $data = $this->db->get($this->table)->result_array();
        return $data;
    }
    public function getCount( $from_city=null, $to_city=null){
        $this->db->where('is_deleted', '0');
        if($from_city != null){
            $this->db->where('from_city', $from_city);
        }
        if($to_city != null){
            $this->db->where('to_city', $to_city);
        }
        $query = $this->db->get($this->table);
        return count($query->result_array());
    }
    public function update(){

    }
} 