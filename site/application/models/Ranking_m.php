<?php

class Ranking_m extends CI_Model {

    public $tableName = "";

    public function __construct()
    {
        parent::__construct();
        $this->tableName = "ranking";
    }

    public function get($where = array())
    {
        $result = $this->db->where($where)->get($this->tableName)->row()->score;

        if ($result != null) {
            return $result;
        } else {
            return false;
        }
    }

    public function add($where = array(), $data = array())
    {
        return $this->db->where($where)->insert($this->tableName, $data);
    }

    public function update_score($where = array(), $score = 0)
    {
        $userId = $where["user_id"];
        $sql = "UPDATE ranking SET score = '$score' WHERE user_id = '$userId'";
        $this->db->query($sql);
    }
}