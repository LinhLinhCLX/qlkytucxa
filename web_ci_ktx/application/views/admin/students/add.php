<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
				<form action="" method="post" data-parsley-validate enctype="multipart/form-data" class="form-horizontal">
					<div class="card">
						<div class="card-header">
							Thêm Cán bộ
						</div>
						<div class="card-body card-block">
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="text-input" class=" form-control-label">Họ tên: </label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" id="text-input" name="hoten" placeholder="Nhập họ tên" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="email-input" class=" form-control-label">Email</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="email" id="email-input" name="email" placeholder="Nhập Email" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="password-input" class=" form-control-label">Mật khẩu</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="password" id="password-input" name="matkhau" placeholder="Mật khẩu.." class="form-control">
								</div>
							</div>
							<!-- <div class="row form-group">
								<div class="col col-md-3">
									<label for="textarea-input" class=" form-control-label">Textarea</label>
								</div>
								<div class="col-12 col-md-9">
									<textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
								</div>
							</div> -->
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="select" class=" form-control-label">Giới tính</label>
								</div>
								<div class="col-12 col-md-9">
									<select name="select" id="select" class="form-control">
										<option value="0">--Chọn Giới Tính --</option>
										<option value="1">Nữ</option>
										<option value="2">Nam</option>
									</select>
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="first-name" class=" form-control-label">Ảnh đại diện</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="file" class="form-control" name="anh" id="anh">
								</div>
							</div>
							<!-- <div class="row form-group">
								<div class="col col-md-3">
									<label for="file-multiple-input" class=" form-control-label">Multiple File input</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="file" id="file-multiple-input" name="file-multiple-input" multiple="" class="form-control-file">
								</div>
							</div> -->
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="select" class=" form-control-label">Trạng thái tồn tại</label>
								</div>
								<div class="col-12 col-md-9">
									<select name="select" id="select" class="form-control">
										<option value="0">--Chọn trạng thái --</option>
										<option value="1">Ở nội trú</option>
										<option value="2">Ở ngoại trú</option>
										<option value="3"></option>
									</select>
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="text-input" class=" form-control-label">Trường: </label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" id="text-input" name="truong" placeholder="Nhập trường" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="email-input" class=" form-control-label">khoa</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" id="email-input" name="khoa" placeholder="Nhập khoa" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="text-input" class=" form-control-label">Ngày sinh: </label>
								</div>
								<div class="col-12 col-md-9">
									<input type="date" id="text-input" name="ngaysinh" placeholder="Nhập trường" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="email-input" class=" form-control-label">Dân tộc</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" id="email-input" name="dantoc" placeholder="Nhập khoa" class="form-control">
								</div>
							</div>

							<div class="row form-group">
								<div class="col col-md-3">
									<label for="text-input" class=" form-control-label">Tôn giáo: </label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" id="text-input" name="tongiao" placeholder="Nhập Tôn giáo" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="email-input" class=" form-control-label">Số chứng minh thư</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" id="email-input" name="sochungminhthu" placeholder="Nhập Số chứng minh thư" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="file-multiple-input" class=" form-control-label">Ảnh chứng minh thư</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="file" id="anhchungminhthu" name="anhchungminhthu" multiple="" class="form-control-file">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="text-input" class=" form-control-label">Số điện thoại: </label>
								</div>
								<div class="col-12 col-md-9">
									<input type="number" id="text-input" name="dienthoai" placeholder="Nhập Số điện thoại" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="email-input" class=" form-control-label">Quốc tịch</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" id="email-input" name="quoctich" placeholder="Nhập Quốc tịch" class="form-control">
								</div>
							</div>

							<div class="row form-group">
								<div class="col col-md-3">
									<label for="select" class=" form-control-label">Khu nhà</label>
								</div>
								<div class="col-12 col-md-9">
									<select name="select" id="select" class="form-control">
										<option value="0">--Chọn Khu nhà --</option>
										<option value="1">A</option>
										<option value="2">B</option>
									</select>
								</div>
							</div>

						</div>
						<div class="card-footer">
							<input type="submit" id="btnAddEvent" name="btnAdd" required="required" class="btn btn-primary btn-sm" value="Submit">
							<a href="<?php echo admin_url('students/add'); ?>"> <input type="submit" class="btn btn-danger btn-sm" value="Reset"></a>
						</div>
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>
