<?php

class Test_m extends CI_Model {

    public $tableName = "test";

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all($where = array()) {
        return $this->db->where($where)->get($this->tableName)->result();
    }
}