<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
				<form action="" method="post" data-parsley-validate enctype="multipart/form-data" class="form-horizontal">
					<div class="card">
						<div class="card-header">Sua Phòng</div>
						<div class="card-body card-block">
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="text-input" class=" form-control-label">Toa nha : </label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" id="text-input" name="toanha" value="<?php echo $res->toanha ?>" placeholder="Nhập toa nha" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="email-input" class=" form-control-label">SO taang</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="number" id="email-input" name="tang" value="<?php echo $res->tang ?>" placeholder="Nhập so tang" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3">
									<label for="password-input" class=" form-control-label">So phong</label>
								</div>
								<div class="col-12 col-md-9">
									<input type="text" id="password-input" name="phong" value="<?php echo $res->phong ?>" placeholder="Nhập so phong" class="form-control">
								</div>
							</div>

						</div>
						<div class="card-footer">
							<input type="submit" id="btnAddEvent" name="btnEdit" required="required" class="btn btn-primary btn-sm" value="Submit">
							<a href="<?php echo admin_url('catalog/edit'); ?>"> <input type="submit" class="btn btn-danger btn-sm" value="Reset"></a>
						</div>
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>
