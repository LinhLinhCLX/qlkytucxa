<?php
Class Home extends MY_Controller
{
	function index()
	{

		//lay nội dung của biến message
		$message = $this->session->flashdata('message');
		$this->data['message'] = $message;

		$this->data['temp'] = 'site/home/index';
		$this->load->view('site/layout', $this->data);
	}
}
