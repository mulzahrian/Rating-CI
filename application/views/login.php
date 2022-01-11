<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Masukan dan Saran</title>
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

  body {
    background-size: cover;
    background-attachment: fixed;
    background-image : url("bg.jpg");
    background-color :#fbfafc;

}

.checked {
    color: orange;


    
}

.btn-primary {
    color: #fff;
    background-color: #222831;
    border-color: #222831
}

.container{
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100%;
}

.rating-wrap{
  max-width: 480px;
  margin: auto;
  padding: 15px;
  box-shadow: 0 0 3px 0 rgba(0,0,0,.2);
  text-align: center;
}

.center{
  width: 170px; 
  margin: auto;
}


#rating-value{  
  width: 110px;
  margin: 40px auto 0;
  padding: 10px 5px;
  text-align: center;
  box-shadow: inset 0 0 2px 1px rgba(46,204,113,.2);
}

/*styling star rating*/
.rating{
  border: none;
  float: left;
}

.rating > input{
  display: none;
}

.rating > label:before{
  content: '\f005';
  font-family: FontAwesome;
  margin: 5px;
  font-size: 2.5rem;
  display: inline-block;
  cursor: pointer;
}

.rating > .half:before{
  content: '\f089';
  position: absolute;
  cursor: pointer;
}


.rating > label{
  color: #ddd;
  float: right;
  cursor: pointer;
}

.rating > input:checked ~ label,
.rating:not(:checked) > label:hover, 
.rating:not(:checked) > label:hover ~ label{
  color: #dcaa2d;
}

.rating > input:checked + label:hover,
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label,
.rating > input:checked ~ label:hover ~ label{
  color: #dcaa2d;
}

</style>
</head>

<body class="hold-transition">
   
  <div class="login col-sm-4"></div>
  <div class="login-box col-sm-4">
    <div class="login-logo">
      <h1>
        <font color="white"><b>Masukan Dan Saran</b></font>

      </h1>
      
    </div>
    <!-- /.login-logo -->
    <div class="login">
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
      <div class="col-sm-6">
        
      </div>
      <div class="col-sm-12 ">


      <?php echo form_open('masukan/add_kritik', array('class' => 'form-horizontal')) ?>
                        <div class="contact-form">
                                <div class="form-group">
                                    <input type="text" name="nama" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="masukkan" class="form-control" rows="8" placeholder="Message" required></textarea>
                                </div>
                                 <div class="form-group" align="center">
      <div class="center">
        <fieldset class="rating">
          <input type="radio" id="star5" name="bintang" value="5"/><label for="star5" class="full" title="Awesome"></label>
          <input type="radio" id="star4.5" name="bintang" value="4.5"/><label for="star4.5" class="half"></label>
          <input type="radio" id="star4" name="bintang" value="4"/><label for="star4" class="full"></label>
          <input type="radio" id="star3.5" name="bintang" value="3.5"/><label for="star3.5" class="half"></label>
          <input type="radio" id="star3" name="bintang" value="3"/><label for="star3" class="full"></label>
          <input type="radio" id="star2.5" name="bintang" value="2.5"/><label for="star2.5" class="half"></label>
          <input type="radio" id="star2" name="bintang" value="2"/><label for="star2" class="full"></label>
          <input type="radio" id="star1.5" name="bintang" value="1.5"/><label for="star1.5" class="half"></label>
          <input type="radio" id="star1" name="bintang" value="1"/><label for="star1" class="full"></label>
          <input type="radio" id="star0.5" name="bintang" value="0.5"/><label for="star0.5" class="half"></label>
        </fieldset>
      </div>

        <textarea name="bintang" id="ratingvalue" style="display:none;"></textarea>
                <!-- test -->

               

                <!-- end -->
                        </div>
                    </div>
      <div class="row">
        <div class="col-xs-4">
          <a href="<?php echo base_url();?>masukan/login" class="btn btn-primary btn-block btn-flat" >Login</a> 
        </div>

         <div class="col-sm-4">
         
        </div>
        <!-- /.col -->
        <div class="col-sm-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Tambah</button>
        </div>

       
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
let bintang = document.querySelectorAll('input');
let showValue = document.querySelector('#ratingvalue');

for (let i = 0; i < bintang.length; i++) {
  bintang[i].addEventListener('click', function() {
    i = this.value;

    showValue.innerHTML = i ;
  });
}

</script>

</body>
</html>
