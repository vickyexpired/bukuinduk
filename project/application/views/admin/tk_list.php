<?php $this->load->view('admin/_header') ?>
<div class="page-title">
    <div class="title_left">
        <h3>Data Sekolah Asal TK</h3>
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
				<h2>Tambah Data TK</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<?= form_open_multipart('admin/data_tk/add/', array('class' => 'form-horizontal form-label-left')) ?>
					<div class="item form-group">
                    	<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_tk">Nama <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        	<input id="nama_tk" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nama_tk" required type="text">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat_tk">Alamat TK <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="alamat_tk" name="alamat_tk" required class="form-control col-md-7 col-xs-12">
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
                <h2>Data TK</h2>
                <div class="clearfix"></div>
            </div>
            <table class="data_tables">
            	<thead>
                    <tr>
                    	<th>Kode TK</th>
                  		<th>Nama TK</th>
                		<th>Alamat TK</th>
                		<th>Aksi</th>
                	</tr>
                </thead>
                <tbody>
                	<?php foreach ($record as $no => $re): ?>
                		<tr>
                			<td><?= $re['id_tk'] ?></td>
                			<td><?= $re['nama_tk'] ?></td>
                			<td><?= $re['alamat_tk'] ?></td>
                			<td>
                				<div class='btn-group'>
									<a href="<?= base_url('admin/data_tk/delete/'.$re['id_tk']) ?>" onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger btn-xs fa fa-remove tipsy-kiri-atas" title="Hapus Data Ini"><i class="icon-remove icon-white"></i></a> 
									<a href="<?= base_url('admin/data_tk/edit/'.$re['id_tk']) ?>" class="btn btn-default btn-xs fa fa-pencil tipsy-kiri-atas" title='Edit Data ini'> <i class="icon-edit icon-white"></i></a>
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