<?php

class Answers_m extends CI_Model {

    public $tableName = "";

    public function __construct()
    {
        parent::__construct();
        $this->tableName = "answers";
    }

    public function get_all($where = array())
    {
        return $this->db->where($where)->get($this->tableName)->result();
    }

    public function answer_control($where = array())
    {
        return $this->db->where($where)->get($this->tableName)->row()->id;
    }

}