<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hero extends CI_Controller
{

    public function index()
    {
//		$this->load->view('capture');
    }

    public function step_1()
    {
        $data['meta'] = $this->load->view('templates/meta', array(), TRUE);

        $data['header'] = $this->load->view('templates/header', array(), TRUE);

        $data['footer'] = $this->load->view('templates/footer', array(), TRUE);

        $this->load->view('hero/1', $data);
    }

    public function step_2()
    {
        $data['meta'] = $this->load->view('templates/meta', array(), TRUE);

        $data['header'] = $this->load->view('templates/header', array(), TRUE);

        $data['footer'] = $this->load->view('templates/footer', array(), TRUE);

        $this->load->view('hero/2', $data);
    }

    public function step_3()
    {
        $this->load->view('hero/3');
    }

    public function step_4()
    {
        $this->load->view('hero/4');
    }

    public function step_5()
    {
        $this->load->view('hero/5');
    }

    public function step_6()
    {
        $this->load->view('hero/6');
    }

}


