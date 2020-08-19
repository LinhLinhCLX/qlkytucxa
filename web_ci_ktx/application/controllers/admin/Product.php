<?php
Class Product extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        //load ra file model
        $this->load->model('thietbi_model');
    }
    function index()
    {
        $list = $this->thietbi_model->get_list();
        $this->data['list'] = $list;
        //lay nội dung của biến message
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;

        //load view
        $this->data['temp'] = 'admin/product/index';
        $this->load->view('admin/main', $this->data);
    }

    /*
     * Them san pham moi
     */
    function add()
    {
        $message = $this->session->flashdata('message');
		$this->data['message'] = $message;

		if ($this->input->post('btnAdd')) {
			$thietbi = $this->input->post('thietbi');
			$soluong = $this->input->post('soluong');
			$trangthai = $this->input->post('trangthai');
				$data = array(
					'thietbi' => $thietbi,
					'soluong' => $soluong,
					'trangthai' => $trangthai,
				);
			if ($this->thietbi_model->create($data)) {
				$this->session->set_flashdata('message', 'Thêm thành công');
				redirect(base_url('admin/product'));
			} else {
				$this->session->set_flashdata('message', 'Lỗi thao tác cơ sở dữ liệu');
			}
		}

        //load view
        $this->data['temp'] = 'admin/product/add';
        $this->load->view('admin/main', $this->data);
    }

    /*
     * Chinh sua san pham
     */
    function edit()
    {
    	$message = $this->session->flashdata('message');
		$this->data['message'] = $message;

		$id = $this->uri->segment(4);
		$thietbi_edit = $this->thietbi_model->get_info($id);
		if (!$thietbi_edit) {
			redirect(base_url('admin/product'));
		}
		if ($this->input->post('btnEdit')) {
			$data = array(
				'thietbi' => $this->input->post('thietbi'),
				'soluong' => $this->input->post('soluong'),
				'trangthai' => $this->input->post('trangthai'),
			);
			if ($this->thietbi_model->update($id, $data)) {
				$this->session->set_flashdata('message', 'Cập nhật thành công');
				redirect(base_url('admin/product'));
			} else {
				$this->session->set_flashdata('message', 'Lỗi thao tác cơ sở dữ liệu');
			}
		}
		$this->data['res'] = $thietbi_edit;

        //load view
        $this->data['temp'] = 'admin/product/edit';
        $this->load->view('admin/main', $this->data);
    }

    /*
     * Xoa du lieu
     */
    function del()
    {
		$id = $this->uri->segment(4);
		$thietbi_del = $this->thietbi_model->get_info($id);
		if ($thietbi_del) {
			$this->thietbi_model->delete($id);
			// unlink('./public/images/product/' . $product->img);
		}
		redirect(base_url('admin/product'));
	}
}
