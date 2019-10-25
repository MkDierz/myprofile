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
        $data['tbl_id']=$this->Profile_m->Profile_tampil_id();
        $data['tbl_edu']=$this->Profile_m->Profile_tampil_edu();
        $data['tbl_skill']=$this->Profile_m->Profile_tampil_skill();
        $data['tbl_work']=$this->Profile_m->Profile_tampil_work();
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
        $this->mylib->view('edit_v_id', $data);
    }
    public function edit_edu($id)
    {
        $data['tbl_id']=$this->Profile_m->Profile_tampil_id();
        $data['tbl_edu'] = $this->Profile_m->get_where('tbl_edu', ['edu_id' => $id]);
        $this->mylib->view('edit_v_edu', $data);
    }
    public function edit_skill($id)
    {
        $data['tbl_id']=$this->Profile_m->Profile_tampil_id();
        $data['tbl_skill'] = $this->Profile_m->get_where('tbl_skill', ['skill_id' => $id]);
        $this->mylib->view('edit_v_skill', $data);
    }
    public function edit_work($id)
    {
        $data['tbl_id']=$this->Profile_m->Profile_tampil_id();
        $data['tbl_work'] = $this->Profile_m->get_where('tbl_work', ['work_id' => $id]);
        $this->mylib->view('edit_v_work', $data);
    }

    public function edit_act_id($id)
    {
        $data =array(
            'id_name' => $this->input->post('name'),
            'id_nim' => $this->input->post('nim'),
            'id_phone' => $this->input->post('phone'),
            'id_email' => $this->input->post('email'),
            'id_ig' => $this->input->post('ig'),
            'id_fb' => $this->input->post('fb'),
            'id_twitter' => $this->input->post('twitter'),
            'id_address' => $this->input->post('address'),
            'id_github' => $this->input->post('github'),
            'id_profile' => $this->input->post('profile')

        );
        $this->db->update('tbl_id', $data, ['id_id' => $id]);
        redirect('home');
    }
    public function edit_act_edu($id)
    {
        $data =array(
            'edu_name' => $this->input->post('eduname'),
            'edu_yearin' => $this->input->post('eduyearin'),
            'edu_yearout' => $this->input->post('eduyearout'),
            'edu_score' => $this->input->post('eduscore'),
        );
        $this->db->update('tbl_edu', $data, ['edu_id' => $id]);
        redirect('home');
    }
    public function edit_act_skill($id)
    {
        $data =array(
            'skill_name' => $this->input->post('name'),
            'skill_method' => $this->input->post('method'),
            'skill_time' => $this->input->post('time'),

        );
        $this->db->update('tbl_skill', $data, ['skill_id' => $id]);
        redirect('home');
    }
    public function edit_act_work($id)
    {
        $data =array(
            'work_place' => $this->input->post('name'),
            'work_yearin' => $this->input->post('yearin'),
            'work_yearout' => $this->input->post('yearout'),
            'work_division' => $this->input->post('division'),

        );
        $this->db->update('tbl_work', $data, ['work_id' => $id]);
        redirect('home');
    }
}
