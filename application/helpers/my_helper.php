<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//session admin
function sesiAdmin() { 
  if(isset($_SESSION['username'])) {
      return TRUE;
  } else {
     redirect(base_url(), 'refresh');
  }
}
 
 //getMapel
function getMapel($idmapel) {
$CI =& get_instance();
$ambil = $CI->db->query("SELECT namamapel FROM tbl_matapelajaran WHERE idmapel
= '$idmapel'")->row();
return $ambil->namamapel;
}

//getLab
function getLab($idlab) {
$CI =& get_instance();
$ambil = $CI->db->query("SELECT ruanglab FROM tbl_ruanglab WHERE idlab = '$idlab'")->row();

return
$ambil->ruanglab;

}



//getGuru
function getGuru($idguru) {
$CI =& get_instance();
$ambil = $CI->db->query("SELECT namaguru FROM tbl_guru WHERE idguru =
'$idguru'")->row();
return $ambil->namaguru;
}

//tanggal
function getTanggal($tanggal) {
    $ubah = gmdate($tanggal, time()+60*60*8);
    $pecah = explode("-", $ubah);
    $tgl = $pecah[2];
    $bln = $pecah[1];
    $thn = $pecah[0];
    $p_satu = explode(' ',$tanggal);
    $tgls   = explode('-',$p_satu[0]); 
    $bulan  = array('Januari','Februari','Maret', 'April', 'Mei',
'Juni','Juli','Agustus','September','Oktober', 'November','Desember');
    $bulans = $bulan[($tgls[1]-1)];
    return $tgl.' '.$bulans.' '.$thn;
}

//hari
function getHari($tanggal) {
    $ubah = gmdate($tanggal, time()+60*60*8);
    $pecah = explode("-", $ubah);
    $tgl = $pecah[2];
    $bln = $pecah[1];
    $thn = $pecah[0];
    $nama = date("l", mktime(0,0,0,$bln,$tgl,$thn));
    $nama_hari = "";
    if($nama=="Sunday") {$nama_hari="Minggu";}
    else if($nama=="Monday") {$nama_hari="Senin";}
    else if($nama=="Tuesday") {$nama_hari="Selasa";}
    else if($nama=="Wednesday") {$nama_hari="Rabu";}
    else if($nama=="Thursday") {$nama_hari="Kamis";}
    else if($nama=="Friday") {$nama_hari="Jum'at";}
    else if($nama=="Saturday") {$nama_hari="Sabtu";}
    return $nama_hari;
} 

