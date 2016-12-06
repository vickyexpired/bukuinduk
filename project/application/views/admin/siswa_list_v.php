<?php $this->load->view('admin/_header') ?>
<div class="page-title">
    <div class="title_left">
        <h3>Data Siswa</h3>
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
				<?= anchor('admin/data_siswa/add/','<span class="fa fa-plus"></span> Tambah Data Siswa',array('class' => 'btn btn-primary')); ?>
				<div class="clearfix"></div>
			</div>
            <table class="data_tables">
            	<thead>
                    <tr>
                    	<th>NISN</th>
                  		<th>Nama Siswa</th>
                        <th>Nomor Telepon</th>
                        <th>Nama SD</th>
                		<th>Aksi</th>
                	</tr>
                </thead>
                <tbody>
                	<?php foreach ($record as $re): ?>
                		<tr>
                			<td><?= $re['nisn'] ?></td>
                            <td><?= $re['nama_lengkap'] ?></td>
                			<td><?= $re['telp'] ?></td>
                            <td><?= $re['nama_sd'] ?></td>
                			<td>
                				<div class='btn-group'>
                                    <a href="<?= base_url('admin/data_siswa/detail/'.$re['id_siswa']) ?>" class="btn btn-primary btn-xs fa fa-sticky-note tipsy-kiri-atas" title='Detail Data ini'> <i class="icon-detail icon-white"></i></a>
									<a href="<?= base_url('admin/data_siswa/delete/'.$re['id_siswa']) ?>" onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger btn-xs fa fa-remove tipsy-kiri-atas" title="Hapus Data Ini"><i class="icon-remove icon-white"></i></a> 
									<a href="<?= base_url('admin/data_siswa/edit/'.$re['id_siswa']) ?>" class="btn btn-default btn-xs fa fa-pencil tipsy-kiri-atas" title='Edit Data ini'> <i class="icon-edit icon-white"></i></a>
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