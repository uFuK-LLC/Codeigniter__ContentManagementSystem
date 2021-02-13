<?php

class Login_m extends CI_Model {

    public $tableName = "";

    public function __construct()
    {
        parent::__construct();
        $this->tableName = "members";
    }

    public function get($where = array()) {

        return $this->db->where($where)->get($this->tableName)->row();
    }

    public function add($data = array()) {
        return $this->db->insert($this->tableName, $data);
    }
}