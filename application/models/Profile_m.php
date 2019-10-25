<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile_m extends CI_Model
{

    // INSERT
    public function post_id($data)
    {
        $this->db->insert('tbl_id', $data);
    }
    public function post_edu($data)
    {
        $this->db->insert('tbl_edu', $data);
    }
    public function post_skill($data)
    {
        $this->db->insert('tbl_skill', $data);
    }
    public function post_work($data)
    {
        $this->db->insert('tbl_work', $data);
    }

    // READ
    public function Profile_tampil_id()
    {
        return $this->db->get('tbl_id');
    }
    public function Profile_tampil_edu()
    {
        return $this->db->get('tbl_edu');
    }
    public function Profile_tampil_skill()
    {
        return $this->db->get('tbl_skill');
    }
    public function Profile_tampil_work()
    {
        return $this->db->get('tbl_work');
    }

    // FIND
    public function get_where($tbl, $where)
    {
        $this->db->where($where);
        return $this->db->get($tbl);
    }
}
