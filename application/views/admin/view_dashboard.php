<?php 
  $usr = $this->db->get_where('tbl_user', array('username' => $this->session->userdata('username')))->row_array();

 $foto = 'avatar.jpg';

 if($usr['foto'] && file_exists('assets/images/user/'.$usr['foto']))
{

$foto = $usr['foto'];

 }

?>

 <!--
Content
Wrapper.
Contains
page
content
-->


 <div class="content-wrapper">

   <!--
Content
Header
(Page
header)
-->

   <section class="content-header">


     <h1>Dashboard
<small>Control Manager</small>

     </h1>
     <ol class="breadcrumb">
        <li class="active"><i class="fa fa-dashboard"></i><span>Dashboard</span></li>

     </ol>


   </section>

   <!--
Main
content
-->


   <section class="content">

     <!--
Info
boxes
-->

     <div class="row">

            <div class="col-md-3 col-sm-6 col-xs-12">

            <div class="info-box">

            <span class="info-box-icon bg-purple"><i class="fa fa-home"></i></span>

            <div class="info-box-content"><br>

            <span class="info-box-text">Ruang Lab</span>

            <span class="info-box-number"><?=$lab?></span>

    </div>

<!--
/.info-box-content
-->

    </div>

<!--
/.info-box
-->

</div>

<!--
/.col
-->

<div class="col-md-3 col-sm-6 col-xs-12">

<div class="info-box">

<span class="info-box-icon bg-red"><i class="fa fa-book"></i></span>

<div class="info-box-content"><br>

<span class="info-box-text">Mata Pelajaran</span>

<span class="info-box-number"><?=$mpl?></span>

</div>

<!--
/.info-box-content
-->

</div>
<!--
/.info-box
-->

</div>
<!--
/.col
-->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-user"></i></span>

            <div class="info-box-content"><br>
              <span class="info-box-text">Guru</span>
              <span class="info-box-number"><?=$gur?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-file-text"></i></span>

            <div class="info-box-content"><br>
              <span class="info-box-text">Jadwal</span>
              <span class="info-box-number"><?=$jdw?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="callout callout-info">
        <h4>Welcome !</h4>
        <p>Hai, <b><u><?=$usr['nama']?></u></b>
          Selamat datang di <b><i>Sistem Informasi Manajamen Jadwal Laboratorium Komputer (SIM JALAK)</i></b>.</p>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper --> 