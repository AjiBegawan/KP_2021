<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Shopping</title>
</head>

<body>
    <h1>Shopping</h1>


    <!-- Fixed navbar -->

    <!-- Begin page content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    <?php
                    foreach ($barang->result() as $row) {
                    ?>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card">
                                <form method="post" action="<?php echo base_url(); ?>/shopping/tambah" method="post" accept-charset="utf-8">
                                <a href="#"><img class="img-thumbnail" src="<?php echo base_url("assets\image\Dftr_nft.jpg") ; ?>"/></a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="#"><?php echo $row->nama; ?></a>
                                        </h4>
                                        <h5>Rp. <?php echo number_format($row->harga, 0, ",", "."); ?></h5>
                                        <p class="card-text"><?php echo $row->jumlah; ?></p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="<?php echo base_url(); ?>shopping/detail_produk/<?php echo $row->id; ?>" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-search"></i> Detail</a>
                                        <input type="hidden" name="id" value="<?php echo $row->id; ?>" />
                                        <input type="hidden" name="nama" value="<?php echo $row->nama; ?>" />
                                        <input type="hidden" name="harga" value="<?php echo $row->harga; ?>" />
                                        <input type="hidden" name="gambar" value="<?php echo $row->jumlah; ?>" />
                                        <input type="hidden" name="qty" value="1" />
                                        <button type="submit" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-shopping-cart"></i> Beli</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    <?php } ?>
                </div>

            </div>
            <!-- /.row -->
        </div>
        <!-- /.col-lg-9 -->


    </div>
    <!-- /.row -->

    </div>


    <div class="container" style="width: 700px;"></div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
</body>

</html>