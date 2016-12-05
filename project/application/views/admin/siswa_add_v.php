<?php $this->load->view('admin/_header') ?>
<div class="page-title">
    <div class="title_left">
        <h3>Tambah Data Siswa</h3>
    </div>
</div>
<div class="clearfix"></div>
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
        <?= form_open_multipart('admin/data_siswa/add/',array('class' => 'form-horizontal form-label-left')) ?>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_title">
                    <h2>Data Diri</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_lengkap">Nama Lengkap</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="nama_lengkap" placeholder="Nama Lengkap" name="nama_lengkap">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_panggilan">Nama Panggilan</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="nama_panggilan" placeholder="Nama Panggilan" name="nama_panggilan">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_pendaftaran">Nomor Pendaftaran</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="no_pendaftaran" placeholder="Nomor Pendaftaran" name="no_pendaftaran">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="t4_lahir">Tempat Lahir</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="t4_lahir" placeholder="Tempat Lahir" name="t4_lahir">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_lahir">Tanggal Lahir</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="tgl_lahir" placeholder="yyyy-mm-dd" name="tgl_lahir">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jk">Tanggal Lahir</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <select class="form-control" name="jk" id="jk">
                                <option value="Laki-Laki" selected>Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="anakke">Anak ke - </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="anakke" placeholder="Anak ke - " name="anakke">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kandung">Jumlah Sdr Kandung</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="kandung" placeholder="Jumlah Saudara Kandung" name="kandung">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tiri">Jumlah Sdr Tiri</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="tiri" placeholder="Jumlah Saudara Tiri" name="tiri">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="angkat">Jumlah Sdr Angkat</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="angkat" placeholder="Jumlah Saudara Angkat" name="angkat">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat">Alamat Siswa</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="alamat" placeholder="Alamat Siswa" name="alamat">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kelas">Kelas</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="kelas" placeholder="Kelas" name="kelas">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nisn">NISN</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="nisn" placeholder="NISN" name="nisn">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telp">Nomor Telepon</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="telp" placeholder="Nomor Telepon" name="telp">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hp">Nomor HP</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="hp" placeholder="Nomor HP" name="hp">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="foto">Foto</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="file" class="form-control" id="foto" name="foto">
                        </div>
                    </div>
                </div>
                <div class="x_title">
                    <h2>Data Fisik Siswa</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tinggi">Tinggi Badan</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="tinggi" placeholder="Tinggi Badan" name="tinggi">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="berat">Berat Badan</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="berat" placeholder="Berat Badan" name="berat">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_goldar">Golongan Darah</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <select class="form-control" name="id_goldar" id="id_goldar">
                                <option value="1">A</option>
                                <option value="2">B</option>
                                <option value="3">AB</option>
                                <option value="4">O</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="badan">Badan</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="badan" placeholder="Badan" name="badan">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telinga">Telinga</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="telinga" placeholder="Telinga" name="telinga">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mata_kanan_plus">Mata Kanan +</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="mata_kanan_plus" placeholder="Mata Kanan +" name="mata_kanan_plus">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mata_kanan_min">Mata Kanan -</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="mata_kanan_min" placeholder="Mata Kanan -" name="mata_kanan_min">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mata_kiri_plus">Mata Kiri +</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="mata_kiri_plus" placeholder="Mata Kiri +" name="mata_kiri_plus">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mata_kiri_min">Mata Kiri -</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="mata_kiri_min" placeholder="Mata Kiri -" name="mata_kiri_min">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hidung">Hidung</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="hidung" placeholder="Hidung" name="hidung">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="penyakit_sering">Penyakit yang sering diderita</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="penyakit_sering" placeholder="Penyakit yang sering diderita" name="penyakit_sering">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="penyakit_kronis">Penyakit Kronis yang diderita</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="penyakit_kronis" placeholder="Penyakit Kronis yang diderita" name="penyakit_kronis">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mata_kanan_min">Lama penyakit Kronis</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="mata_kanan_min" placeholder="Lama penyakit Kronis" name="mata_kanan_min">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="opname">Opname</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="opname" placeholder="Opname" name="opname">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="opname_sakit">Opname karena Sakit</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="opname_sakit" placeholder="Opname karena Sakit" name="opname_sakit">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="opname_sakit_lama">Lama Opname</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="opname_sakit_lama" placeholder="Lama Opname" name="opname_sakit_lama">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pantangan">Pantangan</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="pantangan" placeholder="Pantangan" name="pantangan">
                        </div>
                    </div>
                </div>
                <div class="x_title">
                    <h2>Data Riwayat Pendidikan Siswa</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_tk">Asal TK</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <select class="form-control" name="id_tk" id="id_tk">
                                <?php foreach ($record_tk as $rt): ?>
                                    <option value="<?= $rt['id_tk'] ?>"><?= $rt['nama_tk'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_sd">Asal SD</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <select class="form-control" name="id_sd" id="id_sd">
                                <?php foreach ($record_sd as $rs): ?>
                                    <option value="<?= $rs['id_sd'] ?>"><?= $rs['nama_sd'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_title">
                    <h2>Data Orang Tua</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_a">Nama Ayah</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="nama_a" placeholder="Nama Ayah" name="nama_a">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="job_a">Pekerjaan Ayah</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <select class="form-control" name="job_a" id="job_a">
                                <?php foreach ($record_job as $rj): ?>
                                    <option value="<?= $rj['id_job'] ?>"><?= $rj['nama_job'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="agama_a">Agama Ayah</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <select class="form-control" name="agama_a" id="agama_a">
                                <?php foreach ($record_agama as $ra): ?>
                                    <option value="<?= $ra['id_agama'] ?>"><?= $ra['nama_agama'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="edu_a">Pendidikan Ayah</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <select class="form-control" name="edu_a" id="edu_a">
                                <?php foreach ($record_edu as $re): ?>
                                    <option value="<?= $re['id_edu'] ?>"><?= $re['level_edu'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="usia_a">Usia Ayah</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="usia_a" placeholder="Usia Ayah" name="usia_a">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status_a">Status Ayah</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="status_a" placeholder="Status Ayah" name="status_a">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_i">Nama Ibu</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="nama_i" placeholder="Nama Ibu" name="nama_i">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="job_i">Pekerjaan Ibu</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <select class="form-control" name="job_i" id="job_i">
                                <?php foreach ($record_job as $rj): ?>
                                    <option value="<?= $rj['id_job'] ?>"><?= $rj['nama_job'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="agama_i">Agama Ibu</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <select class="form-control" name="agama_i" id="agama_i">
                                <?php foreach ($record_agama as $ra): ?>
                                    <option value="<?= $ra['id_agama'] ?>"><?= $ra['nama_agama'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="edu_i">Pendidikan Ibu</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <select class="form-control" name="edu_i" id="edu_i">
                                <?php foreach ($record_edu as $re): ?>
                                    <option value="<?= $re['id_edu'] ?>"><?= $re['level_edu'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="usia_i">Usia Ibu</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="usia_i" placeholder="Usia Ibu" name="usia_i">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status_i">Status Ibu</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="status_i" placeholder="Status Ibu" name="status_i">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat_ortu">Alamat Orang Tua</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="alamat_ortu" placeholder="Alamat Orang Tua" name="alamat_ortu">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telp_ortu">Telepon Orang Tua</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="telp_ortu" placeholder="Telepon Orang Tua" name="telp_ortu">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hp_ortu">HP Orang Tua</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="hp_ortu" placeholder="HP Orang Tua" name="hp_ortu">
                        </div>
                    </div>
                </div>
                <div class="x_title">
                    <h2>Data Minat dan Bakat</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hobi">Hobi</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="hobi" placeholder="Hobi" name="hobi">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mapel">Mata Pelajaran Favorit</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="mapel" placeholder="Mata Pelajaran Favorit" name="mapel">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="olahraga">Olahraga</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="olahraga" placeholder="Olahraga" name="olahraga">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="citacita">Cita-Cita</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="citacita" placeholder="Cita-Cita" name="citacita">
                        </div>
                    </div>
                </div>
                <div class="x_title">
                    <h2>Data Pendukung</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="penghasilan">Penghasilan Orang Tua</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="penghasilan" placeholder="Penghasilan Orang Tua (tanpa titik)" name="penghasilan">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sekolah">Tanggungan yang Sekolah</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="sekolah" placeholder="Tanggungan yang Sekolah" name="sekolah">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="not_sekolah">Tanggungan tidak Sekolah</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="not_sekolah" placeholder="Tanggungan tidak Sekolah" name="not_sekolah">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="penanggung">Penanggung Biaya Sekolah</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="penanggung" placeholder="Penanggung Biaya Sekolah" name="penanggung">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="indonesia">Bahasa Indonesia</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="indonesia" placeholder="Bahasa Indonesia" name="indonesia">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="daerah">Bahasa Daerah</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="daerah" placeholder="Bahasa Daerah" name="daerah">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="asing">Bahasa Asing</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="asing" placeholder="Bahasa Asing" name="asing">
                        </div>
                    </div>
                </div>
                <div class="x_title">
                    <h2>Data Kemampuan Al-Qur'an</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="baca_quran">Kemampuan Baca Alquran</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <select name="baca_quran" id="baca_quran" class="form-control">
                                <option value="1">Lancar</option>
                                <option value="2">Cukup Lancar</option>
                                <option value="3">Tidak Lancar</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tempat_belajar">Tempat Belajar Alquran</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="tempat_belajar" placeholder="Tempat Belajar Alquran" name="tempat_belajar">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hafalan">Jumlah Hafalan</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="hafalan" placeholder="Jumlah Hafalan" name="hafalan">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="informasi">Informasi</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input required type="text" class="form-control" id="informasi" placeholder="Informasi" name="informasi">
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12" align="center">
                <input type="submit" name="submit" value="Tambah" class="btn btn-primary btn-lg">
            </div>
        </form>
		</div>
	</div>
</div>

<?php $this->load->view('admin/_footer') ?>