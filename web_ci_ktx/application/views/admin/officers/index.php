<?php if (isset($message)) {
    $this->load->view('admin/message', $this->data);
} ?>
<div class="main-content">
  <div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
	  <div class="x_panel">
		<div class="x_title">
		  <div  class="col-md-12">
			<a href="<?php echo admin_url('officers/add'); ?>">
			<button type="button" class="btn btn-success">Thêm</button></a>
		  </div>
		  <h2  class="col-md-6">Danh sách can bo</h2>
		  <div class="clearfix"></div>
		</div>
		<div class="x_content">
		  <table id="datatable" class="table table-striped table-bordered" style="width:100%">
			<thead>
			  <tr>
				<th>id</th>
				<th>anh</th>
				<th>ho ten</th>
				<th>chung minh thu</th>
				<th>dien thoai</th>
				<th>chuc vu</th>
				<th>Hanh dong</th>
			  </tr>
			</thead>
			<tbody>
			  <?php $i=0; ?>
			  <?php foreach ($list as $row) { $i++;?>
				  <tr>
					<td><?php echo $i ?></td>
					<td><img src="<?php echo $row->anh?>" alt="CoolAdmin" style="width:100px;height:70px"></td>
					<td><?php echo $row->hoten?></td>
					<td><?php echo $row->chungminhthu?></td>
					<td><?php echo $row->dienthoai?></td>
					<td><?php echo $row->chucvu?></td>
					<td>
					 <a class="btn btn-info btn-xs" href="<?php echo base_url('admin/officers/edit/'.$row->id)?>"><i class="fa fa-pencil"></i> Sửa</a>
					<a class="btn btn-xs btn-danger" onclick="confirmDel(<?php echo $row->id?>)"><i class="fa fa-trash-o"></i> Xóa</a>
					</td>
				  </tr>
			  <?php }?>
			</tbody>
		  </table>
		</div>
	  </div>
	</div>
  </div>
</div>
<script>
     function confirmDel(id) {
            if (confirm('Bạn có chắc chắc muốn xoa không!')) {
                window.location.href = '<?php echo base_url('admin/officers/del/')?>' + id;
            }
        }
</script>
