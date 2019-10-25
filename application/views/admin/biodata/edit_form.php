<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("_partial/admin/header.php") ?>
</head>
<body class="hold-transition sidebar-mini">


<div class="wrapper">


	<div class="content-wrapper">


		<!-- Main content -->
        <section class="content">
            <div class="container-fluid">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Biodata</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php base_url('admin/biodata/edit') ?>" method="post" enctype="multipart/form-data" >
                <div class="card-body">
                <input type="hidden" name="kode_biodata" value="<?php echo $biodata->kode_biodata ?>" />
				
				
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" value="<?php echo $biodata->Nama ?>" class="form-control <?php echo form_error('Nama') ? 'is-invalid':'' ?>" id="Nama" placeholder="Nama" name="Nama">
                    <div class="invalid-feedback">
                        <?php echo form_error('Nama') ?>
                    </div>
                </div>
                  

                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <input type="text" value="<?php echo $biodata->Jenis_Kelamin ?>" class="form-control <?php echo form_error('Jenis_Kelamin') ? 'is-invalid':'' ?>" id="Jenis_Kelamin" placeholder="Jenis Kelamin" name="Jenis_Kelamin">
                    <div class="invalid-feedback">
                        <?php echo form_error('Jenis_Kelamin') ?>
                    </div>
                </div>
				  
                <div class="form-group">
                    <label for="ttl">Tempat, Tanggal Lahir</label>
                    <input type="text" value="<?php echo $biodata->TTL ?>" class="form-control <?php echo form_error('TTL') ? 'is-invalid':'' ?>" id="TTL" placeholder="Tempat, Tanggal Lahir" name="TTL">
                    <div class="invalid-feedback">
                        <?php echo form_error('TTL') ?>
                    </div>
                </div>
				  
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" value="<?php echo $biodata->Alamat ?>" class="form-control <?php echo form_error('Alamat') ? 'is-invalid':'' ?>" id="Alamat" placeholder="Alamat" name="Alamat">
                    <div class="invalid-feedback">
                        <?php echo form_error('Alamat') ?>
                    </div>
                </div>
				
                <div class="form-group">
                    <label for="agama">Agama</label>
                    <input type="text" value="<?php echo $biodata->Agama ?>" class="form-control <?php echo form_error('Agama') ? 'is-invalid':'' ?>" id="Agama" placeholder="Agama" name="Agama">
                    <div class="invalid-feedback">
                        <?php echo form_error('Agama') ?>
                    </div>
                </div>
				
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" value="<?php echo $biodata->Status ?>" class="form-control <?php echo form_error('Status') ? 'is-invalid':'' ?>" id="Status" placeholder="Status" name="Status">
                    <div class="invalid-feedback">
                        <?php echo form_error('Status') ?>
                    </div>
                </div>
				
				<div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea class="form-control <?php echo form_error('Keterangan') ? 'is-invalid':'' ?>" id="Keterangan" style="width: 100%" name="Keterangan"><?php echo $biodata->Keterangan ?></textarea>
                    <div class="invalid-feedback">
                        <?php echo form_error('Keterangan') ?>
                    </div>
                </div>
				
				<div class="form-group">
                    <label for="foto">Foto</label></br>
                    <img class="img-bordered-sm" style="height: auto;width: 30%;" src="<?php echo base_url('assets/img/biodata/'. $biodata->foto ) ?>" alt="user image">
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="hidden" name="old_image" value="<?php echo $biodata->foto ?>" />
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
                    <textarea class="form-control <?php echo form_error('Resume') ? 'is-invalid':'' ?>" id="Resume" style="width: 100%" name="Resume"><?php echo $biodata->Resume ?></textarea>
                    <div class="invalid-feedback">
                        <?php echo form_error('Resume') ?>
                    </div>
                </div>
                    
                
                            
                
				
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="button" class="btn btn-warning" onclick="history.back();">Back</button>
                </div>
              </form>
            </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->		
	</div>
    <!-- /.content-wrapper -->
    
    <!-- Sticky Footer -->
    <?php $this->load->view("_partial/admin/footer.php") ?>

</div>
<!-- /#wrapper -->

    
</body>
</html>