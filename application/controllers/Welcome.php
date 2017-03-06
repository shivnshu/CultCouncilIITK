<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('home');
	}

	public function team()
	{
		$this->load->view('team');
	}
	public function Gallery()
    {
    	$this->load->view('Gallery');
    }

    public function schedule()
    {
    	$this->load->view('schedule');
    }

	public function music()
    {
    	$this->load->view('clubs/music');
    }
            public function dance()
    {
        $this->load->view('clubs/dance');
    }
            public function dramatics()
    {
        $this->load->view('clubs/dramatics');
    }
    public function els()
    {
        $this->load->view('clubs/els');
    }
    public function fac()
    {
        $this->load->view('clubs/fac');
    }
    public function quiz()
    {
        $this->load->view('clubs/quiz');
    }

	public function debsoc()
	{
		$this->load->view('clubs/debsoc');
	}

	public function hss()
	{
		$this->load->view('clubs/hss');
	}
}
