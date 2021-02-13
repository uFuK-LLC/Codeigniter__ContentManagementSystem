<?php

class Coupons_m extends CI_Model {

    public $tableName = "";

    public function __construct()
    {
        parent::__construct();
        $this->tableName = "coupons";
    }

    public function get_all($where = array())
    {
        return $this->db->where($where)->limit(5)->get($this->tableName)->result();
    }

    public function add($data = array())
    {
        return $this->db->insert($this->tableName, $data);
    }

}
