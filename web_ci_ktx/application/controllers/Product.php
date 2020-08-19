<?php
Class Product extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        //load model san pham
    
    }
    

    function index()
    {
      
        
        //hiển thị ra view
        $this->data['temp'] = 'site/product/index';
        $this->load->view('site/layout', $this->data);
    }
    
}



