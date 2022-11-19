<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/dist/css/bootstrap.css') ?>">
    <title>TAMPIL DATA</title>
</head>

<body>
    <div class="container mt-4 p-4">
        <div class="card shadow">
            <div class="card-header ">
                <div class="row">
                    <div class="col-10">
                        <h1 class="mt-2 text-success"> DATA ASET </h1>
                    </div>
                    <div class="col-2">
                        <a href="<?= site_url('asetcontroller/tambah') ?>" class="btn btn-success m-3 ">Tambah Data</a>
                    </div>
                </div>

            </div>
            <div class="card-body p-5">

                <table class="table table-hover text-center">
                    <thead class="table-success " style="font-weight:bolder;">
                        <tr >
                            <td>NO</td>
                            <td>NAMA ASET</td>
                            <td>JENIS</td>
                            <td>LOKASI</td>
                            <td>JUMLAH</td>
                            <td>AKSI</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php $no = 1;
                            foreach ($aset as $ast) : ?>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $ast['nama_aset'] ?> </td>
                                <td><?php echo $ast['jenis'] ?> </td>
                                <td><?php echo $ast['lokasi'] ?> </td>
                                <td><?php echo $ast['jumlah'] ?> </td>
                                <td>
                                    <a href="#" class="btn btn-warning"> Ubah </a>
                                    <a href="" class="btn btn-danger"> Hapus </a>

                                </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
</body>

</html>