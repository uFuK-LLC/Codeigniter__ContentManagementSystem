<?php

class Lesson_m extends CI_Model {

	public $tableName = "lessons";

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