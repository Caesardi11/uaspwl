<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Cryport</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/stylesheet.css');?>">
    </head>
    <body>
        <header class="header fixed-top">
            <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
                <a class="logo d-flex align-items-center" href="#">
                    <span>Cryport</span>
                </a>

                <div class="navbar">
                    <ul>
                        <li><a class="getstarted scrollto" href="<?php echo base_url()."Welcome/logOut"; ?>">Logout</a></li>
                    </ul>
                </div>
            </div>
        </header>

        <!-- ======= Hero Section ======= -->
        <section class="hero d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex flex-column justify-content-center">
                        <h1>Dapatkan Crypto</h1>
                        <h1>Dapatkan Cuan</h1>
                        <h2>Cukup klik tombol dibawah ini maka anda akan mendapatkan crypto dengan mudah didalam mimpi</h2>
                        <div>
                            <div class="text-center text-lg-start">
                                <a href="#values" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Dapatkan Crypto</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 hero-img">
                        <img src="assets/btc.png" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </section>

        <!-- End Hero -->
        <section id="values" class="values">
            <div class="container">
                <header class="section-header">
                    <p>Pendapatan Cryptomu Saat Ini</p>
                </header>
                <?php
                    foreach($dataCoin as $dataCoin) {
                ?>
                <div class="row">
                    <div class="col">
                        <div class="box">
                            <h2><?php echo $dataCoin['nama_coin'];?></h2>
                            <?php if ($dataCoin['id_coin'] == 1) {?>
                                <img src="<?php echo base_url('assets/btc-1.png') ?> " class="img-fluid" alt="" style="width: 500px;"/>
                                <h3><?php echo $dataCoin['harga_coin']." BTC";?></h3>
                            <?php } elseif ($dataCoin['id_coin'] == 2) {?>
                                <img src="<?php echo base_url('assets/eth.png') ?> " class="img-fluid" alt="" style="width: 500px;"/>
                                <h3><?php echo $dataCoin['harga_coin']." ETH";?></h3>
                            <?php } elseif ($dataCoin['id_coin'] == 3) {?>
                                <img src="<?php echo base_url('assets/doge.png') ?> " class="img-fluid" alt="" style="width: 500px;"/>
                                <h3><?php echo $dataCoin['harga_coin']." DOGE";?></h3>
                            <?php }?>
                            
                            <p><?php echo "~ Rp.".$dataCoin['harga_rupiah'];?></p>
                        </div>
                    </div>    
                </div>

                
                <?php
                    }
                ?>
            </div>
        </section>

        <!-- Penjualan -->
        <section class="boosting">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <form action="<?php echo base_url()."index.php/welcome/updateData"?>" method="post">
                                <div class="card-body border-5">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="card-title">Penjualan</h2>
                                            <p> Menjual hasil tambang crypto.</p>
                                        </div>
                                        <div class="col-5">
                                            <div class="text-end">
                                                <button type="submit" class="btn btn-primary text-end">
                                                    JUAL
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-3">
                                            <p>Jenis</p>
                                        </div>
                                        <div class="col-8 ms-2">
                                            <select class="form-select" name="namaCoin">
                                                <option selected>Pilih</option>
                                                <?php foreach($dataCoinku as $dc){?>
                                                <option value="<?php echo $dc['nama_coin'];?>">
                                                    <?php echo $dc['nama_coin'];?>
                                                </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <p>Jumlah</p>
                                        </div>
                                        <div class="col-8 ms-2">
                                            <div class="input-group mb-3">
                                                <input name="jumlahCrypto" type="text" class="form-control" placeholder="Jumlah" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <p>Jumlah Rupiah</p>
                                        </div>
                                        <div class="col-8 ms-2">
                                            <div class="input-group mb-3">
                                                <input name="jumlahRupiah" type="text" class="form-control" placeholder="Jumlah" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </section>

        <!-- End Values Section -->
        <section class="boosting">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <form action="<?php echo base_url()."index.php/welcome/tambahData"?>" method="post">
                                <div class="card-body border-5">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="card-title">Paket Booster</h2>
                                            <p> Booster dapat mempercepat kekayaan.</p>
                                        </div>
                                        <div class="col-5">
                                            <div class="text-end">
                                                <button type="submit" class="btn btn-primary text-end">
                                                    BOOST
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-3">
                                            <p>Berapa Kali</p>
                                        </div>
                                        <div class="col-8 ms-2">
                                            <select class="form-select" name="namaBoost">
                                                <option selected>Pilih</option>
                                                <?php foreach($dataBoost as $db){?>
                                                <option value="<?php echo $db['nama'];?>">
                                                    <?php echo "x ".$db['nama']."%"?>
                                                </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-3">
                                            <p>Kecepatan</p>
                                        </div>
                                        <div class="col-8 ms-2">
                                            <select class="form-select" name="kecepatanBoost">
                                                <option selected>Pilih</option>
                                                <?php foreach($dataBoost as $db){?>
                                                <option value="<?php echo $db['kecepatan'];?>">
                                                    <?php echo $db['kecepatan']." H/s"?>
                                                </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <p>Masa Aktif</p>
                                        </div>
                                        <div class="col-8 ms-2">
                                            <input type="number" name="aktifBoost" value=30 class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="box mb-3 pb-0 border border-light rounded-3">
                            <div class="row">
                                <div class="col-11">
                                    <h3>Basic</h3>
                                </div>
                            </div>
                            <p class="my-0"> Boost +0% H/s</p>
                            <p> Masa Aktif : Selamanya</p> 
                        </div>
                        <?php foreach($userBoost as $ub)
                            {
                        ?>
                        <div class="box mb-3 pb-0 border border-light rounded-3">
                            <div class="row">
                                <div class="col-11">
                                    <h3><?php echo "x".$ub['nama']?></h3>
                                </div>
                                <div class="col-1 me-0">
                                    <a href="<?php echo base_url()."index.php/welcome/hapusData/".$ub['id']?>" class="btn btn-close" ></a>
                                </div>
                            </div>
                            <p class="my-0"> Boost +<?php echo $ub['kecepatan']?> H/s</p>   
                            <p> Masa Aktif : <?php echo $ub['masa_aktif']." Hari"?></p>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
