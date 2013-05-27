<?php

class Form extends CI_Controller {

	function index(){

		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('passport', 'Passport', 'required|min_length[8]|max_length[9]');
		$this->form_validation->set_rules('mobile', 'Mobile', 'required|min_length[10]|max_length[14]');
		$this->form_validation->set_rules('tckn', 'TCKN', 'required|min_length[11]|max_length[11]');
		$this->form_validation->set_error_delimiters('<li>', '</li>');

		
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = "Hoşgeldiniz!";
			$this->load->view('form', $data);
		}
		else{
			$this->load->view('formSuccess');
		}
	}
}
