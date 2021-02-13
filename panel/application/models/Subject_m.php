<?php

class Subject_m extends CI_Model {

	public $tableName = "subjects";

	public function __construct()
    {
    	parent::__construct();
    }

    public function get($where = array())
    {
    	return $this->db->where($where)->get($this->tableName)->row();
    }

    public function get_all()
    {
    	$query="select subjects.id, exams.name as exam_name, lessons.name as lesson_name, title, subjects.isActive as isActive
                from subjects
                INNER JOIN exams ON exams.id = subjects.exam_id
                INNER JOIN lessons ON lessons.id = subjects.lesson_id";

    	return $this->db->query($query)->result();
    }

    public function add($data = array())
    {
    	return $this->db->insert($this->tableName, $data);
    }

    public function update($where = array(), $data = array())
    {
        return $this->db->where($where)->update($this->tableName, $data);
    }

    public function delete($where = array())
    {
        return $this->db->where($where)->delete($this->tableName);
    }
}