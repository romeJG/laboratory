<?php

class Home extends CI_Controller
{
    // default lagi si index function
    public function index()
    {
        //tatawagin si home_view
        $this->load->view('home_view');
    }
}
