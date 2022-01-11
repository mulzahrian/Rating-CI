<!DOCTYPE html>
<html>
<head>
  <div class="navbar-custom-menu">

      <ul class="nav navbar-nav">
        <li class="user-menu">
          <a href="<?php echo base_url();?>login/logout" >
            <i class="fa fa-fw fa-sign-out"></i>LOGOUT
          </a>
        </li>
      </ul>
    </div>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.checked {
    color: orange;
    
}
</style>
</head>
<body class="hold-transition login-page">
  <div class="col-sm-12 ">
    <div class="login-logo">
      
      
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg"></p>

     
        <?php if ($this->session->flashdata('pesan')) { ?>
          <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          </button>
          <?php echo $this->session->flashdata('pesan'); ?>
        </div>
      <?php } else if ($this->session->flashdata('warning')) {
        ?>
        <div class="alert alert-warning alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <?php echo $this->session->flashdata('warning'); ?>
        </div>
      <?php } else if ($this->session->flashdata('gagal')) {
        ?>
        <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <?php echo $this->session->flashdata('gagal'); ?>
        </div>
      <?php } ?>

      <div class="col-sm-12 ">
      
                        <div class="contact-form">
                                
        
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th style="width: 10px">No</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Subject</th>
              <th>Masukkan</th>
              <th>Bintang</th>
            
              <th style="width: 60px">Action</th>
            </tr>
          </thead>
          <tbody>

            <?php
            $no = 1;
            foreach($isi as $list){
              ?>

              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $list->nama; ?></td>
                <td><?php echo $list->email;?></td>
                <td><?php echo $list->subject;?></td>
                <td><?php echo $list->masukkan;?></td>
                <td><?php echo $list->bintang;?></td>
                <!-- <td><?php echo $list->subject;?></td> -->
                <td>
                 
                  <button class="btn btn-danger" data-toggle="modal" data-target="#modal-delete <?php echo $list->id; ?>"  id="sa-params"><i class="fa fa-fw fa-trash"></i></button>
                </td>
              </tr> 

            <?php } ?>


                            </tbody>
                          </table>
                        </div>
                    </div>

                     <!-- Modal delete -->

            <?php 
              foreach($isi as $list){
                ?>
                <div class="modal fade" id="modal-delete <?php echo $list->id; ?>">
                  <div class="modal-dialog modal-sm">
                    <div class="modal-content">

                      <div class="modal-body">
                        <?php echo form_open('masukkan/delete_kritik', array('class' => 'form-horizontal')) ?>
                        <div class="box-body">
                          <center><img src="<?php echo base_url().'/'; ?>dist/img/non.png" width="30%">
                            <h4>Apakah Anda ingin menghapus data ini ?</h4></center>
                            <input type="hidden" name="id" value="<?php echo $list->id;?>">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-lg pull-left" data-dismiss="modal">No</button>
                            <button type="submit" class="btn btn-primary btn-lg">Yes</button>
                          </div>
                          <?php echo form_close(); ?>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                <?php }?>

                <!-- tutup modal delete -->
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label></label>
          </div>
        </div>
        <!-- /.col -->
       
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url();?>plugins/iCheck/icheck.min.js"></script>

<script>
var count;

function starmark(item)
{
count=item.id[0];
sessionStorage.starRating = count;
var subid= item.id.substring(1);
for(var i=0;i<5;i++)
{
if(i<count)
{
document.getElementById((i+1)+subid).style.color="orange";
}
else
{
document.getElementById((i+1)+subid).style.color="black";
}


}

}

function result()
{
if (!isNaN(count)) {
  $('input[name="bintang"]').val(count);

}else {
$('input[name="bintang"]').val(0);  
}

}

</script>

</body>
</html>
