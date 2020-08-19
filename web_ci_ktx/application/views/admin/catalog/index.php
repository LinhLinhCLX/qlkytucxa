<?php if (isset($message)) {
    $this->load->view('admin/message', $this->data);
} ?>
<div class="main-content">
  <div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
	  <div class="x_panel">
		<div class="x_title">
		  <div  class="col-md-12">
			<a href="<?php echo admin_url('catalog/add'); ?>">
			<button type="button" class="btn btn-success">Thêm</button></a>
		  </div>
		  <h2  class="col-md-6">Danh sách phong</h2>
		  <div class="clearfix"></div>
		</div>
		<div class="x_content">
		  <table id="datatable" class="table table-striped table-bordered" style="width:100%">
			<thead>
			  <tr>
				<th>id</th>
				<th>Toa nha</th>
				<th>Tang</th>
				<th>Phong</th>
				<th>Trang thai</th>
				<th>Ngay tao</th>
			  </tr>
			</thead>
			<tbody>
			  <?php $i=0; ?>
			  <?php foreach ($list as $row) { $i++;?>
				  <tr>
					<td><?php echo $i ?></td>
					<td><?php echo $row->toanha?></td>
					<td><?php echo $row->tang?></td>
					<td><?php echo $row->phong?></td>
					<td><?php echo $row->ngaytaokhuphong ?></td>
					<td>
					 <a class="btn btn-info btn-xs" href="<?php echo base_url('admin/catalog/edit/'.$row->id)?>"><i class="fa fa-pencil"></i> Sửa</a>
					<!--<a class="btn btn-xs btn-danger" onclick="confirmDel(<?php echo $row->id?>)"><i class="fa fa-trash-o"></i> Xóa</a>-->
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
                window.location.href = '<?php echo base_url('admin/catalog/del/')?>' + id;
            }
        }
</script>
