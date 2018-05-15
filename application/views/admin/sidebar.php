<?php 
  $usr = $this->db->get_where('tbl_user', array('username' => $this->session->userdata('username')))->row_array();
 $foto = 'avatar.jpg';

 if($usr['foto'] && file_exists('assets/images/user/'.$usr['foto']))
{

     $foto = $usr['foto'];
 }

?>




 <!--
Left
side
column.
contains
the
sidebar
-->


 <aside class="main-sidebar">


   <!--
sidebar:
style
can
be
found
in
sidebar.less
-->

   <section class="sidebar">


     <!--
Sidebar
user
panel
-->

     <div class="user-panel">

<div class="pull-left image"><img src="<?=base_URL().'assets/images/user/'.$foto?>" class="img-circle" alt="User Image">

</div>


     
 <div class="pull-left info">

<p><?=$usr['nama']?></p>


<a href="javascript:void(0)"><i class="fa fa-vcard text-primary"></i>Administrator</a>

</div>


     </div>

     <!--
sidebar
menu:
:
style
can
be
found
in
sidebar.less
-->


     <ul class="sidebar-menu" data-widget="tree">

<li class="header">MAIN NAVIGATION</li>

<li <?php
if($this->uri->segment(1)=="dashboard")
{
echo 'class="active"';
}
?>>


<a href="<?=base_URL()?>dashboard"><i class="fa fa-dashboard"></i>

<span>Dashboard</span></a>

</li>

<li <?php
if($this->uri->segment(1)=="lab" || $this->uri->segment(2)=="lab_tambah" || $this->uri->segment(2)=="lab_edit")
{
echo

'class="active"';
}
?>>



          <a href="<?=base_URL()?>lab"><i class="fa fa-home"></i> <span>Ruang Lab</span></a>
        </li>
        <li <?php if($this->uri->segment(1)=="mapel" || $this->uri->segment(2)=="mapel_tambah" || $this->uri->segment(2)=="mapel_edit")
{
echo

'class="active"';
}
?>>


<a href="<?=base_URL()?>mapel"><i class="fa fa-book"></i>
<span>Mata Pelajaran</span></a>

</li>

<li <?php
if($this->uri->segment(2)=="guru"
||
$this->uri->segment(2)=="guru_tambah"
||
$this->uri->segment(2)=="guru_edit"
||
$this->uri->segment(2)=="user"
||
$this->uri->segment(2)=="user_tambah"
||
$this->uri->segment(2)=="user_edit")
{

echo 'class="treeview active"';
}
else
{
echo 'class="treeview"';
}
?>>


<a href="javascript:void(0)"><i class="fa fa-users"></i><span>Pengguna</span>
	<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i>
</span>

</a>

<ul class="treeview-menu">

<li <?php
if($this->uri->segment(2)=="guru" || $this->uri->segment(2)=="guru_tambah" || $this->uri->segment(2)=="guru_edit")
{
echo

'class="active"';
}
?>>

<a href="<?=base_URL()?>pengguna/guru"><i class="fa fa-user"></i>

<span>Guru</span></a>

</li>

<li
<?php
if($this->uri->segment(2)=="user" || $this->uri->segment(2)=="user_tambah" || $this->uri->segment(2)=="user_edit")
{
echo

'class="active"';
}
?>>

<a href="<?=base_URL()?>pengguna/user"><i class="fa fa-user-md"></i>

<span>User</span></a>

</li>
</ul>
</li>


<li
<?php
if($this->uri->segment(2)=="jadwal" || $this->uri->segment(2)=="jadwal_tambah" || $this->uri->segment(2)=="jadwal_edit" ||
	$this->uri->segment(2)=="jadwal_lihat")
{

echo 'class="treeview
active"';
}
else
{
echo 'class="treeview"';
}
?>>


<a href="javascript:void(0)">

<i class="fa fa-info"></i>

<span>Info Lab</span>

<span class="pull-right-container">

<i class="fa fa-angle-left pull-right"></i>

</span>

</a>


<ul class="treeview-menu">
<li
<?php
if($this->uri->segment(2)=="jadwal" || $this->uri->segment(2)=="jadwal_tambah" || $this->uri->segment(2)=="jadwal_edit")
{
echo

'class="active"';
}
?>>


<a href="<?=base_URL()?>info/jadwal"><i class="fa fa-list-alt"></i><span>Jadwal</span></a>

</li>

<li
<?php
if($this->uri->segment(2)=="jadwal_lihat")
{
echo 'class="active"';
}

?>>


              <a href="<?=base_URL()?>info/jadwal_lihat"><i class="fa fa-file-text"></i>
              	<span>Lihat Jadwal</span></a>
            </li>
          </ul>
        </li>

        <li class="header">USER NAVIGATION</li>
        <li <?php if($this->uri->segment(2)=="profil_saya") { echo 'class="active"'; } ?>>
          <a href="<?=base_URL()?>pengguna/profil_saya"><i class="fa fa-user-circle
          	text-warning"></i> <span>Profil Saya</span></a>
        </li>
        <li>
          <a href="<?=base_URL()?>auth/signout"><i class="fa fa-sign-out textdanger"></i>
<span>Sign Out</span></a>


</li>


     </ul>


   </section>


   <!--
/.sidebar
-->


 </aside>




 <!--
===============================================
-->
