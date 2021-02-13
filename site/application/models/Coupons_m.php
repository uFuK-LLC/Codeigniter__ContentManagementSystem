<?php

class Coupons_m extends CI_Model {

    public $tableName = "";

    public function __construct()
    {
        parent::__construct();
        $this->tableName = "coupons";
    }

    public function get($id)
    {
        $sql = "SELECT * FROM winners INNER JOIN coupons ON winners.coupon_id = coupons.id WHERE coupons.isActive = 1 AND winners.user_id = '$id'";
        $query = $this->db->query($sql);
        $num_rows = $query->num_rows();
        if ($num_rows > 0) {
            return $this->db->query($sql)->row();
        } else {
            return false;
        }
    }

    private function get_all($where = array())
    {
        return $this->db->where($where)->limit(5)->get($this->tableName)->result();
    }

    public function add($data = array())
    {
        return $this->db->insert($this->tableName, $data);
    }

    public function update($where = array(), $data = array())
    {
        return $this->db->where($where)->update($this->tableName, $data);
    }

}
