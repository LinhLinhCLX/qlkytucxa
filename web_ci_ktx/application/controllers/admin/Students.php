<?php
Class Students extends MY_Controller
{
    function __construct()
    {
        parent::__construct();

    }
    function index()
    {

        //lay nội dung của biến message
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;

        //load view
        $this->data['temp'] = 'admin/students/index';
        $this->load->view('admin/main', $this->data);
    }
    function add()
        {

            //lay nội dung của biến message
            $message = $this->session->flashdata('message');
            $this->data['message'] = $message;

            //load view
            $this->data['temp'] = 'admin/students/add';
            $this->load->view('admin/main', $this->data);
        }
	function edit()
			{

				//lay nội dung của biến message
				$message = $this->session->flashdata('message');
				$this->data['message'] = $message;

				//load view
				$this->data['temp'] = 'admin/students/edit';
				$this->load->view('admin/main', $this->data);
	}

     function delete()
	{
		//lay nội dung của biến message
		$message = $this->session->flashdata('message');
		$this->data['message'] = $message;

		//load view
		$this->data['temp'] = 'admin/students/edit';
		$this->load->view('admin/main', $this->data);
	}
}
