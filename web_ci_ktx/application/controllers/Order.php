<?php
Class Order extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Lấy thông tin của khách hàng
     */
    function index()
    {
        
        
        //hiển thị ra view
        $this->data['temp'] = 'site/order/index';
        $this->load->view('site/layout', $this->data);
    }
}