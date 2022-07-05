<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Toko ABC</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/stylesheet.css');?>">
    </head>
    <body>
        <header class="header fixed-top">
            <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
                <a class="logo d-flex align-items-center" href="#">
                    <span>Toko ABC</span>
                </a>

                <div class="navbar">
                    <ul>
                        <li><a class="getstarted scrollto" href="<?php echo base_url()."First/daftar"; ?>">Daftar</a></li>
                        <li><a class="getstarted scrollto" href="<?php echo base_url()."First/login"; ?>">Login</a></li>
                    </ul>
                </div>
            </div>
        </header>

        <!-- ======= Hero Section ======= -->
        <section class="hero d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex flex-column justify-content-center">
                        <h1>TOKO ABC</h1>
                        <h1>Semua barang ada disini!</h1>
                        <div>
                            <div class="text-center text-lg-start">
                                <a href="#values" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Ayo belanja</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 hero-img">
                        <img src="assets/logo_toko.png" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
