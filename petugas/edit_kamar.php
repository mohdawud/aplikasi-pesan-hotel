<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Kamar</title>

	<!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../template2/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../template2/dist/css/adminlte.min.css">
</head>
<body>
	<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Data Kamar</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="simpan_edit.php" method ="post" autocomplete="off" enctype="multipart/form-data">

                <?php 
                  
                  include "../koneksi.php";
                  $id_kamar = $_GET['id'];
                  $query = mysqli_query($koneksi, "SELECT * FROM kamar where id_kamar = $id_kamar");
                  while ($data = mysqli_fetch_array($query)) {
                    ?>
                   <input type="hidden" value="<?php echo $data['id_kamar'];?>" name="id_kamar"> 
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Kamar</label>
                    <input type="text" name="nama_kamar" class="form-control" id="exampleInputEmail1" value= " <?php echo $data['nama_kamar'];?> ">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Fasilitas Kamar</label>
                    <input type="text" name="fasilitas_kamar" class="form-control" id="exampleInputPassword1" value="<?php echo $data['fasilitas_kamar'];?>">
                  </div>
                  <div class="form-group">
                    <label>Jumlah Kasur</label>
                    <input type="number" name="jumlah" class="form-control" id="exampleInputPassword1" value="<?php echo $data['jumlah_kasur'];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Upload Gambar</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="gambar" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="custom-file">
                        <img src="../img/<?php echo $data["gambar_kamar"]; ?>" width = 100 title="<?php echo $data['gambar_kamar']; ?>">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name = "proses" value = "proses" class="btn btn-primary">SIMPAN</button>
                </div>

              <?php } ?>
              </form>
            </div>
            <!-- /.card -->
          </div>
        <!-- /.row -->
    	</div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- jQuery -->
<script src="../template2/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../template2/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../template2/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../template2/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../template2/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>