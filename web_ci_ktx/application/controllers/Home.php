<?php

Class Home extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
//         $this->load->model('messenger_model');
    }

    function index()
    {
//         $messenger = $this->messenger_model->get_list();
//         $this->data['messenger'] = $messenger;

        $this->data['temp'] = 'site/home/home';
        $this->load->view('site/layout', $this->data);
    }
}
