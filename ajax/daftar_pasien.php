<?php 
	session_start();
	include "../koneksi.php";
	$nama_pas = @mysqli_real_escape_string($conn, $_POST['nama_pas']);
	$asuransi_pas = @mysqli_real_escape_string($conn, $_POST['asuransi_pas']);
	$pekerjaan = @mysqli_real_escape_string($conn, $_POST['pekerjaan']);
	$no_hp = @mysqli_real_escape_string($conn, $_POST['no_hp']);
	$nomor_rm = @mysqli_real_escape_string($conn, $_POST['nomor_rm']);
	$nik = @mysqli_real_escape_string($conn, $_POST['nik']);
	$alm_pas = @mysqli_real_escape_string($conn, $_POST['alm_pas']);
	$nik = @mysqli_real_escape_string($conn, $_POST['nik']);
	$jk = @mysqli_real_escape_string($conn, $_POST['jk']);
	$tgl_lahir = @mysqli_real_escape_string($conn, $_POST['tgl_lahir']);
	$tpt_lahir = @mysqli_real_escape_string($conn, $_POST['tpt_lahir']);
	$alergi = @mysqli_real_escape_string($conn, $_POST['alergi']);
	$agama = @mysqli_real_escape_string($conn, $_POST['agama']);
	
	$desa = @mysqli_real_escape_string($conn, $_POST['desa']);
	$kec = @mysqli_real_escape_string($conn, $_POST['kec']);
	$kab_kota = @mysqli_real_escape_string($conn, $_POST['kab_kota']);
	$provinsi = @mysqli_real_escape_string($conn, $_POST['provinsi']);
	$no_daftar = @mysqli_real_escape_string($conn, $_POST['no_daftar']);
	$tgl_daftar = @mysqli_real_escape_string($conn, $_POST['tgl_daftar']);
	$tgl_periksa = @mysqli_real_escape_string($conn, $_POST['tgl_periksa']);
	$id_pas = @mysqli_real_escape_string($conn, $_POST['id_pas']);
	$nomor_antri = @mysqli_real_escape_string($conn, $_POST['nomor_antri']);
	$status_masuk = @mysqli_real_escape_string($conn, $_POST['status_masuk']);
	$nm_dokter = @mysqli_real_escape_string($conn, $_POST['nm_dokter']);
	$cara_masuk = @mysqli_real_escape_string($conn, $_POST['cara_masuk']);
	$status_rawat = @mysqli_real_escape_string($conn, $_POST['status_rawat']);
	$status_bayar = @mysqli_real_escape_string($conn, $_POST['status_bayar']);
	$status_obat = @mysqli_real_escape_string($conn, $_POST['status_obat']);
	//$tekanan_darah = @mysqli_real_escape_string($conn, $_POST['tekanan_darah']);
	//$subjektif = @mysqli_real_escape_string($conn, $_POST['subjektif']);
	//$objektif = @mysqli_real_escape_string($conn, $_POST['objektif']);
	//$assesment = @mysqli_real_escape_string($conn, $_POST['assesment']);
	//$plan = @mysqli_real_escape_string($conn, $_POST['plan']);
		
	$id_pegawai =  $_SESSION['id_peg'];
	$query = "INSERT INTO tbl_daftarpasien VALUES('$no_daftar', '$tgl_daftar', '$tgl_periksa', '$nama_pas', '$nik', '$agama', '$jk', '$tpt_lahir', '$tgl_lahir', '$asuransi_pas', '$pekerjaan', '$alergi', '$no_hp', '$alm_pas','$nomor_rm', '$nm_dokter', '$nomor_antri', '$status_masuk', '$cara_masuk', '$desa','$kec', '$kab_kota', '$provinsi', '$status_rawat', '$status_bayar', '$status_obat','$id_pas', '$id_pegawai')";
	$sql = mysqli_query($conn, $query) or die ($conn->error);

	$query_antrian = "INSERT INTO tbl_antrian (no_daftar,tanggal,no_antrian,nama_pas,nomor_rm) VALUES ('$no_daftar', '$tgl_daftar', '$nomor_antri','$nama_pas', '$nomor_rm')";
	$sql_antrian = mysqli_query($conn, $query_antrian) or die ($conn->error);

	if($sql && $sql_antrian) {
		echo "berhasil";
	} else {
		echo "gagal";
	}

 ?>