<section class="content-header">
	<h1><i class="fa fa-calendar"></i>
		EVENT HARI INI
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
					<br>
					
				</div>

				<!-- card -->



				<!-- end card -->
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<tbody>
							
							<?php

							foreach ($acara as $data) { ?>
							
								<tr>
									<div class="col-lg-6 col-xs-12">
										<!-- small box -->
										<div class="small-box bg-aqua">
											<div class="inner">
												<h4 align="center"><?php echo $data->kegiatan; ?></h4>
												<div style="display: none;" class="no_ruangan"></div>
													
											</div>
											<!-- TEST -->
											<div class="col-lg-4 small-box-footer bg-orange " >
												<center >
													<?php echo $data->lokasi; ?>

											</center>
											</div>
											<div class="col-lg-4 small-box-footer bg-navy-active " >
												<center >
													<?php echo $data->pic; ?>

											</center>
											</div>
											<div class="col-lg-4 small-box-footer bg-navy " >
												<center >
													<?php echo $data->kontak; ?> 

											</center>
											</div>

											<div class="col-lg-4 small-box-footer alert-success " >
												<h4 align="center" >
													<?php echo $data->ruangan; ?>

											</h4>
											</div>

											<div class="col-lg-8 small-box-footer bg-lime " >
												<h4 align="center" >
													<?php echo $data->kegiatan; ?>

											</h4>
											</div>
											<div class="col-lg-4 small-box-footer bg-navy " >
												<center >
												<?php echo $data->hari; ?> 

											</center>
											</div>

											<div class="col-lg-4 small-box-footer bg-green " >
												<center >
												<?php echo $data->tanggal; ?> 

											</center>
											</div>

											<div class="col-lg-2 small-box-footer bg-purple " >
												<center >
												<?php echo $data->jam_mul; ?>

											</center>
											</div>

											<div class="col-lg-2 small-box-footer bg-purple-active " >
												<center >
												<?php echo $data->jam_sel; ?>

											</center>
											</div>

											<!-- baru -->
<?php } ?>

											<!-- TEST -->
										</div>
									</div>
								</tr>
								<!-- <button ></button> -->

								<!--modal edit  -->
							

						</tbody>
					</table>
				</div>
				
			</div>
		</div>
	</div>
	<!-- /.row -->
</section>

