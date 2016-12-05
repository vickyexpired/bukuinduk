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
			<div class="x_title">
				<h2>Edit Data SD</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<?= form_open_multipart('admin/data_sd/edit/', array('class' => 'form-horizontal form-label-left')) ?>
					<div class="item form-group">
                    	<label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_sd">Id SD <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        	<input id="id_sd" readonly class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="id_sd" value="<?= $record['id_sd'] ?>" type="text">
                        </div>
                    </div>
					<div class="item form-group">
                    	<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_sd">Nama <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        	<input id="nama_sd" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nama_sd" value="<?= $record['nama_sd'] ?>" required type="text">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat_sd">Alamat SD <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="alamat_sd" name="alamat_sd" value="<?= $record['alamat_sd'] ?>" required class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
					        <input type="submit" name="submit" value="Ubah Data" onclick="return confirm('Apakah anda yakin?')" class="btn btn-primary" />
                            <?= anchor('admin/data_sd/','Kembali',array('class' => 'btn btn-warning')) ?>
                        </div>
                    </div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('admin/_footer') ?>