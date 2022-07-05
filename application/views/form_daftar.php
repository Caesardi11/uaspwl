<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style.css'); ?>"/>
    </head>
    <body>
        <div class="container tab" >
                <form action="<?php echo base_url()."First/proses_daftar"; ?>" method="post">
                <br>
                <h3 class="text-center">Daftar</h3>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control"  id="nmMerket" placeholder="nama">
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control"  id="nmMerket" placeholder="username">
                    </div>
                    <div class="form-group">
                        <label >Password</label>
                        <input type="password" name="password" class="form-control"  id="nmCrypto" placeholder="password">
                    </div>
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>