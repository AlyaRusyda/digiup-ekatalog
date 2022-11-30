<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("buku_model", "buku");
	}
	public function index()
	{
		$kw = $this->input->get('search');
		$data['records'] = $this->buku->find_all();
		if (!empty($kw)) {
			$data['records'] = $this->buku->search($kw);
		}
		$this->load->view('welcome_message', $data);
	}
	function detail()
	{
		$id = $this->uri->segment(3);
		$data = $this->buku->find_by_id($id);
		$this->load->view("detail", $data);
	}
}
