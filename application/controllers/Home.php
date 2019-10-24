<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Profile_m');
    }

    public function index()
    {
        $data['tbl_id']=$this->Profile_m->Profile_tampil();
        $data['tbl_edu']=$this->Profile_m->Profile_tampil();
        $data['tbl_skill']=$this->Profile_m->Profile_tampil();
        $data['tbl_work']=$this->Profile_m->Profile_tampil();
        $this->mylib->view('home_v', $data);
    }

    public function delete_id($id)
    {
        $this->db->delete('tbl_id', ['id_id' => $id]);
        redirect('home');
    }
    public function delete_edu($id)
    {
        $this->db->delete('tbl_edu', ['edu_id' => $id]);
        redirect('home');
    }
    public function delete_skill($id)
    {
        $this->db->delete('tbl_skill', ['skill_id' => $id]);
        redirect('home');
    }
    public function delete_work($id)
    {
        $this->db->delete('tbl_work', ['work_id' => $id]);
        redirect('home');
    }

    public function edit_id($id)
    {
        $data['tbl_id'] = $this->Profile_m->get_where('tbl_id', ['id_id' => $id]);
        $this->mylib->view('edit_v', $data);
    }
    public function edit_edu($id)
    {
        $data['tbl_id'] = $this->Profile_m->get_where('tbl_edu', ['edu_id' => $id]);
        $this->mylib->view('edit_v', $data);
    }
    public function edit_skill($id)
    {
        $data['tbl_id'] = $this->Profile_m->get_where('tbl_skill', ['skill_id' => $id]);
        $this->mylib->view('edit_v', $data);
    }
    public function edit_work($id)
    {
        $data['tbl_id'] = $this->Profile_m->get_where('tbl_work', ['work_id' => $id]);
        $this->mylib->view('edit_v', $data);
    }

    public function edit_act_id($id)
    {
        $data =array(
            'id_name' => $this->input->post('nama'),
            'id_nim' => $this->input->post('nim'),
            'id_phone' => $this->input->post('phone'),
            'id_email' => $this->input->post('email'),
            'id_ig' => $this->input->post('ig'),
            'id_fb' => $this->input->post('fb'),
            'id_twitter' => $this->input->post('twitter'),
            'id_address' => $this->input->post('address'),
            'id_github' => $this->input->post('github')
        );
        $this->db->update('tbl_id', $data, ['id_id' => $id]);
        redirect('home');
    }
    public function edit_act_edu($id)
    {
        $data =array(
            'id_name' => $this->input->post('nama'),

        );
        $this->db->update('tbl_id', $data, ['id_id' => $id]);
        redirect('home');
    }
    public function edit_act_skill($id)
    {
        $data =array(
            'id_name' => $this->input->post('nama'),

        );
        $this->db->update('tbl_id', $data, ['id_id' => $id]);
        redirect('home');
    }
    public function edit_act_work($id)
    {
        $data =array(
            'id_name' => $this->input->post('nama'),

        );
        $this->db->update('tbl_id', $data, ['id_id' => $id]);
        redirect('home');
    }
}
