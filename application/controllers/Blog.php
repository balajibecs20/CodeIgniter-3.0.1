<?php
class Blog extends CI_Controller {

    public function index()
    {
        $data['title'] = "My Real Title";
        $data['heading'] = "My Real Heading";

//        echo 'Hello World!';
        $this->load->view('blogview', $data);
    }

    public function comments()
    {
        echo 'Look at this!';
    }
}