<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="<?= base_url('assets/bootstrap/dist/css/bootstrap.css') ?>">
</head>

<body>
  <div class="container">
    <div class="alert alert-primary text-center mt-3" role="alert">
      <h4> DIKA MAULANA / 2001050001 </h4>
    </div>

    <div class="card">
      <div class="card-header">
        <h6>DATA MAHASISWA</h6>
      </div>

      <div class="card-body">
        <div class="d-flex p-2 w-100 bd-highlight ml-auto">
          <a href="" class="btn btn-info "> TAMBAH DATA </a>
        </div>


        <table class="table table-bordered text-center mt-4">
          <thead>
            <tr>
              <th scope="col">FAKULTAS</th>
              <th scope="col">PRODI</th>
              <th scope="col">KELAS</th>
              <th scope="col">ISI</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php foreach ($mahasiswa as $mhs) : ?>

                <td><?php echo $mhs['fakultas']; ?> </td>
                <td><?php echo $mhs['prodi']; ?> </td>
                <td><?php echo $mhs['kelas']; ?> </td>
                <td><?php echo $mhs['isi']; ?> </td>
            </tr>
          <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
</body>

</html>