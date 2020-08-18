
<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header">Sửa bài viết</div>
						<div class="card-body card-block">
							<form action="<?php echo admin_url('News/update'); ?>/<?php echo $news->id ?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
								<div class="row form-group">
									<div class="col col-md-3">
										<label for="text-input" class=" form-control-label">Tiêu đề: </label>
									</div>
									<div class="col-12 col-md-9">
										<input type="text" id="text-input" name="tieude" placeholder="Nhập Tiêu đề" class="form-control" value="<?php echo $news->tieude ?>">
									</div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3">
										<label for="textarea-input" class=" form-control-label">Nội dung</label>
									</div>
									<div class="col-12 col-md-9">
										<textarea name="noidung" id="textarea-input" rows="9" placeholder="Nội dung..." class="form-control"><?php echo $news->noidung ?></textarea>
									</div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3">
										<label for="file-input" class=" form-control-label">Ảnh đại diện</label>
									</div>
									<div class="col-12 col-md-9">
										<input type="text"  name="anhbaiviet" class="form-control	" value="<?php echo $news->anhbaiviet ?>">

									</div>
								</div>
								<input type="submit" class="btn btn-danger " value="Lưu">
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
