<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Siswa</title>
  </head>
  <body>
    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              BILL
            </div>
            <div class="card-body">
              <form action="simpan.php" method="POST">
                <div class="form-group">
                  <label>id </label>
                  <input type="text" name="id" placeholder="Masukkan id" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama </label>
                  <input type="text" name="Nama" placeholder="Masukkan Nama" class="form-control">
                </div>

                <div class="form-group">
                  <label>Minuman</label>
                  <input type="text" name="Minuman" placeholder="Masukkan Nama Minuman" class="form-control">
                </div>

                <div class="form-group">
                  <label>Makanan</label>
                  <textarea class="form-control" name="Makanan" placeholder="Masukan nama makanan” rows="4"></textarea>
                </div>

                <div class="form-group">
                  <label>Total harga</label>
                  <textarea class="form-control" name="Total" placeholder="Masukkan Total harga” rows="4"></textarea>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Yakin dengan pesanan anda?
                  </label>
                </div>
                <button type="submit" class="btn btn-success">SIMPAN</button>
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