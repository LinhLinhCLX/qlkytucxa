<?php
Class Students extends MY_Controller
{
    function __construct()
        {
            parent::__construct();
            //load ra file model
            $this->load->model('sinhvien_model');
        }
    function index()
    {
    	$input['where']['trangthai'] = 1;
		$list = $this->sinhvien_model->get_list($input);
        $this->data['list'] = $list;

//         //lay nội dung của biến message
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;

        //load view
        $this->data['temp'] = 'admin/students/index';
        $this->load->view('admin/main', $this->data);
    }
    function list_index()
        {
        	$input['where']['trangthai'] = 2;
    		$list = $this->sinhvien_model->get_list($input);
            $this->data['list'] = $list;
    //         //lay nội dung của biến message
            $message = $this->session->flashdata('message');
            $this->data['message'] = $message;


            //load view
            $this->data['temp'] = 'admin/students/list';
            $this->load->view('admin/main', $this->data);
        }

    function list_edit()
		{
			$message = $this->session->flashdata('message');
			$this->data['message'] = $message;

			$id = $this->uri->segment(4);
			$sinhvien_list = $this->sinhvien_model->get_info($id);
			if ($sinhvien_list) {
				   $data = array(
						'trangthai' =>1,
					);
					if ($this->sinhvien_model->update($id, $data)) {
						$this->session->set_flashdata('message', 'Cập nhật thành công');
						redirect(base_url('admin/students/list_index'));
					} else {
						$this->session->set_flashdata('message', 'Lỗi thao tác cơ sở dữ liệu');
					}
			}
			 redirect(base_url('admin/students/list_index'));
		}
	function add()
		{
			$message = $this->session->flashdata('message');
			$this->data['message'] = $message;


			if ($this->input->post('btnAdd')) {
				$hoten = $this->input->post('hoten');
				$email = $this->input->post('email');
				$matkhau = md5($this->input->post('matkhau'));
				$truong = $this->input->post('truong');
				$khoa = $this->input->post('khoa');
				$ngaysinh = $this->input->post('ngaysinh');
				$dantoc = $this->input->post('dantoc');
				$tongiao = $this->input->post('tongiao');
				$sochungminhthu = $this->input->post('sochungminhthu');
				$dienthoai = $this->input->post('dienthoai');
				$quoctich = $this->input->post('quoctich');

				$config['upload_path'] = './public/images/banner';
				$config['allowed_types'] = 'jpg|png|jpeg|JPEG';
				$this->load->library("upload", $config);
				$file_data = $this->upload->data();
				if($hoten != null){
					if ($this->upload->do_upload('img_banner')) {
	// 				if ($this->upload->do_upload('anhchungminhthu')) {

					// pre($file_data);
						$data = array(
							'hoten' => $hoten,
							'email' => $email,
							'matkhau' => $matkhau,
							'truong' => $truong,
							'khoa' => $khoa,
							'ngaysinh' => $ngaysinh,
							'dantoc' => $dantoc,
							'tongiao' => $tongiao,
							'sochungminhthu' => $sochungminhthu,
							'dienthoai' => $dienthoai,
							'quoctich' => $quoctich,
							'trangthai' => 1,
							'anh' => link_banner('/'). $file_data['file_name']
						);
						if ($this->sinhvien_model->create($data)) {
							$this->session->set_flashdata('message', 'Thêm thành công');
							redirect(base_url('admin/students'));
						} else {
							$this->session->set_flashdata('message', 'Lỗi thao tác cơ sở dữ liệu');
						}
					} else {
						$data = array(
							'hoten' => $hoten,
							'email' => $email,
							'matkhau' => $matkhau,
							'truong' => $truong,
							'khoa' => $khoa,
							'ngaysinh' => $ngaysinh,
							'dantoc' => $dantoc,
							'tongiao' => $tongiao,
							'sochungminhthu' => $sochungminhthu,
							'dienthoai' => $dienthoai,
							'trangthai' => 1,
							'quoctich' => $quoctich,
							'anh' => link_banner('/'). $file_data['file_name']
						);
						if ($this->sinhvien_model->create($data)) {
							$this->session->set_flashdata('message', 'Thêm thành công');
							redirect(base_url('admin/students'));
						} else {
							$this->session->set_flashdata('message', 'Lỗi thao tác cơ sở dữ liệu');
						}
					}
				}else{
					$this->session->set_flashdata('message', 'chua dien du thong tin');
				}
			}
			//load view
			$this->data['temp'] = 'admin/students/add';
			$this->load->view('admin/main', $this->data);
		}
	function edit()
			{
			//lay nội dung của biến message
			$message = $this->session->flashdata('message');
			$this->data['message'] = $message;

			$id = $this->uri->segment(4);
			$sinhvien_edit = $this->sinhvien_model->get_info($id);
            //        pre($banner);
			if (!$sinhvien_edit) {
				redirect(base_url('admin/students'));
			}
			if ($this->input->post('btnEdit')) {
				$data = array(
				'hoten' => $this->input->post('hoten'),
				'email' => $this->input->post('email'),
				'matkhau' => $this->input->post('matkhau'),
				'truong' => $this->input->post('truong'),
				'khoa' => $this->input->post('khoa'),
				'ngaysinh' => $this->input->post('ngaysinh'),
				'dantoc' => $this->input->post('dantoc'),
				'tongiao' => $this->input->post('tongiao'),
				'sochungminhthu' => $this->input->post('sochungminhthu'),
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
				if ($this->sinhvien_model->update($id, $data)) {
					$this->session->set_flashdata('message', 'Cập nhật thành công');
					redirect(base_url('admin/students'));
				} else {
					$this->session->set_flashdata('message', 'Lỗi thao tác cơ sở dữ liệu');
				}
			}

			//load view
			$this->data['res'] = $sinhvien_edit;
			$this->data['temp'] = 'admin/students/edit';
			$this->load->view('admin/main', $this->data);
	}

    function del()
	{
		$id = $this->uri->segment(4);
		$sinhvien_del = $this->sinhvien_model->get_info($id);
		if ($sinhvien_del) {
			$this->sinhvien_model->delete($id);
			// unlink('./public/images/product/' . $product->img);
		}
		redirect(base_url('admin/students'));
	}
}
