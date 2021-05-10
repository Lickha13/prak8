<?php
include('koneksi.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'No.');
$sheet->setCellValue('B1', 'Jenis Pendaftaran');
$sheet->setCellValue('C1', 'Tanggal Masuk Sekolah');
$sheet->setCellValue('D1', 'NIS');
$sheet->setCellValue('E1', 'Nomor Peserta Ujian');
$sheet->setCellValue('F1', 'Apakah Pernah PAUD');
$sheet->setCellValue('G1', 'Apakah Pernah TK');
$sheet->setCellValue('H1', 'No. Seri SKHUN Sebelumnya');
$sheet->setCellValue('I1', 'No. Seri Ijazah Sebelumnya');
$sheet->setCellValue('J1', 'Hobi');
$sheet->setCellValue('K1', 'Cita-Cita');
$sheet->setCellValue('L1', 'Nama Lengkap');
$sheet->setCellValue('M1', 'Jenis Kelamin');
$sheet->setCellValue('N1', 'NISN');
$sheet->setCellValue('O1', 'NIK');
$sheet->setCellValue('P1', 'Tempat Lahir');
$sheet->setCellValue('Q1', 'Tanggal Lahir');
$sheet->setCellValue('R1', 'Agama');
$sheet->setCellValue('S1', 'Berkebutuhan Khusus');
$sheet->setCellValue('T1', 'Alamat Jalan');
$sheet->setCellValue('U1', 'RT');
$sheet->setCellValue('V1', 'RW');
$sheet->setCellValue('W1', 'Nama Dusun');
$sheet->setCellValue('X1', 'Nama Kelurahan/Desa');
$sheet->setCellValue('Y1', 'Kecamatan');
$sheet->setCellValue('Z1', 'Kode Pos');
$sheet->setCellValue('AA1', 'Tempat Tinggal');
$sheet->setCellValue('AB1', 'Moda Transportasi');
$sheet->setCellValue('AC1', 'No. HP');
$sheet->setCellValue('AD1', 'No. Telepon');
$sheet->setCellValue('AE1', 'Email Pribadi');
$sheet->setCellValue('AF1', 'Penerima KPS/PKH/KIP');
$sheet->setCellValue('AG1', 'No. KPS/KKS/PKH/KIP');
$sheet->setCellValue('AH1', 'Kewarganegaraan');
$sheet->setCellValue('AI1', 'Nama Negara');

$query = mysqli_query($koneksi, "select * from formulirpesertadidik");
$i = 2;
$no = 1;
while($row = mysqli_fetch_array($query))
{
	$sheet->setCellValue('A'.$i, $no++);
	$sheet->setCellValue('B'.$i, $row['jenispendaftaran']);
	$sheet->setCellValue('C'.$i, $row['tanggalmasuksekolah']);
	$sheet->setCellValue('D'.$i, $row['nis']);
	$sheet->setCellValue('E'.$i, $row['nomorpesertaujian']);
	$sheet->setCellValue('F'.$i, $row['apakahpernahpaud']);
	$sheet->setCellValue('G'.$i, $row['apakahpernahtk']);
	$sheet->setCellValue('H'.$i, $row['nomorseriskhunsebelumnya']);
	$sheet->setCellValue('I'.$i, $row['nomorseriijazahsebelumnya']);
	$sheet->setCellValue('J'.$i, $row['hobi']);
	$sheet->setCellValue('K'.$i, $row['citacita']);
	$sheet->setCellValue('L'.$i, $row['namalengkap']);
	$sheet->setCellValue('M'.$i, $row['jeniskelamin']);
	$sheet->setCellValue('N'.$i, $row['nisn']);
	$sheet->setCellValue('O'.$i, $row['nik']);
	$sheet->setCellValue('P'.$i, $row['tempatlahir']);
	$sheet->setCellValue('Q'.$i, $row['tanggallahir']);
	$sheet->setCellValue('R'.$i, $row['agama']);
	$sheet->setCellValue('S'.$i, $row['berkebutuhankhusus']);
	$sheet->setCellValue('T'.$i, $row['alamatjalan']);
	$sheet->setCellValue('U'.$i, $row['rt']);
	$sheet->setCellValue('V'.$i, $row['rw']);
	$sheet->setCellValue('W'.$i, $row['namadusun']);
	$sheet->setCellValue('X'.$i, $row['namakelurahan_desa']);
	$sheet->setCellValue('Y'.$i, $row['kecamatan']);
	$sheet->setCellValue('Z'.$i, $row['kodepos']);
	$sheet->setCellValue('AA'.$i, $row['tempattinggal']);
	$sheet->setCellValue('AB'.$i, $row['modaltransportasi']);
	$sheet->setCellValue('AC'.$i, $row['nomorhp']);
	$sheet->setCellValue('AD'.$i, $row['nomortelepon']);
	$sheet->setCellValue('AE'.$i, $row['emailpribadi']);
	$sheet->setCellValue('AF'.$i, $row['penerimakps_pkh_kip']);
	$sheet->setCellValue('AG'.$i, $row['nomorkps_kks_pkh_kip']);
	$sheet->setCellValue('AH'.$i, $row['kewarganegaraan']);
	$sheet->setCellValue('AI'.$i, $row['namanegara']);

	$i++;
}

$styleArray = [
			'borders' => [
				'allBorders' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
			],
		];

$i = $i - 1;
$sheet->getStyle('A1:D'.$i)->applyFromArray($styleArray);

$writer = new Xlsx($spreadsheet);
$writer->save('Report Data Peserta Didik Baru.xlsx');
?>