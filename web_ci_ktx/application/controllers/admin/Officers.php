<?php
Class Officers extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('canbo_model');
    }

    /*
     * Lay ra danh sach danh muc san pham
     */
    function index()
    {
        $list = $this->canbo_model->get_list();
        $this->data['list'] = $list;

        //lay nội dung của biến message
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;

        //load view
        $this->data['temp'] = 'admin/officers/index';
        $this->load->view('admin/main', $this->data);
    }

    /*
     * Lay ra danh sach danh muc san pham
     */
    function add()
    {

        //lay nội dung của biến message
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;

        if ($this->input->post('btnAdd')) {
			$hoten = $this->input->post('hoten');
			$email = $this->input->post('email');
			$matkhau = md5($this->input->post('matkhau'));
			$chucvu = $this->input->post('chucvu');
			$ngaysinh = $this->input->post('ngaysinh');
			$dantoc = $this->input->post('dantoc');
			$tongiao = $this->input->post('tongiao');
			$chungminhthu = $this->input->post('chungminhthu');
			$dienthoai = $this->input->post('dienthoai');
			$quoctich = $this->input->post('quoctich');

			$config['upload_path'] = './public/images/banner';
			$config['allowed_types'] = 'jpg|png|jpeg|JPEG';
			$this->load->library("upload", $config);
			$file_data = $this->upload->data();
			if($hoten != null){
				if ($this->upload->do_upload('anh')) {
// 				if ($this->upload->do_upload('anhchungminhthu')) {

				// pre($file_data);
					$data = array(
						'hoten' => $hoten,
						'email' => $email,
						'matkhau' => $matkhau,
						'chucvu' => $chucvu,
						'ngaysinh' => $ngaysinh,
						'dantoc' => $dantoc,
						'tongiao' => $tongiao,
						'chungminhthu' => $chungminhthu,
						'dienthoai' => $dienthoai,
						'quoctich' => $quoctich,
						'anh' => link_banner('/'). $file_data['file_name']
					);
					if ($this->canbo_model->create($data)) {
						$this->session->set_flashdata('message', 'Thêm thành công');
						redirect(base_url('admin/officers'));
					} else {
						$this->session->set_flashdata('message', 'Lỗi thao tác cơ sở dữ liệu');
					}
				} else {
					$data = array(
						'hoten' => $hoten,
						'email' => $email,
						'matkhau' => $matkhau,
						'chucvu' => $chucvu,
						'ngaysinh' => $ngaysinh,
						'dantoc' => $dantoc,
						'tongiao' => $tongiao,
						'chungminhthu' => $chungminhthu,
						'dienthoai' => $dienthoai,
						'quoctich' => $quoctich,
						'anh' => link_banner('/'). $file_data['file_name']
					);
					if ($this->canbo_model->create($data)) {
						$this->session->set_flashdata('message', 'Thêm thành công');
						redirect(base_url('admin/officers'));
					} else {
						$this->session->set_flashdata('message', 'Lỗi thao tác cơ sở dữ liệu');
					}
				}
			}else{
				$this->session->set_flashdata('message', 'chua dien du thong tin');
			}
		}

        //load view
        $this->data['temp'] = 'admin/officers/add';
        $this->load->view('admin/main', $this->data);
    }
    function edit()
	{
		//lay nội dung của biến message
		$message = $this->session->flashdata('message');
		$this->data['message'] = $message;

		$id = $this->uri->segment(4);
		$canbo_edit = $this->canbo_model->get_info($id);
		//        pre($banner);
		if (!$canbo_edit) {
			redirect(base_url('admin/students'));
		}
		if ($this->input->post('btnEdit')) {
			$data = array(
			'hoten' => $this->input->post('hoten'),
			'email' => $this->input->post('email'),
			'matkhau' => $this->input->post('matkhau'),
			'chucvu' => $this->input->post('chucvu'),
			'ngaysinh' => $this->input->post('ngaysinh'),
			'dantoc' => $this->input->post('dantoc'),
			'tongiao' => $this->input->post('tongiao'),
			'chungminhthu' => $this->input->post('chungminhthu'),
			'dienthoai' => $this->input->post('dienthoai'),
			'quoctich' => $this->input->post('quoctich'),
			);
//            pre($data);

			$config['upload_path'] = './public/images/banner';
			$config['allowed_types'] = 'jpg|png|jpeg|JPEG|PNG';
			$this->load->library("upload", $config);
			if ($this->upload->do_upload('anh')) {
				$file_data = $this->upload->data();
//                $data['img'] = $file_data['file_name'];
				$data['anh'] = link_banner('/'). $file_data['file_name'];
//                'link_banner' => link_banner('/'). $file_data['file_name']
//                unlink('./public/images/banner/' . $banner->img);
			} else {
				// check lôi
				$this->session->set_flashdata('message', $this->upload->display_errors('', ''));
//                return;
			}
			if ($this->canbo_model->update($id, $data)) {
				$this->session->set_flashdata('message', 'Cập nhật thành công');
				redirect(base_url('admin/officers'));
			} else {
				$this->session->set_flashdata('message', 'Lỗi thao tác cơ sở dữ liệu');
			}
		}

		//load view
		$this->data['res'] = $canbo_edit;
		$this->data['temp'] = 'admin/officers/edit';
		$this->load->view('admin/main', $this->data);
}
    function del()
    	{
    		$id = $this->uri->segment(4);
			$sinhvien_del = $this->canbo_model->get_info($id);
			if ($sinhvien_del) {
				$this->canbo_model->delete($id);
				// unlink('./public/images/product/' . $product->img);
			}
			redirect(base_url('admin/officers'));
    	}
}
