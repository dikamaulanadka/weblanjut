<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/dist/css/bootstrap.css') ?>">
    <title>Document</title>
</head>

<body>
    <div class="container p-5" style="width:800px;">
        <div class=" card shadow">
            <div class="card-header ">

                <h2 class="p-2 text-center text-primary"> TAMBAH DATA </h2>
            </div>

            <div class="card card-body">

                                                <!-- form action = namacontroller/namafungsi -->
                <form action="<?php echo base_url('/index.php/asetcontroller/proses_tambahdata') ?>" method="post">

                    <div class="form-group row pt-3">
                        <label for="namaaset" class="col-sm-2 col-form-label">Nama Aset</label>
                        <div class="col-sm-10">
                            <input type="text" name="namaaset" class="form-control" id="namaaset">
                        </div>
                    </div>
                    <div class="form-group row pt-3">
                        <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
                        <div class="col-sm-10">
                            <input type="text" name="jenis" class="form-control" id="jenis">
                        </div>
                    </div>
                    <div class="form-group row pt-3">
                        <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                        <div class="col-sm-10">
                            <input type="text" name="lokasi" class="form-control" id="lokasi">
                        </div>
                    </div>
                    <div class="form-group row pt-3 ">
                        <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                        <div class="col-sm-10 ">
                            <input type="text" name="jumlah" class="form-control" id="jumlah">

                            <!-- BUTTON -->
                            <div class="pt-3">
                                <input type="submit" value="Simpan Data" class="btn btn-primary">
                                <a href="<?php echo base_url('/index.php/asetcontroller/index'); ?>" class="btn btn-warning m-2">Back </a>
                            </div>
                            <!-- END BUTTON -->
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>