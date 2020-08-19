<?php
Class Catalog extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('khuphong_model');
    }

    /*
     * Lay ra danh sach danh muc san pham
     */
    function index()
    {
        $list = $this->khuphong_model->get_list();
		$this->data['list'] = $list;
		//lay nội dung của biến message
		$message = $this->session->flashdata('message');
		$this->data['message'] = $message;

        //load view
        $this->data['temp'] = 'admin/catalog/index';
        $this->load->view('admin/main', $this->data);
    }

    /*
     * Them moi du lieu
     */
    function add()
    {
    	$message = $this->session->flashdata('message');
		$this->data['message'] = $message;

		if ($this->input->post('btnAdd')) {
			$toanha = $this->input->post('toanha');
			$tang = $this->input->post('tang');
			$phong = $this->input->post('phong');
				$data = array(
					'toanha' => $toanha,
					'tang' => $tang,
					'phong' => $phong,
				);
			if ($this->khuphong_model->create($data)) {
				$this->session->set_flashdata('message', 'Thêm thành công');
				redirect(base_url('admin/catalog'));
			} else {
				$this->session->set_flashdata('message', 'Lỗi thao tác cơ sở dữ liệu');
			}
		}
        $this->data['temp'] = 'admin/catalog/add';
        $this->load->view('admin/main', $this->data);
    }

    /*
     * Cập nhật du lieu
     */
    function edit()
    {
    	$id = $this->uri->segment(4);
		$khuphong_edit = $this->khuphong_model->get_info($id);
		if (!$khuphong_edit) {
			redirect(base_url('admin/catalog'));
		}
		if ($this->input->post('btnEdit')) {
			$data = array(
				'toanha' => $this->input->post('toanha'),
				'tang' => $this->input->post('tang'),
				'phong' => $this->input->post('phong'),
			);
			if ($this->khuphong_model->update($id, $data)) {
				$this->session->set_flashdata('message', 'Cập nhật thành công');
				redirect(base_url('admin/catalog'));
			} else {
				$this->session->set_flashdata('message', 'Lỗi thao tác cơ sở dữ liệu');
			}
		}
		$this->data['res'] = $khuphong_edit;

        $this->data['temp'] = 'admin/catalog/edit';
        $this->load->view('admin/main', $this->data);
    }

    /*
	 * Xoa du lieu
	 */
	function del()
	{
		$id = $this->uri->segment(4);
		$khuphong_del = $this->khuphong_model->get_info($id);
		if ($khuphong_del) {
			$this->khuphong_model->delete($id);
			// unlink('./public/images/product/' . $product->img);
		}
		redirect(base_url('admin/catalog'));
	}
}

