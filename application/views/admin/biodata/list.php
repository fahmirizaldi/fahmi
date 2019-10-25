<?php $this->load->view("_partial/admin/header.php") ?>
<h3><span class="glyphicon glyphicon-user"></span> Biodata</h3>
<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" type="submit" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span>Tambah Biodata</button>
<br/>
<br/>


<?php 
//$per_hal=10;
//$jumlah_record=mysqli_query($koneksi,"SELECT COUNT(*) from biodata");
//jum=mysql_result($jumlah_record, 0);
//$jum=mysqli_fetch_array($jumlah_record,MYSQLI_NUM);
//$halaman=ceil($jum[0] / $per_hal);
//$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
//$start = ($page - 1) * $per_hal;
?>
<div class="col-md-12">
	<table class="col-md-2">
		<tr>
			<td>Jumlah Biodata</td>		
			<td><?php //echo ':'.' '.$jum[0]; ?></td>
		</tr>
		<tr>
			<td>Jumlah Halaman</td>	
			<td><?php //echo ':'.' '.$halaman; ?></td>
		</tr>
		
	</table>
	<form action="cari_act.php" method="get">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
		<input type="text" class="form-control" placeholder="Cari.." name="cari">
	</div>
	</form>
</div>
<table class="table table-hover">		
	</tr>
	<tr>
		<th class="col-sm-1">No</th>
		<th class="col-sm-2">Nama</th>
		<th class="col-sm-1">Jenis Kelamin</th>
		<th class="col-sm-1">TTL</th>
		<th class="col-sm-1">Alamat</th>
		<th class="col-sm-1">Agama</th>
		<th class="col-sm-1">Status</th>
		<th class="col-sm-1">foto</th>
		<th class="col-sm-3">Resume</th>
		<!-- <th class="col-md-1">Sisa</th>		 -->
	</tr>
	<?php 
	//if(isset($_GET['cari'])){
		//$cari=mysqli_real_escape_string($koneksi,$_GET['cari']);
		//$brg=mysqli_query($koneksi,"select * from biodata where nama like '%$cari%'");
	//}else{
		//$brg=mysqli_query($koneksi,"select * from biodata limit $start, $per_hal");
	//}
	$no=1;
	//while($b=mysqli_fetch_array($brg)){
	?>
			<?php foreach ($biodata as $b): ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $b->Nama ?></td>
			<td><?php echo $b->Jenis_Kelamin ?></td>
			<td><?php echo $b->TTL ?></td>
			<td><?php echo $b->Alamat ?></td>
			<td><?php echo $b->Agama ?></td>
			<td><?php echo $b->Status ?></td>
			<td><?php echo $b->foto ?></td>
			<td><?php echo $b->Resume ?></td>
			<td>
				<a href="<?= base_url('admin/biodata/edit/') . $b->kode_biodata ?>" class="btn btn-warning">Edit</a>
				<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href="<?= base_url('admin/biodata/delete') . $b->kode_biodata ?>" }" class="btn btn-danger">Hapus</a>
			</td>
		</tr>		
			<?php endforeach; ?>
		<?php 
	//}

	?>
</table>
<!-- Disini Tampilan Halaman -->
		<?php/*$query = "SELECT max (buku_kode) as maxKode FROM buku";
		$hasil = mysqli_query($koneksi, $query);
		$data = mysqli_fetch_array($hasil);
		$buku_kode = $data['maxKode'];
		$noUrut = (int) substr($buku_kode,4,4);
		$noUrut++;
		$kode = "B-";
		$newID = $kode . sprintf("%03s",$noUrut);*/
		?>
<!-- modal input -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Biodata Baru</h4>
			</div>
			<div class="modal-body">
				  <form role="form" action="<?php base_url('admin/biodata/add') ?>" method="post" enctype="multipart/form-data" >
                <div class="card-body">
				
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control <?php echo form_error('Nama') ? 'is-invalid':'' ?>" id="Nama" placeholder="Nama" name="Nama">
                    <div class="invalid-feedback">
                        <?php echo form_error('Nama') ?>
                    </div>
                </div>
                  

                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <input type="text" class="form-control <?php echo form_error('Jenis_Kelamin') ? 'is-invalid':'' ?>" id="Jenis_Kelamin" placeholder="Jenis Kelamin" name="Jenis_Kelamin">
                    <div class="invalid-feedback">
                        <?php echo form_error('Jenis_Kelamin') ?>
                    </div>
                </div>
				  
                <div class="form-group">
                    <label for="ttl">Tempat, Tanggal Lahir</label>
                    <input type="text" class="form-control <?php echo form_error('TTL') ? 'is-invalid':'' ?>" id="TTL" placeholder="Tempat, Tanggal Lahir" name="TTL">
                    <div class="invalid-feedback">
                        <?php echo form_error('TTL') ?>
                    </div>
                </div>
				  
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control <?php echo form_error('Alamat') ? 'is-invalid':'' ?>" id="Alamat" placeholder="Alamat" name="Alamat">
                    <div class="invalid-feedback">
                        <?php echo form_error('Alamat') ?>
                    </div>
                </div>
				
                <div class="form-group">
                    <label for="agama">Agama</label>
                    <input type="text" class="form-control <?php echo form_error('Agama') ? 'is-invalid':'' ?>" id="Agama" placeholder="Agama" name="Agama">
                    <div class="invalid-feedback">
                        <?php echo form_error('Agama') ?>
                    </div>
                </div>
				
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" class="form-control <?php echo form_error('Status') ? 'is-invalid':'' ?>" id="Status" placeholder="Status" name="Status">
                    <div class="invalid-feedback">
                        <?php echo form_error('Status') ?>
                    </div>
                </div>
				
				<div class="form-group">
                    <label for="resume">Keterangan</label>
                    <textarea class="form-control <?php echo form_error('Keterangan') ? 'is-invalid':'' ?>" id="Keterangan" style="width: 100%" name="Keterangan"></textarea>
                    <div class="invalid-feedback">
                        <?php echo form_error('Keterangan') ?>
                    </div>
                </div>
				
				<div class="form-group">
                    <label for="foto">Foto</label></br>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input <?php echo form_error('foto') ? 'is-invalid':'' ?>" id="foto" name="foto">
                        <label class="custom-file-label" for="foto">Choose file</label>
                        <div class="invalid-feedback">
                            <?php echo form_error('foto') ?>
                        </div>
                      </div>
                    </div>
                </div>
				  
                <div class="form-group">
                    <label for="resume">Resume</label>
                    <textarea class="form-control <?php echo form_error('Resume') ? 'is-invalid':'' ?>" id="Resume" style="width: 100%" name="Resume"></textarea>
                    <div class="invalid-feedback">
                        <?php echo form_error('Resume') ?>
                    </div>
                </div>
                    
                
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
		</div>
	</div>
</div>


<?php $this->load->view("_partial/admin/footer.php") ?>
