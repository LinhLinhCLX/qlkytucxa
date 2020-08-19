<div class="main-content">
  <div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
	  <div class="x_panel">
		<div class="x_title">
		  <h2  class="col-md-6">Danh sách sinh viên chờ duyệt đăng ký</h2>
		  <div class="clearfix"></div>
		</div>
		<div class="x_content">
		  <table id="datatable" class="table table-striped table-bordered" style="width:100%">
			<thead>
			  <tr>
				<th>id</th>
				<th>anh</th>
				<th>ho ten</th>
				<th>ma sinh vien</th>
				<th>dien thoai</th>
				<th>trang thai</th>
				<th>Hành động</th>

			  </tr>
			</thead>
			<tbody>
			  <?php $i=0; ?>
			  <?php foreach ($list as $row) { $i++;?>
				  <tr>
					<td><?php echo $i ?></td>
					<td><img src="<?php echo $row->anh?>" alt="CoolAdmin" style="width:100px;height:70px"></td>
					<td><?php echo $row->hoten?></td>
					<td><?php echo $row->masinhvien?></td>
					<td><?php echo $row->dienthoai?></td>
					<td>
					<?php
						$trangthai_a = $row->trangthai;
						if($trangthai_a == 1){
							echo 'Đang ở';
						}else if($trangthai_a == 2){
							echo 'Đang xin';
						}else if($trangthai_a == 3){
							echo 'Đã rời';
						}
					?>
					</td>
					<td>
					 <a class="btn btn-info btn-xs" onclick="confirmEdit(<?php echo $row->id?>)"><i class="fa fa-pencil"></i> Duyệt</a>
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
    function confirmEdit(id) {
        if (confirm('Bạn có chắc muốn duyệt người này không!')) {
            window.location.href = '<?php echo base_url('admin/students/list_edit/')?>' + id;
        }
    }
</script>

