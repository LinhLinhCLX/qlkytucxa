<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
				<form action="" method="post" data-parsley-validate enctype="multipart/form-data" class="form-horizontal">
					<div class="card">
						<div class="card-header">
							Thêm Thiết bị
						</div>
						<div class="card-body card-block">
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="text-input" class=" form-control-label">Ten thiet bi : </label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" id="text-input" name="thietbi" placeholder="Nhập ten thiet bi" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="email-input" class=" form-control-label">So luong</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="number" id="email-input" name="soluong" placeholder="Nhập so luong" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="password-input" class=" form-control-label">Trang thai</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" id="password-input" name="trangthai" placeholder="Nhập trang thai" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="select" class=" form-control-label">Khu phong</label>
								</div>
								<div class="col-12 col-md-9">
									<select name="select" id="select" class="form-control">
										<option value="0">--Chọn khu phong --</option>
										<option value="1">A01</option>
										<option value="2">A02</option>
									</select>
								</div>
							</div>
						</div>
						<div class="card-footer">
							<input type="submit" id="btnAddEvent" name="btnAdd" required="required" class="btn btn-primary btn-sm" value="Submit">
							<a href="<?php echo admin_url('product/add'); ?>"> <input type="submit" class="btn btn-danger btn-sm" value="Reset"></a>
						</div>
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>
