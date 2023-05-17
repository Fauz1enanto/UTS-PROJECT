<?php 
  
  include('koneksimysql.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM customer WHERE id = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Siswa</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT SISWA
            </div>
            <div class="card-body">
              <form action="update.php" method="POST">
                
                <div class="form-group">
                  <label>id Pembeli</label>
                  <input type="text" name="id" value="<?php echo $row['id'] ?>" placeholder="Masukkan NISN Siswa" class="form-control”>
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                </div>

                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="Nama" value="<?php echo $row['Nama'] ?>" placeholder="Masukkan Nama Siswa" class="form-control">
                </div>

                <div class="form-group">
                  <label>Minuman </label>
                  <textarea class="form-control" name="Minuman" placeholder="Masukkan Alamat Siswa" rows="4"><?php echo $row['Minuman'] ?></textarea>
                </div>

                <div class="form-group">
                  <label>Makanan  </label>
                  <textarea class="form-control" name="Makanan " placeholder="Masukkan Alamat Siswa" rows="4"><?php echo $row['Makanan'] ?></textarea>
                </div>

                <div class="form-group">
                  <label>Total  </label>
                  <textarea class="form-control" name="Total" placeholder="Masukkan Alamat Siswa" rows="4"><?php echo $row['Total'] ?></textarea>
                </div>

                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>