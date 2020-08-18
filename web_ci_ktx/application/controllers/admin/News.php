<?php
Class News extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('baiviet_model');
    }
    function index()
    {
        // $input['where']['trangthai'] = 1;
        // $list = $this->baiviet_model->get_list($input);

        //lay nội dung của biến message
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $list_news = $this->baiviet_model->get_list("");
        // var_dump($list_news);
        // exit;
        $this->data['list_news'] = $list_news;
        //load view
        $this->data['temp'] = 'admin/news/index';
        $this->load->view('admin/main', $this->data);
    }
    public function add()
    {
        //lay nội dung của biến message
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;

        //load view
        $this->data['temp'] = 'admin/news/add';
        $this->load->view('admin/main', $this->data);
    }
    public function save()
    {
        echo "save add news";
        
        $news["tieude"]=(isset($_POST["tieude"]))?$_POST["tieude"]:"";
        $news["noidung"]=(isset($_POST["noidung"]))?$_POST["noidung"]:"";
        $news["anhbaiviet"]=(isset($_POST["anhbaiviet"]))?$_POST["anhbaiviet"]:"";
        // echo "<pre>";
        // var_dump($_POST);
        // exit;
        if($news["tieude"]!=""){
            if($this->baiviet_model->create($news))
                redirect("admin/news/index","refresh");
            else 
                echo"thêm không thành công";
            return;
        }
        echo "chua co du lieu";
        return;
    }
    public function edit()
    {

        //lay id cua quan tri vien can chinh sua
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        //lay thong cua quan trị viên
        // echo "<pre>";
        // var_dump($this->baiviet_model->get_info($id));
        // exit;
        if($this->baiviet_model->get_info($id)){
            $this->data['temp'] = 'admin/news/edit';
            $this->data['news'] = $this->baiviet_model->get_info($id);
            $this->load->view('admin/main', $this->data);
        }
        else{
            return redirect('admin/news/index');
        }
    }
    public function update()
    {
        $id = $this->uri->rsegment('3');
        $id = intval($id);

        $baiviet_edit = $this->baiviet_model->get_info($id);
        if (!$baiviet_edit) {
            redirect(base_url('admin/news'));
        }
        $news["tieude"]=(isset($_POST["tieude"]))?$_POST["tieude"]:"";
        $news["noidung"]=(isset($_POST["noidung"]))?$_POST["noidung"]:"";
        $news["anhbaiviet"]=(isset($_POST["anhbaiviet"]))?$_POST["anhbaiviet"]:"";
        // echo "<pre>";
        // var_dump($_POST);
        // exit;
        if($news["tieude"]!=""){
            if($this->baiviet_model->update($id,$news))
                redirect("admin/news/index","refresh");
            else 
                echo"Sửa không thành công";
            return;
        }

    }

    public function delete()
    {
        //lay id cua quan tri vien can chinh sua
        $id = $this->uri->rsegment('3');
        $id = intval($id);

        // echo "delete bài viết".$id;

        // $id = $this->uri->segment(4);
        $sinhvien_del = $this->baiviet_model->get_info($id);
        if ($sinhvien_del) {
            $this->baiviet_model->delete($id);
            // unlink('./public/images/product/' . $product->img);
        }
        redirect(base_url('admin/news'));
    }

}
