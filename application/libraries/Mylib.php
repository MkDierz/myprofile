<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mylib
{
    /*fungsi membuat menampilkan halaman tertentu*/
    public function view($view, $data=array())
    {
        $ci =& get_instance();
        if (!array_key_exists('title', $data)) {
            $data['title'] = 'Welcome to my profile!';
        }
        $ci->load->view('template/header', $data);
        if ($data) {
            $ci->load->view($view, $data);
        } else {
            $ci->load->view($view);
        }
        $ci->load->view('template/footer', $data);
    }
}
