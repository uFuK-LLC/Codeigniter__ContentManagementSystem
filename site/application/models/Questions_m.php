<?php

class Questions_m extends CI_Model {

    public $tableName = "";

    public function __construct()
    {
        parent::__construct();
        $this->tableName = "questions";
    }

    public function get_all($where = array())
    {
        return $this->db->where($where)->get($this->tableName)->result();
    }


}