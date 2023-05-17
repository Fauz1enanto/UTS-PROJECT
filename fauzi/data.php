<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>pesan online</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              BILL
            </div>
            <div class="card-body">
              <a href="tambah.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-dark table-sm">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">id.</th>
                    <th scope="col">Nama </th>
                    <th scope="col">Makanan</th>
                    <th scope="col">Minuman</th>
                    <th scope="col">Total </th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('koneksimysql.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM customer");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['id'] ?></td>
                      <td><?php echo $row['Nama'] ?></td>
                      <td><?php echo $row['Makanan'] ?></td>
                      <td><?php echo $row['Minuman'] ?></td>
                      <td><?php echo $row['Total'] ?></td>
                      <td class="text-center">
                        <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>