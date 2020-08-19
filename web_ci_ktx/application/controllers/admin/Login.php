<?php
Class Login extends MY_controller{

    function index()
    {
        $this->load->library('form_validation');
        $this->load->helper('form');
        if($this->input->post())
        {
            $this->form_validation->set_rules('login' ,'login', 'callback_check_login');
            if($this->form_validation->run())
            {
                $this->session->set_userdata('login', true);

                redirect(admin_url('home'));
            }
        }

        $this->load->view('admin/login/index');
    }

    /* Kiem tra username va password co chinh xac khong*/
    function check_login()
    {
        $email = $this->input->post('email');
        $matkhau = $this->input->post('matkhau');
        $matkhau = md5($matkhau);

        $this->load->model('canbo_model');
        $where = array('email' => $email , 'matkhau' => $matkhau);
		//check_exists kiem tra dieu kien co ton tai hay khong true co du lieu
        if($this->canbo_model->check_exists($where))
        {
            return true;
        }
        $this->form_validation->set_message(__FUNCTION__, 'Không đăng nhập thành công');
        return false;
    }
}
?>
