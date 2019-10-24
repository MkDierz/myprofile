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
        $this->mylib->view('post_v');
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
        $this->Profile_m->post($data);
        redirect('home');
    }
    public function edu()
    {
        $data =array(
            'id_nama' => $this->input->post('nama'),
            'id_nim' => $this->input->post('nim')
        );
        $this->Profile_m->post($data);
        redirect('home');
    }
    public function skill()
    {
        $data =array(
            'id_nama' => $this->input->post('nama'),
            'id_nim' => $this->input->post('nim')
        );
        $this->Profile_m->post($data);
        redirect('home');
    }
    public function work()
    {
        $data =array(
            'id_nama' => $this->input->post('nama'),
            'id_nim' => $this->input->post('nim')
        );
        $this->Profile_m->post($data);
        redirect('home');
    }
}
