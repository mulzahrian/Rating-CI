<section class="content-header">
	<h1>
		HOME
	</h1>
	<ol class="breadcrumb">
		

	</ol>
</section>
<!-- Main content -->
<!-- Main content -->
<section class="content">
	<div class="row">
		<!-- left column -->
		<div class="col-md-12">
			<div class="box">
				<div class="box-header with-border">
				</div>

				<!-- card -->



				<!-- end card -->
				<!-- /.box-header -->
				<div class="box-body with-border ">
					<table id="example1" class="table with-border  table-striped">
						<tbody>
							
							<?php

							foreach ($acara as $data) { ?>
							
								<tr>
									<div class="col-lg-6 col-xs-12">
										<!-- small box -->
										<div class="small-box  table-bordered bg-aqua-active">
											<div class="inner">
											<div class="text-uppercase">
												<h4 align="center"><?php echo $data->kegiatan; ?></h4>
												<div style="display: none;" class="no_ruangan"></div>
											</div>
											</div>
										</div>
										

											<!-- TEST -->
											<div class="col-lg-6 small-box-footer bg-white table-bordered" >
												<div class="text-uppercase">
												<h4 align="center" >
												<?php echo $data->lokasi; ?>
												</h4>
												</div>
											</div>
								

											<div class="col-lg-6 small-box-footer bg-white table-bordered" >
												<div class="text-uppercase">
													<h4 align="center" >
													<?php echo $data->ruangan; ?>
												</h4>
											</div>
											</div>										

											<div class="col-lg-6 small-box-footer bg-white table-bordered" >
												<div class="text-uppercase">
												<h4 align="center" >
													<img src="user.png" height="20" width="20" />&nbsp;
													<?php echo $data->pic; ?>
												</h4>
											</div>
											</div>

											<div class="col-lg-6 small-box-footer bg-white table-bordered " >
												<h4 align="center">
													<img src="unnamed.png" height="20" width="20" /> &nbsp;
													<?php echo $data->kontak; ?> 
												</h4>
											</div>


											
							
											<div class="col-lg-6 small-box-footer bg-white table-bordered" >
												<h4 align="center">
												<?php 
													$hari = date('l');
													$hari_indonesia = array('Monday' => 'Senin' ,
														'Tuesday' => 'Selasa',
														'Wednesday' => 'Rabu',
														'Thursday' => 'Kamis',
														'Friday' => 'Jumat',
														'Saturday' => 'Sabtu',
														'Sunday' => 'Minggu' );
													echo "" .$hari_indonesia[$hari]; ?>  &nbsp;
												<?php echo $data->tanggal; ?>
											</h4>
											</div>

											<div class="col-lg-3 small-box-footer bg-white table-bordered " >
												<h4 align="center" >
												<?php echo $data->jam_mul; ?>

											</h4>
											</div>

											<div class="col-lg-3 small-box-footer bg-white table-bordered " >
												<h4 align="center">
												<?php echo $data->jam_sel; ?>
												
											</h4>

											</div>
											<div class="box-footer with-border">
											</div>
											<br>
								</div>
							</tr>
							</div>
					<?php } ?>
						</tbody>
					</table>
				</div>
				
			</div>
		</div>
	</div>
	<!-- /.row -->
</section>

