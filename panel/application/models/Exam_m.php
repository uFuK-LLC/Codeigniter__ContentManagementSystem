<?php

class Exam_m extends CI_Model {

	public $tableName = "exams";

	public function __construct()
    {
    	parent::__construct();
    }

    public function get($where = array())
    {
        return $this->db->where($where)->get($this->tableName)->row();
    }

    public function get_all($where = array())
    {
    	return $this->db->where($where)->get($this->tableName)->result();
    }
}