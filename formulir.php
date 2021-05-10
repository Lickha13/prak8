<!DOCTYPE html>
<html>
<head>
	<title>Formulir Peserta Didik Baru</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integerity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
.warning {color: #FF0000;}
</style>
</head>
<body>
	<div class="row">
	<div class="col-md-12">
	<div class="card">
	<div class="card-header">
		Formulir Peserta Didik Baru
	</div>
	<div class="card-body">
	<form method="post" action="simpan.php">
		<table>
			<div class="form-group row">
				<label for="jenispendaftaran" class="col-sm-2 col-form-label">Jenis Pendaftaran</label>
				<div class="col-sm-10">
					<select name="jenispendaftaran">
						<option value="Siswa Baru">Siswa Baru</option>
						<option value="Pindahan">Pindahan</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label for="tanggalmasuksekolah" class="col-sm-2 col-form-label">Tanggal Masuk Sekolah</label>
				<div class="col-sm-10">
					<input type="date" name="tanggalmasuksekolah">
				</div>
			</div>

			<div class="form-group row">
				<label for="nis" class="col-sm-2 col-form-label">NIS</label>
				<div class="col-sm-10">
					<input type="text" name="nis">
				</div>
			</div>

			<div class="form-group row">
				<label for="nomorpesertaujian" class="col-sm-2 col-form-label">Nomor Peserta Ujian</label>
				<div class="col-sm-10">
					<input type="text" name="nomorpesertaujian">
				</div>
			</div>

			<div class="form-group row">
				<label for="apakahpernahpaud" class="col-sm-2 col-form-label">Apakah Pernah PAUD</label>
				<div class="col-sm-10">
					<input type="radio" name="apakahpernahpaud" value="Y">Ya
				<input type="radio" name="apakahpernahpaud" value="T">Tidak
				</div>
			</div>

			<div class="form-group row">
				<label for="apakahpernahtk" class="col-sm-2 col-form-label">Apakah Pernah TK</label>
				<div class="col-sm-10">
					<input type="radio" name="apakahpernahtk" value="Y">Ya
				<input type="radio" name="apakahpernahtk" value="T">Tidak
				</div>
			</div>

			<div class="form-group row">
				<label for="nomorseriskhunsebelumnya" class="col-sm-2 col-form-label">No. Seri SKHUN Sebelumnya</label>
				<div class="col-sm-10">
					<input type="text" name="nomorseriskhunsebelumnya">
				</div>
			</div>

			<div class="form-group row">
				<label for="nomorseriijazahsebelumnya" class="col-sm-2 col-form-label">No. Seri Ijazah Sebelumnya</label>
				<div class="col-sm-10">
					<input type="text" name="nomorseriijazahsebelumnya">
				</div>
			</div>

			<div class="form-group row">
				<label for="hobi" class="col-sm-2 col-form-label">Hobi</label>
					<select name="hobi">
						<option value="Olahraga">Olahraga</option>
						<option value="Kesenian">Kesenian</option>
						<option value="Membaca">Membaca</option>
						<option value="Menulis">Menulis</option>
						<option value="Traveling">Traveling</option>
						<option value="Lainnya">Lainnya</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label for="citacita" class="col-sm-2 col-form-label">Cita-Cita</label>
					<select name="citacita">
						<option value="PNS">PNS</option>
						<option value="TNI/POLRI">TNI/Polri</option>
						<option value="Guru/Dosen">Guru/Dosen</option>
						<option value="Dokter">Dokter</option>
						<option value="Politikus">Politikus</option>
						<option value="Wiraswasta">Wiraswasta</option>
						<option value="Seni/Lukis/Artis/Sejenis">Seni/Lukis/Artis/Sejenis</option>
						<option value="Lainnya">Lainnya</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
				<div class="col-sm-10">
					<input type="text" name="namalengkap">
				</div>
			</div>

			<div class="form-group row">
				<label for="jeniskelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
				<div class="col-sm-10">
					<input type="radio" name="jeniskelamin" value="L">Laki-laki
				<input type="radio" name="jeniskelamin" value="P">Perempuan
				</div>
			</div>

			<div class="form-group row">
				<label for="nisn" class="col-sm-2 col-form-label">NISN</label>
				<div class="col-sm-10">
					<input type="text" name="nisn">
				</div>
			</div>

			<div class="form-group row">
				<label for="nik" class="col-sm-2 col-form-label">NIK</label>
				<div class="col-sm-10">
					<input type="text" name="nik">
				</div>
			</div>

			<div class="form-group row">
				<label for="tempatlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
				<div class="col-sm-10">
					<input type="text" name="tempatlahir">
				</div>
			</div>

			<div class="form-group row">
				<label for="tanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
				<div class="col-sm-10">
					<input type="date" name="tanggallahir">
				</div>
			</div>

			<div class="form-group row">
				<label for="agama" class="col-sm-2 col-form-label">Agama</label>
					<select name="agama">
						<option value="Islam">Islam</option>
						<option value="Kristen/Protestan">Kristen/Protestan</option>
						<option value="Katholik">Katholik</option>
						<option value="Hindu">Hindu</option>
						<option value="Budha">Budha</option>
						<option value="Khong Hu Chu">Khong Hu Chu</option>
						<option value="Lainnya">Lainnya</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label for="berkebutuhankhusus" class="col-sm-2 col-form-label">Berkebutuhan Khusus</label>
					<select name="berkebutuhankhusus">
						<option value="Tidak">Tidak</option>
						<option value="Netra">Netra</option>
						<option value="Rungu">Rungu</option>
						<option value="Grahitna Ringan">Grahita Ringan</option>
						<option value="Grahitna Sedang">Grahita Sedang</option>
						<option value="Daksa Ringan">Daksa Ringan</option>
						<option value="Daksa Sedang">Daksa Sedang</option>
						<option value="Laras">Laras</option>
						<option value="Wicara">Wicara</option>
						<option value="Tuna Ganda">Tuna Ganda</option>
						<option value="Hiper Aktif">Hiper Aktif</option>
						<option value="Cerdas Istimewa">Cerdas Istimewa</option>
						<option value="Bakat Istimewa">Bakat Istimewa</option>
						<option value="Kesulitan Belajar">Kesulitan Belajar</option>
						<option value="Narkoba">Narkoba</option>
						<option value="Indigo">Indigo</option>
						<option value="Down Sindrome">Down Sindrome</option>
						<option value="Autis">Autis</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label for="alamatjalan" class="col-sm-2 col-form-label">Alamat Jalan</label>
				<div class="col-sm-10">
					<input type="text" name="alamatjalan">
				</div>
			</div>

			<div class="form-group row">
				<label for="rt" class="col-sm-2 col-form-label">RT</label>
				<div class="col-sm-10">
					<input type="text" name="rt">
				</div>
			</div>

			<div class="form-group row">
				<label for="rw" class="col-sm-2 col-form-label">RW</label>
				<div class="col-sm-10">
					<input type="text" name="rw">
				</div>
			</div>

			<div class="form-group row">
				<label for="namadusun" class="col-sm-2 col-form-label">Nama Dusun</label>
				<div class="col-sm-10">
					<input type="text" name="namadusun">
				</div>
			</div>

			<div class="form-group row">
				<label for="namakelurahan_desa" class="col-sm-2 col-form-label">Nama Kelurahan/Desa</label>
				<div class="col-sm-10">
					<input type="text" name="namakelurahan_desa">
				</div>
			</div>

			<div class="form-group row">
				<label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
				<div class="col-sm-10">
					<input type="text" name="kecamatan">
				</div>
			</div>

			<div class="form-group row">
				<label for="kodepos" class="col-sm-2 col-form-label">Kode Pos</label>
				<div class="col-sm-10">
					<input type="text" name="kodepos">
				</div>
			</div>

			<div class="form-group row">
				<label for="tempattinggal" class="col-sm-2 col-form-label">Tempat Tinggal</label>
					<select name="tempattinggal">
						<option value="Bersama Orang Tua">Bersama Orang Tua</option>
						<option value="Wali">Wali</option>
						<option value="Kos">Kos</option>
						<option value="Asrama">Asrama</option>
						<option value="Panti Asuhan">Panti Asuhan</option>
						<option value="Lainnya">Lainnya</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label for="modaltransportasi" class="col-sm-2 col-form-label">Modal Transportasi</label>
					<select name="modaltransportasi">
						<option value="Jalan Kaki">Jalan Kaki</option>
						<option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
						<option value="Kendaraan Umum/Angkot/Pete-pete">Kendaraan Umum/Angkot/Pete-pete</option>
						<option value="Jemputan Sekolah">Jemputan Sekolah</option>
						<option value="Kereta Api">Kereta Api</option>
						<option value="Ojek">Ojek</option>
						<option value="Andong/Bendi/Sado/Dokar/Delman/Beca">Andong/Bendi/Sado/Dokar/Delman/Beca</option>
						<option value="Perahu Penyebrangan/Rakit/Getek">Perahu Penyebrangan/Rakit/Getek</option>
						<option value="Lainnya">Lainnya</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label for="nomorhp" class="col-sm-2 col-form-label">Nomor HP</label>
				<div class="col-sm-10">
					<input type="text" name="nomorhp">
				</div>
			</div>

			<div class="form-group row">
				<label for="nomortelepon" class="col-sm-2 col-form-label">Nomor Telepon</label>
				<div class="col-sm-10">
					<input type="text" name="nomortelepon">
				</div>
			</div>

			<div class="form-group row">
				<label for="emailpribadi" class="col-sm-2 col-form-label">Email Pribadi</label>
				<div class="col-sm-10">
					<input type="text" name="emailpribadi">
				</div>
			</div>

			<div class="form-group row">
				<label for="penerimakps_pkh_kip" class="col-sm-2 col-form-label">Penerima KPS/PKH/KIP</label>
				<div class="col-sm-10">
					<input type="radio" name="penerimakps_pkh_kip" value="Y">Ya
				<input type="radio" name="penerimakps_pkh_kip" value="T">Tidak
				</div>
			</div>

			<div class="form-group row">
				<label for="nomorkps_kks_pkh_kip" class="col-sm-2 col-form-label">No. KPS/KKS/PKH/KIP</label>
				<div class="col-sm-10">
					<input type="text" name="nomorkps_kks_pkh_kip">
				</div>
			</div>

			<div class="form-group row">
				<label for="kewarganegaraan" class="col-sm-2 col-form-label">Kewarganegaraan</label>
				<select name="kewarganegaraan">
						<option value="WNI">Indonesia</option>
						<option value="WNA">Asing</option>
					</select>
			</div>

			<div class="form-group row">
				<label for="namanegara" class="col-sm-2 col-form-label">Nama Negara</label>
				<div class="col-sm-10">
					<input type="text" name="namanegara">
				</div>
			</div>

			<div class="form-group row">
				<div class="col-sm-10">
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</div>
		</table>
	</form>
	</div>
	</div>
	</div>
	</div>

</body>
</html>


