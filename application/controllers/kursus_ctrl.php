<?php

class kursus_ctrl extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library("template");
    }

    function index()
    {
        // $this->load->view("index");
        $this->template->Tampilan("index");
    }
}