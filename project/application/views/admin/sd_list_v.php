<?php $this->load->view('admin/_header') ?>
<div class="page-title">
    <div class="title_left">
        <h3>Data Sekolah Asal SD</h3>
    </div>
</div>
<div class="clearfix"></div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <?php if ($this->session->flashdata('message')): ?>
                <div class="alert alert-success">
                    <?= $this->session->flashdata('message') ?>
                </div>
            <?php endif ?>
            <div class="x_title">
                <h2>Tambah Data SD</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <?= form_open_multipart('admin/data_sd/add/', array('class' => 'form-horizontal form-label-left')) ?>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_sd">Nama <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="nama_sd" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nama_sd" required type="text">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat_sd">Alamat SD <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="alamat_sd" name="alamat_sd" required class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                            <input type="submit" name="submit" value="Tambahkan" onclick="return confirm('Apakah anda yakin?')" class="btn btn-primary" />
                        </div>
                    </div>
                </form>
            </div>
            <div class="x_title">
                <h2>Data SD</h2>
                <div class="clearfix"></div>
            </div>
            <table class="data_tables">
                <thead>
                    <tr>
                        <th>Kode SD</th>
                        <th>Nama SD</th>
                        <th>Alamat SD</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($record as $no => $re): ?>
                        <tr>
                            <td><?= $re['id_sd'] ?></td>
                            <td><?= $re['nama_sd'] ?></td>
                            <td><?= $re['alamat_sd'] ?></td>
                            <td>
                                <div class='btn-group'>
                                    <a href="<?= base_url('admin/data_sd/delete/'.$re['id_sd']) ?>" onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger btn-xs fa fa-remove tipsy-kiri-atas" title="Hapus Data Ini"><i class="icon-remove icon-white"></i></a> 
                                    <a href="<?= base_url('admin/data_sd/edit/'.$re['id_sd']) ?>" class="btn btn-default btn-xs fa fa-pencil tipsy-kiri-atas" title='Edit Data ini'> <i class="icon-edit icon-white"></i></a>
                                </div>
                            </td>
                        </tr>   
                    <?php endforeach ?> 
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $this->load->view('admin/_footer') ?>