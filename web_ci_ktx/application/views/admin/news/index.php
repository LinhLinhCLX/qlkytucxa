<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<!-- DATA TABLE -->
					<h3 class="title-5 m-b-35">Danh sách bài viết</h3>
					<div class="table-data__tool">
						<div class="table-data__tool-right">
						<a href="<?php echo admin_url('News/add'); ?>">
							<button class="au-btn au-btn-icon au-btn--green au-btn--small">
								<i class="zmdi zmdi-plus"></i>Thêm bài viết</button>
								</a>
					   </div>
					</div>
					<div class="table-responsive table-responsive-data2">
						<table class="table table-data2">
							<thead>
								<tr>
									<th>Tiêu đề</th>
									<th>Ảnh</th>
									<th>Hành động</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($list_news as $item):?>
								<tr class="tr-shadow">
									<td class="desc"><?php echo $item->tieude ?></td>
									<td>
										<img src="<?php echo $item->anhbaiviet ?>" alt="<?php echo $item->tieude ?>" style="width:60px; height: 60px;">
									</td>
									<td>
										<div class="table-data-feature">
											<a href="<?php echo admin_url('News/edit'); ?>/<?php echo $item->id ?>"><button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
												<i class="zmdi zmdi-edit"></i>
											</button></a>
											<a href="<?php echo admin_url('News/delete'); ?>/<?php echo $item->id ?>"><button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
												<i class="zmdi zmdi-delete"></i>
											</button></a>

										</div>
									</td>
								</tr>
								<tr class="spacer"></tr>
								<?php endforeach ?>
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
