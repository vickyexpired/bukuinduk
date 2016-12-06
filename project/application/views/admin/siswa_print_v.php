<!DOCTYPE html>
<html>
<head>
	<title>Print Siswa</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
	<style type="text/css">
	@media print {
		@page {
			size: ;
			margin: 3;
		}
	}
	.page-break {
		margin-top: 300px;
	}
	</style>
</head>
<body>
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
            <div class="row">
				<div class="col-md-6 col-sm-6 col-xs-6">
					<div class="x_title">
						<h2>Data Diri Siswa</h2>
		                <div class="clearfix"></div>
					</div>
					<div class="x_content">
						<table class="table table-advanced table-striped">
							<tbody>
								<tr>
									<td width="50%">Nomor Pendaftaran</td>
									<td>: <?= $record_siswa['no_pendaftaran'] ?></td>
								</tr>
								<tr>
									<td>NISN</td>
									<td>: <?= $record_siswa['nisn'] ?></td>
								</tr>
								<tr>
									<td>Nama Lengkap</td>
									<td>: <?= $record_siswa['nama_lengkap'] ?></td>
								</tr>
								<tr>
									<td>Nama Panggilan</td>
									<td>: <?= $record_siswa['nama_panggilan'] ?></td>
								</tr>
								<tr>
									<td>Jenis Kelamin</td>
									<td>: <?= $record_siswa['jk'] ?></td>
								</tr>
								<tr>
									<td>Kelas</td>
									<td>: <?= $record_siswa['kelas'] ?></td>
								</tr>
								<tr>
									<td>Alamat</td>
									<td>: <?= $record_siswa['alamat'] ?></td>
								</tr>
								<tr>
									<td>Tempat Lahir</td>
									<td>: <?= $record_siswa['t4_lahir'] ?></td>
								</tr>
								<tr>
									<td>Tanggal Lahir</td>
									<td>: <?= $tgl_lahir ?></td>
								</tr>
								<tr>
									<td>Anak Ke -</td>
									<td>: <?= $record_siswa['anakke'] ?></td>
								</tr>
								<tr>
									<td>Saudara Kandung</td>
									<td>: <?= $record_siswa['kandung'] ?></td>
								</tr>
								<tr>
									<td>Saudara Tiri</td>
									<td>: <?= $record_siswa['tiri'] ?></td>
								</tr>
								<tr>
									<td>Saudara Angkat</td>
									<td>: <?= $record_siswa['angkat'] ?></td>
								</tr>
								<tr>
									<td>Nomor Telepon</td>
									<td>: <?= $record_siswa['telp'] ?></td>
								</tr>
								<tr>
									<td>Nomor Handphone</td>
									<td>: <?= $record_siswa['hp'] ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6">
					<img class="col-md-12 col-sm-12 col-xs-12" src="<?= $record_siswa['foto'] == '' ? base_url('uploads/siswa/Default-Profile.jpg') : base_url('uploads/siswa/'.$record_siswa['foto']) ?>">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="x_title">
						<h2>Data Riwayat Pendidikan Siswa </h2>
		                <div class="clearfix"></div>
					</div>
					<div class="x_content">
						<table class="table table-advanced table-striped">
							<tbody>
								<tr>
									<td width="50%">Asal TK</td>
									<td>: <?= $record_tk['nama_tk'] ?></td>
								</tr>
								<tr>
									<td>Asal SD</td>
									<td>: <?= $record_sd['nama_sd'] ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="page-break"></div>
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-6">
					<div class="x_title">
						<h2>Data Fisik Siswa</h2>
		                <div class="clearfix"></div>
		            </div>
		            <div class="x_content">
						<table class="table table-advanced table-striped">
							<tbody>
								<tr>
									<td width="50%">Tinggi Badan</td>
									<td>: <?= $record_siswa['tinggi'] ?></td>
								</tr>
								<tr>
									<td>Berat Badan</td>
									<td>: <?= $record_siswa['berat'] ?></td>
								</tr>
								<tr>
									<td>Golongan Darah</td>
									<td>: <?= $gol_darah ?></td>
								</tr>
								<tr>
									<td>Badan</td>
									<td>: <?= $record_siswa['badan'] ?></td>
								</tr>
								<tr>
									<td>Telinga</td>
									<td>: <?= $record_siswa['telinga'] ?></td>
								</tr>
								<tr>
									<td>Mata Kanan +</td>
									<td>: <?= $record_siswa['mata_kanan_plus'] ?></td>
								</tr>
								<tr>
									<td>Mata Kanan -</td>
									<td>: <?= $record_siswa['mata_kanan_min'] ?></td>
								</tr>
								<tr>
									<td>Mata Kiri +</td>
									<td>: <?= $record_siswa['mata_kiri_plus'] ?></td>
								</tr>
								<tr>
									<td>Mata Kiri -</td>
									<td>: <?= $record_siswa['mata_kiri_min'] ?></td>
								</tr>
								<tr>
									<td>Hidung</td>
									<td>: <?= $record_siswa['hidung'] ?></td>
								</tr>
								<tr>
									<td>Penyakit yang sering diderita</td>
									<td>: <?= $record_siswa['penyakit_sering'] ?></td>
								</tr>
								<tr>
									<td>Penyakit kronis yang diderita</td>
									<td>: <?= $record_siswa['penyakit_kronis'] ?></td>
								</tr>
								<tr>
									<td>Lama penyakit Kronis</td>
									<td>: <?= $record_siswa['penyakit_kronis_lama'] ?></td>
								</tr>
								<tr>
									<td>Opname</td>
									<td>: <?= $record_siswa['opname'] ?></td>
								</tr>
								<tr>
									<td>Opname karena Sakit</td>
									<td>: <?= $record_siswa['opname_sakit'] ?></td>
								</tr>
								<tr>
									<td>Lama Opname</td>
									<td>: <?= $record_siswa['opname_sakit_lama'] ?></td>
								</tr>
								<tr>
									<td>Pantangan</td>
									<td>: <?= $record_siswa['pantangan'] ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6">
					<div class="x_title">
						<h2>Data Orang Tua Siswa </h2>
		                <div class="clearfix"></div>
					</div>
					<div class="x_content">
						<table class="table table-advanced table-striped">
							<tbody>
								<tr>
									<td width="50%">Nama Ayah</td>
									<td>: <?= $record_ortu['nama_a'] ?></td>
								</tr>
								<tr>
									<td>Pekerjaan Ayah</td>
									<td>: <?= $record_a['job_a']['nama_job'] ?></td>
								</tr>
								<tr>
									<td>Agama Ayah</td>
									<td>: <?= $record_a['agama_a']['nama_agama'] ?></td>
								</tr>
								<tr>
									<td>Pendidikan Ayah</td>
									<td>: <?= $record_a['edu_a']['level_edu'] ?></td>
								</tr>
								<tr>
									<td>Usia Ayah</td>
									<td>: <?= $record_ortu['usia_a'] ?> Tahun</td>
								</tr>
								<tr>
									<td>Status Ayah</td>
									<td>: <?= $record_ortu['status_a'] ?></td>
								</tr>
								<tr>
									<td>Nama Ibu</td>
									<td>: <?= $record_ortu['nama_i'] ?></td>
								</tr>
								<tr>
									<td>Pekerjaan Ibu</td>
									<td>: <?= $record_i['job_i']['nama_job'] ?></td>
								</tr>
								<tr>
									<td>Agama Ibu</td>
									<td>: <?= $record_i['agama_i']['nama_agama'] ?></td>
								</tr>
								<tr>
									<td>Pendidikan Ibu</td>
									<td>: <?= $record_i['edu_i']['level_edu'] ?></td>
								</tr>
								<tr>
									<td>Usia Ibu</td>
									<td>: <?= $record_ortu['usia_i'] ?> Tahun</td>
								</tr>
								<tr>
									<td>Status Ibu</td>
									<td>: <?= $record_ortu['status_i'] ?></td>
								</tr>
								<tr>
									<td>Alamat Orang Tua</td>
									<td>: <?= $record_ortu['alamat_ortu'] ?></td>
								</tr>
								<tr>
									<td>Telepon Orang Tua</td>
									<td>: <?= $record_ortu['telp_ortu'] ?></td>
								</tr>
								<tr>
									<td>HP Orang Tua</td>
									<td>: <?= $record_ortu['hp_ortu'] ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="page-break">&nbsp;</div>
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-6">
					<div class="x_title">
						<h2>Data Kemampuan AL-Qur'an Siswa </h2>
		                <div class="clearfix"></div>
					</div>
					<div class="x_content">
						<table class="table table-advanced table-striped">
							<tbody>
								<tr>
									<td width="50%">Kemampuan Baca Al-Qur'an</td>
									<td>: <?= $baca_quran ?></td>
								</tr>
								<tr>
									<td>Tempat Belajar Al-Qur'an</td>
									<td>: <?= $record_siswa['tempat_belajar'] ?></td>
								</tr>
								<tr>
									<td>Jumlah Hafalan</td>
									<td>: <?= $record_siswa['hafalan'] ?></td>
								</tr>
								<tr>
									<td>Informasi</td>
									<td>: <?= $record_siswa['informasi'] ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6">
					<div class="x_title">
						<h2>Data Minat Dan Bakat Siswa </h2>
		                <div class="clearfix"></div>
					</div>
					<div class="x_content">
						<table class="table table-advanced table-striped">
							<tbody>
								<tr>
									<td width="50%">Hobi</td>
									<td>: <?= $record_siswa['hobi'] ?></td>
								</tr>
								<tr>
									<td>Mata Pelajaran Favorit</td>
									<td>: <?= $record_siswa['mapel'] ?></td>
								</tr>
								<tr>
									<td>Olahraga</td>
									<td>: <?= $record_siswa['olahraga'] ?></td>
								</tr>
								<tr>
									<td>Cita-Cita</td>
									<td>: <?= $record_siswa['citacita'] ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="x_title">
						<h2>Data Pendukung </h2>
		                <div class="clearfix"></div>
					</div>
					<div class="x_content">
						<table class="table table-advanced table-striped">
							<tbody>
								<tr>
									<td width="50%">Penghasilan Orang Tua</td>
									<td>: Rp.<?= $record_siswa['penghasilan'] ?></td>
								</tr>
								<tr>
									<td>Tanggungan yang Sekolah</td>
									<td>: Rp.<?= $record_siswa['sekolah'] ?></td>
								</tr>
								<tr>
									<td>Tanggungan Tidak Sekolah</td>
									<td>: Rp.<?= $record_siswa['not_sekolah'] ?></td>
								</tr>
								<tr>
									<td>Penanggung Biaya Sekolah</td>
									<td>: <?= $record_siswa['penanggung'] ?></td>
								</tr>
								<tr>
									<td>Bahasa Indonesia</td>
									<td>: <?= $record_siswa['indonesia'] ?></td>
								</tr>
								<tr>
									<td>Bahasa Daerah</td>
									<td>: <?= $record_siswa['daerah'] ?></td>
								</tr>
								<tr>
									<td>Bahasa Asing</td>
									<td>: <?= $record_siswa['asing'] ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<script type="text/javascript" src="<?= base_url('assets/js/jquery-3.1.1.min.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
	<script type="text/javascript">
		$(document).ready(function(){
    		window.print();
		});
	</script>
</body>
</html>