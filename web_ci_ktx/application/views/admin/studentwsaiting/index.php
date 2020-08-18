<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<!-- DATA TABLE -->
					<h3 class="title-5 m-b-35">data table</h3>
					<div class="table-data__tool">
						<div class="table-data__tool-right">
						<a href="<?php echo admin_url('students/add'); ?>">
							<button class="au-btn au-btn-icon au-btn--green au-btn--small">
								<i class="zmdi zmdi-plus"></i>add item</button>
								</a>
					   </div>
					</div>
					<div class="table-responsive table-responsive-data2">
						<table class="table table-data2">
							<thead>
								<tr>
									<th>name</th>
									<th>email</th>
									<th>description</th>
									<th>date</th>
									<th>status</th>
									<th>price</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr class="tr-shadow">
									<td>Lori Lynch</td>
									<td>
										<span class="block-email">lori@example.com</span>
									</td>
									<td class="desc">Samsung S8 Black</td>
									<td>2018-09-27 02:12</td>
									<td>
										<span class="status--process">Processed</span>
									</td>
									<td>$679.00</td>
									<td>
										<div class="table-data-feature">
											<button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
												<i class="zmdi zmdi-edit"></i>
											</button>
											<button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
												<i class="zmdi zmdi-delete"></i>
											</button>

										</div>
									</td>
								</tr>
								<tr class="spacer"></tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
