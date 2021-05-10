<?php
include 'koneksi.php';
// menyimpan data ke dalam variabel
$jenispendaftaran			= $_POST['jenispendaftaran'];
$tanggalmasuksekolah		= $_POST['tanggalmasuksekolah'];
$nis						= $_POST['nis'];
$nomorpesertaujian			= $_POST['nomorpesertaujian'];
$apakahpernahpaud			= $_POST['apakahpernahpaud'];
$apakahpernahtk				= $_POST['apakahpernahtk'];
$nomorseriskhunsebelumnya	= $_POST['nomorseriskhunsebelumnya'];
$nomorseriijazahsebelumnya	= $_POST['nomorseriijazahsebelumnya'];
$hobi						= $_POST['hobi'];
$citacita					= $_POST['citacita'];
$namalengkap				= $_POST['namalengkap'];
$jeniskelamin				= $_POST['jeniskelamin'];
$nisn						= $_POST['nisn'];
$nik						= $_POST['nik'];
$tempatlahir				= $_POST['tempatlahir'];
$tanggallahir				= $_POST['tanggallahir'];
$agama						= $_POST['agama'];
$berkebutuhankhusus			= $_POST['berkebutuhankhusus'];
$alamatjalan				= $_POST['alamatjalan'];
$rt							= $_POST['rt'];
$rw							= $_POST['rw'];
$namadusun					= $_POST['namadusun'];
$namakelurahan_desa			= $_POST['namakelurahan_desa'];
$kecamatan					= $_POST['kecamatan'];
$kodepos					= $_POST['kodepos'];
$tempattinggal				= $_POST['tempattinggal'];
$modaltransportasi			= $_POST['modaltransportasi'];
$nomorhp					= $_POST['nomorhp'];
$nomortelepon				= $_POST['nomortelepon'];
$emailpribadi				= $_POST['emailpribadi'];
$penerimakps_pkh_kip		= $_POST['penerimakps_pkh_kip'];
$nomorkps_kks_pkh_kip		= $_POST['nomorkps_kks_pkh_kip'];
$kewarganegaraan			= $_POST['kewarganegaraan'];
$namanegara					= $_POST['namanegara'];
// query SQL untuk insert data
$query="INSERT INTO formulirpesertadidik SET jenispendaftaran='$jenispendaftaran', tanggalmasuksekolah='$tanggalmasuksekolah', nis='$nis', nomorpesertaujian='$nomorpesertaujian', apakahpernahpaud='$apakahpernahpaud', apakahpernahtk='$apakahpernahtk', nomorseriskhunsebelumnya='$nomorseriskhunsebelumnya', nomorseriijazahsebelumnya='$nomorseriijazahsebelumnya', hobi='$hobi', citacita='$citacita', namalengkap='$namalengkap', jeniskelamin='$jeniskelamin', nisn='$nisn', nik='$nik', tempatlahir='$tempatlahir', tanggallahir='$tanggallahir', agama='$agama', berkebutuhankhusus='$berkebutuhankhusus', alamatjalan='$alamatjalan', rt='$rt', rw='$rw', namadusun='$namadusun', namakelurahan_desa='$namakelurahan_desa', kecamatan='$kecamatan', kodepos='$kodepos', tempattinggal='$tempattinggal', modaltransportasi='$modaltransportasi', nomorhp='$nomorhp', nomortelepon='$nomortelepon', emailpribadi='$emailpribadi', penerimakps_pkh_kip='$penerimakps_pkh_kip', nomorkps_kks_pkh_kip='$nomorkps_kks_pkh_kip', kewarganegaraan='$kewarganegaraan', namanegara='$namanegara'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:datapesertadidikbaru.php");
?>