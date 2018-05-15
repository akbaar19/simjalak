<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sign In | SIM JALAK</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, userscalable=no" name="viewport">

 <!--Favicon-->

 <link rel="icon" href="<?=base_URL()?>assets/logo.png"
type="image/png">


 <!--Bootstrap 3.3.7-->

<link rel="stylesheet" href="<?=base_URL()?>assets/components/bootstrap/dist/css/bootstrap.min.css">


 <!--Font Awesome-->

 <link rel="stylesheet" href="<?=base_URL()?>assets/components/fontawesome/css/font-awesome.min.css">

 <!--Font Sans Google-->

 <link rel="stylesheet" href="<?=base_URL()?>assets/components/font-google/sansgoogle.css">


 <!--Ionicons-->

 <link rel="stylesheet" href="<?=base_URL()?>assets/components/Ionicons/css/ionicons.min.css">

 <!--Theme style-->

 <link rel="stylesheet" href="<?=base_URL()?>assets/adminlte/css2/AdminLTE.min.css">

 <!--iCheck-->

 <link rel="stylesheet" href="<?=base_URL()?>assets/plugins/iCheck/square/blue.css">




 <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries ->


 <!--
WARNING:
Respond.js
doesn't
work
if
you
view
the
page
via
file://
-->


 <!--[if
lt
IE
9]>


 <script
src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>


 <script
src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


 <![endif]-->



</head>

<body class="hold-transition login-page">

<div class="login-box">




 <!--
/.login-logo
-->


 <div class="login-box-body">


   <div class="login-logo">


     <a href="<?=base_URL()?>"><b>SIM</b>JALAK</a>


     <p class="login-box-msg" style="font-size: 20px"><i><b>Sistem Informasi Manajemen</b>Jadwal Laboratorium Komputer</i></p>


     <p class="login-box-msg" style="font-size: 15px; color:cornflowerblue"><b>SMK INDONESIA PUSAKA</b></p><hr>

   </div>

    <!-- notifikasi Masuk -->
    <?php
        if($this->session->flashdata('berhasil')) {
            echo '<div class="alert alert-success alert-dismissable"><i class="fa fa-check"></i>
&nbsp; '.$this->session->flashdata('berhasil').'</div>';
        
        } else if($this->session->flashdata('gagal')) {
        echo '<div class="alert alert-danger"><button type="button" class="close" datadismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong><i
class="ace-icon fa fa-ban"></i>GAGAL!<br></strong>'.$this->session->flashdata('gagal').'</div>';

}
   ?>

   <?=form_open('auth/checkAuth','method="post"')?>


     <div class="form-group has-feedback">

<input type="text" name="username" class="form-control" maxlength="20" placeholder="Username" required autofocus>

<span class="glyphicon glyphicon-user form-control-feedback"></span>


     </div>

     <div class="form-group has-feedback">

<input type="password" name="password" class="form-control" placeholder="Password" required autofocus>

<span class="glyphicon glyphicon-lock form-control-feedback"></span>

     </div>

<div class="row">

<div class="col-xs-8">

<div class="checkbox icheck">

<label>

<input type="checkbox">&nbsp; Remember me ?</label>

</div>
</div>


<!--/.col
-->

<div class="col-xs-4">
<button type="submit" name="submit" class="btn btn-primary btn-block btnflat">Sign In &nbsp;
  <i class="fa fa-sign-in"></i></button>

</div>

<!--/.col
-->

     </div>

   <?=form_close()?>

 </div>


 <!--
/.login-box-body
-->

 <hr>

 <!--
footer
-->

 <div class="text-center">Hak Cipta &copy; 2018 &nbsp;<a href="<?=base_URL()?>"><strong>SIMJALAK</strong></a>
 </div>


 <!--
/.footer
-->

 <hr>

</div>

<!--/.login-box
-->

<!-- jQuery 3 -->
<script src="<?=base_URL()?>assets/components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_URL()?>assets/adminlte/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?=base_URL()?>assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html> 


