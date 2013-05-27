<?php

class Form extends CI_Controller {

	function index(){

		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('passport', 'Passport', 'required');
		$this->form_validation->set_error_delimiters('<li>', '</li>');
		/*
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[12]|is_unique[users.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|matches[passconf]');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
		*/
		
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = "Hoşgeldiniz!";
			$this->load->view('form', $data);
		}
		else{
			$this->load->view('formSuccess');
		}
	}
}
