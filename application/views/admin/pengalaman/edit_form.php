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
                <h3 class="card-title">Edit Pengalaman</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php base_url('admin/pengalaman/edit') ?>" method="post" enctype="multipart/form-data" >
                <div class="card-body">
                <input type="hidden" name="id" value="<?php echo $pengalaman->id_pengalaman ?>" />
				
                <div class="form-group">
                    <label for="foto">Foto</label></br>
                    <img class="img-bordered-sm" style="height: auto;width: 30%;" src="<?php echo base_url('assets/img/pengalaman/'. $pengalaman->Foto ) ?>" alt="user image">
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="hidden" name="old_image" value="<?php echo $pengalaman->Foto ?>" />
                        <input type="file" class="custom-file-input <?php echo form_error('foto') ? 'is-invalid':'' ?>" id="foto" name="foto">
                        <label class="custom-file-label" for="foto">Choose file</label>
                        <div class="invalid-feedback">
                            <?php echo form_error('foto') ?>
                        </div>
                      </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="keterangan">Pengetahuan</label>
                    <textarea class="form-control <?php echo form_error('Pengetahuan') ? 'is-invalid':'' ?>" id="Pengetahuan" style="width: 100%" name="Pengetahuan"><?php echo $pengalaman->Pengetahuan ?></textarea>
                    <div class="invalid-feedback">
                        <?php echo form_error('Pengetahuan') ?>
                    </div>
                </div>
				  
				  
                <div class="form-group">
                    <label for="nama_perusahaan">Nama Perusahaan</label>
                    <input type="text" value="<?php echo $pengalaman->nama_perusahaan ?>" class="form-control <?php echo form_error('nama_perusahaan') ? 'is-invalid':'' ?>" id="nama_perusahaan" placeholder="Perusahaan" name="nama_perusahaan">
                    <div class="invalid-feedback">
                        <?php echo form_error('nama_perusahaan') ?>
                    </div>
                </div>
				
				 <div class="form-group">
                    <label for="nama_perusahaan">Alamat Perusahaan</label>
                    <input type="text" value="<?php echo $pengalaman->alamat_perusahaan ?>" class="form-control <?php echo form_error('alamat_perusahaan') ? 'is-invalid':'' ?>" id="alamat_perusahaan" placeholder="Perusahaan" name="alamat_perusahaan">
                    <div class="invalid-feedback">
                        <?php echo form_error('alamat_perusahaan') ?>
                    </div>
                </div>
				
				 <div class="form-group">
                    <label for="nama_perusahaan">Jam Buka</label>
                    <input type="text" value="<?php echo $pengalaman->jam_buka ?>" class="form-control <?php echo form_error('jam_buka') ? 'is-invalid':'' ?>" id="jam_buka" placeholder="Perusahaan" name="jam_buka">
                    <div class="invalid-feedback">
                        <?php echo form_error('jam_buka') ?>
                    </div>
                </div>
				
				 <div class="form-group">
                    <label for="nama_perusahaan">Pengalaman</label>
                    <input type="text" value="<?php echo $pengalaman->pengalaman ?>" class="form-control <?php echo form_error('pengalaman') ? 'is-invalid':'' ?>" id="pengalaman" placeholder="Perusahaan" name="pengalaman">
                    <div class="invalid-feedback">
                        <?php echo form_error('pengalaman') ?>
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