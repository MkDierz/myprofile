<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
        $this->load->model('Profile_m');
    }
    public function index()
    {
        $data['tbl_id']=$this->Profile_m->Profile_tampil_id();
        $data['tbl_edu']=$this->Profile_m->Profile_tampil_edu();
        $data['tbl_skill']=$this->Profile_m->Profile_tampil_skill();
        $data['tbl_work']=$this->Profile_m->Profile_tampil_work();
    }

    public function post_edu()
    {
        $data['tbl_id']=$this->Profile_m->Profile_tampil_id();
        $this->mylib->view('post_v_edu', $data);
    }
    public function post_skill()
    {
        $data['tbl_id']=$this->Profile_m->Profile_tampil_id();
        $this->mylib->view('post_v_skill', $data);
    }
    public function post_work()
    {
        $data['tbl_id']=$this->Profile_m->Profile_tampil_id();
        $this->mylib->view('post_v_work', $data);
    }

    public function id()
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
        $this->Profile_m->post_id($data);
        redirect('home');
    }
    public function edu()
    {
        $data =array(
            'edu_name' => $this->input->post('eduname'),
            'edu_yearin' => $this->input->post('eduyearin'),
            'edu_yearout' => $this->input->post('eduyearout'),
            'edu_score' => $this->input->post('eduscore'),
        );
        $this->Profile_m->post_edu($data);
        redirect('home');
    }
    public function skill()
    {
        $data =array(
            'skill_name' => $this->input->post('name'),
            'skill_method' => $this->input->post('method'),
            'skill_time' => $this->input->post('time'),

        );
        $this->Profile_m->post_skill($data);
        redirect('home');
    }
    public function work()
    {
        $data =array(
            'work_place' => $this->input->post('name'),
            'work_yearin' => $this->input->post('yearin'),
            'work_yearout' => $this->input->post('yearout'),
            'work_division' => $this->input->post('division'),

        );
        $this->Profile_m->post_work($data);
        redirect('home');
    }
}
