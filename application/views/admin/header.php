<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?=$title?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, userscalable=no" name="viewport">
 <!--Favicon-->
 <link rel="icon" href="<?=base_URL()?>assets/logo.png" type="image/png">

 <!--Bootstrap3.3.7-->

 <link rel="stylesheet" href="<?=base_URL()?>assets/components/bootstrap/dist/css/bootstrap.min.css">

<!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_URL()?>assets/components/fontawesome/css/font-awesome.min.css">


 <!--
Font
Sans
Google
-->


 <link rel="stylesheet" href="<?=base_URL()?>assets/components/font-google/sansgoogle.css">




 <!--
Ionicons
-->


 <link rel="stylesheet" href="<?=base_URL()?>assets/components/Ionicons/css/ionicons.min.css">


 <!--
DataTables
-->


 <link rel="stylesheet" href="<?=base_URL()?>assets/components/datatables.netbs/css/dataTables.bootstrap.min.css">


 <!--bootstrap
datepicker
-->


 <link rel="stylesheet" href="<?=base_URL()?>assets/components/bootstrapdatepicker/dist/css/bootstrap-datepicker.min.css">


 <!--
Select2
-->


 <link rel="stylesheet" href="<?=base_URL()?>assets/components/select2/dist/css/select2.min.css">



  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?=base_URL()?>assets/plugins/timepicker/bootstraptimepicker.min.css">


 <!--
iCheck
for
checkboxes
and
radio
inputs
-->


 <link rel="stylesheet" href="<?=base_URL()?>assets/plugins/iCheck/all.css">


 <!--
Pace
style
-->


 <link rel="stylesheet" href="<?=base_URL()?>assets/plugins/pace/pace.min.css">




 <!--
Theme
style
-->


 <link rel="stylesheet" href="<?=base_URL()?>assets/adminlte/css/AdminLTE.min.css">


 <!--
AdminLTE
Skins.
Choose
a
skin
from
the
css/skins

folder
instead
of
downloading
all
of
them
to
reduce
the
load.
-->


 <link rel="stylesheet" href="<?=base_URL()?>assets/adminlte/css/skins/skinblue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries ->


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


<?php

 $usr = $this->db->get_where('tbl_user', array('username' => $this->session->userdata('username')))->row_array();

 $foto = 'avatar.jpg';


 if($usr['foto'] && file_exists('assets/images/user/'.$usr['foto']))
{

$foto = $usr['foto'];

 }

?>



<!--
ADD
THE
CLASS
fixed
TO
GET
A
FIXED
HEADER
AND
SIDEBAR
LAYOUT
->

<!--
the
fixed
layout
is
not
compatible
with
sidebar-mini
-->

<body class="hold-transition skin-blue fixed sidebar-mini">


<!-- Site wrapper -->
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="<?=base_URL()?>dashboard" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>JL</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SIM</b> JALAK</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="javascript:void(0)" class="sidebar-toggle" data-toggle="push-menu"
role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=base_URL().'assets/images/user/'.$foto?>" class="user-image"
alt="Foto Profil">
              <span class="hidden-xs"><?=$usr['nama']?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=base_URL().'assets/images/user/'.$foto?>" class="img-circle" alt="Foto Profil">
                <p>
                  <?=$usr['nama']?>
                  <small>Administrator</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?=base_URL()?>pengguna/profil_saya" class="btn btn-default btn-flat">Profil Saya</a>
                </div>
                <div class="pull-right">
                  <a href="<?=base_URL()?>auth/signout" class="btn btn-default btnflat">Sign out</a>


</div>

</li>

</ul>

</li>

</ul>


     </div>


   </nav>


 </header>


 <!--
===============================================
-->


