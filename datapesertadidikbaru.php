<h2>Data Peserta Didik Baru</h2>
<table border="1">
	<tr><th>No</th><th>Jenis Pendaftaran</th><th>Tanggal Masuk Sekolah</th><th>NIS</th><th>Nomor Peserta Ujian</th><th>Apakah pernah PAUD</th><th>Apakah Pernah TK</th><th>No. Seri SKHUN Sebelumnya</th><th>No. Seri Ijazah Sebelumnya</th><th>Hobi</th><th>Cita-Cita</th><th>Nama Lengkap</th><th>Jenis Kelamin</th><th>NISN</th><th>NIK</th><th>Tempat Lahir</th><th>Tanggal Lahir</th><th>Agama</th><th>Berkebutuhan Khusus</th><th>Alamat Jalan</th><th>RT</th><th>RW</th><th>Nama Dusun</th><th>Nama Kelurahan/Desa</th><th>Kecamatan</th><th>Kode Pos</th><th>Tempat Tinggal</th><th>Modal Transportasi</th><th>Nomor HP</th><th>Nomor Telepon</th><th>E-mail Pribadi</th><th>Penerima KPS/PKH/KIP</th><th>No. KPS/KKS/PKH/KIP</th><th>Kewarganegaraan</th><th>Nama Negara</th></tr>
	<?php
	include 'koneksi.php';
	$formulirpesertadidik = mysqli_query($koneksi, "SELECT * from formulirpesertadidik");
	$no=1;
	foreach ($formulirpesertadidik as $row) {
		$apakahpernahpaud = $row['apakahpernahpaud']=='Y'?'Ya':'Tidak';
		$apakahpernahtk = $row['apakahpernahtk']=='Y'?'Ya':'Tidak';
		$jeniskelamin = $row['jeniskelamin']=='L'?'Laki-laki':'Perempuan';
		$penerimakps_pkh_kip = $row['penerimakps_pkh_kip']=='Y'?'Ya':'Tidak';
		$kewarganegaraan = $row['kewarganegaraan']=='WNI'?'Indonesia':'Asing';
		echo "<tr>
			<td>$no</td>
			<td>".$row['jenispendaftaran']."</td>
			<td>".$row['tanggalmasuksekolah']."</td>
			<td>".$row['nis']."</td>
			<td>".$row['nomorpesertaujian']."</td>
			<td>".$apakahpernahpaud."</td>
			<td>".$apakahpernahtk."</td>
			<td>".$row['nomorseriskhunsebelumnya']."</td>
			<td>".$row['nomorseriijazahsebelumnya']."</td>
			<td>".$row['hobi']."</td>
			<td>".$row['citacita']."</td>
			<td>".$row['namalengkap']."</td>
			<td>".$jeniskelamin."</td>
			<td>".$row['nisn']."</td>
			<td>".$row['nik']."</td>
			<td>".$row['tempatlahir']."</td>
			<td>".$row['tanggallahir']."</td>
			<td>".$row['agama']."</td>
			<td>".$row['berkebutuhankhusus']."</td>
			<td>".$row['alamatjalan']."</td>
			<td>".$row['rt']."</td>
			<td>".$row['rw']."</td>
			<td>".$row['namadusun']."</td>
			<td>".$row['namakelurahan_desa']."</td>
			<td>".$row['kecamatan']."</td>
			<td>".$row['kodepos']."</td>
			<td>".$row['tempattinggal']."</td>
			<td>".$row['modaltransportasi']."</td>
			<td>".$row['nomorhp']."</td>
			<td>".$row['nomortelepon']."</td>
			<td>".$row['emailpribadi']."</td>
			<td>".$penerimakps_pkh_kip."</td>
			<td>".$row['nomorkps_kks_pkh_kip']."</td>
			<td>".$kewarganegaraan."</td>
			<td>".$row['namanegara']."</td>
				</tr>";
		$no++;
	}
	?>
</table>