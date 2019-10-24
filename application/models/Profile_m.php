<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile_m extends CI_Model
{

    // INSERT
    public function post($data)
    {
        $this->db->insert('tbl_id', $data);
        $this->db->insert('tbl_edu', $data);
        $this->db->insert('tbl_skill', $data);
        $this->db->insert('tbl_work', $data);
    }

    // READ
    public function Profile_tampil()
    {
        return $this->db->get('tbl_id');
        return $this->db->get('tbl_edu');
        return $this->db->get('tbl_skill');
        return $this->db->get('tbl_work');
    }

    // FIND
    public function get_where($tbl, $where)
    {
        $this->db->where($where);
        return $this->db->get($tbl);
    }
}
