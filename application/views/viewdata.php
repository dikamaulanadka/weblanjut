<!DOCTYPE html>
<html>
    
    <head>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/dist/css/bootstrap.css') ?>">
    </head>
    <body>
    <div class="container">    
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
    </body>
</html>