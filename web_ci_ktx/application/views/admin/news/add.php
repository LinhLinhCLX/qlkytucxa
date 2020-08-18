<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header">Thêm bài viết</div>
						<div class="card-body card-block">
							<form action="<?php echo admin_url('News/save'); ?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
								<div class="row form-group">
									<div class="col col-md-3">
										<label for="text-input" class=" form-control-label">Tiêu đề: </label>
									</div>
									<div class="col-12 col-md-9">
										<input type="text" id="text-input" name="tieude" placeholder="Nhập Tiêu đề" class="form-control">
										<!-- <small class="form-text text-muted">This is a help text</small> -->
									</div>
								</div>
								<!-- <div class="row form-group">
									<div class="col col-md-3">
										<label for="email-input" class=" form-control-label">Email</label>
									</div>
									<div class="col-12 col-md-9">
										<input type="email" id="email-input" name="email-input" placeholder="Nhập Email" class="form-control">
										<small class="help-block form-text">Please enter your email</small> 
									</div>
								</div> -->
								<div class="row form-group">
									<div class="col col-md-3">
										<label for="textarea-input" class=" form-control-label">Nội dung</label>
									</div>
									<div class="col-12 col-md-9">
										<textarea name="noidung" id="textarea-input" rows="9" placeholder="Nội dung..." class="form-control"></textarea>
									</div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3">
										<label for="file-input" class=" form-control-label">Ảnh đại diện</label>
									</div>
									<div class="col-12 col-md-9">
										<input type="file" id="file-input" name="anhbaiviet" class="form-control-file">
									</div>
								</div>
								<input type="submit" class="btn btn-danger " value="Lưu">
							</form>
						</div>
						<div class="card-footer">
							<!-- <a href="<?php echo admin_url('News/save'); ?>" >  -->
								
									<!-- <i class="fa fa-dot-circle-o"></i> Lưu -->
								<!-- </button> -->
							<!-- </a> -->
							<!-- <button type="submit" class="btn btn-danger btn-sm">
								<i class="fa fa-ban"></i> Lưu
							</button> -->
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
