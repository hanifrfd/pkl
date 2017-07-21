<!DOCTYPE html>
<html>
    <head>
        <title>Kasir Kober Mie Setan</title>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='shortcut icon' href='img/'/>

        <link rel="stylesheet" type='text/css' href="<?php base_url(); ?>toolkit/css/jquery-ui.css">
        <link rel="stylesheet" type='text/css' href="<?php base_url(); ?>toolkit/css/bootstrap.min.css">

        <script src='<?php base_url(); ?>toolkit/js/jquery-2.1.1.min.js'></script>
        <script src="<?php base_url(); ?>toolkit/js/jquery-ui.js"></script>
        <script src='<?php base_url(); ?>toolkit/js/bootstrap.min.js'></script><script>
            $(document).ready(function () {
                var count1 = 1;
                var count2 = 1;
                $("#tambah").click(function () {
                    $("#pesanan").append("<div class='margin-pesanan'> <select name='pesanan" + (++count1) + "' id='sel1'> <option></option> <option>1</option> <option>2</option> <option>3</option> </select> <input type='number' name='jumlah" + (++count2) + "' required> </div>");
                });
            });
        </script>


        <link rel='stylesheet' type='text/css' href='<?php base_url(); ?>toolkit/css/style.css'>
    </head>
    <body style="color: white">

        <!-- NAVIGATION -->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="collapse navbar-collapse">
                    <div class="col-xs-9 col-sm-10 col-md-11 navi">
                        <h1>Kasir</h1>
                    </div>
                    <ul class="col-xs-3 col-sm-2 col-md-1 nav nav navbar-nav navbar-right">
                        <li><a href=""><span class="glyphicon glyphicon-off"></span></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Nota -->
        <div class="container-fluid" style="padding: 0">
            <!-- Form Pesanan -->
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-xs-12 min-high" style="background-color: #99000B; font-size: 20px">
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 min-high-lg" style="background-color: #E6E6E6; color: #333; font-size: 15px;">
                        <div class="container-fluid" style="background-color: white; margin: 15px auto; padding: 20px 30px;">
                            <div class="row" style="margin-bottom: 10px">
                                <div class="col-xs-12" style="text-align: center;">
                                    <h3 style=" margin-top: 10px">KOBER</h3>
                                    <h3 style=" margin-top: 0; margin-bottom: 15px">MIE SETAN</h3>
                                </div>
                            </div>
                            <div class="row" style="margin-bottom: 10px">
                                <div class="col-xs-6">
                                    <span class="glyphicon glyphicon-user" style="margin-right: 10px"></span> Danu
                                </div>

                                <div class="col-xs-6" style="text-align: right">
                                    02 Mei 2017
                                </div>
                            </div>

                            <div class="row" style="margin-bottom: 10px;">
                                <div class="col-xs-6">
                                    Kasir: Kasir1
                                </div>

                                <div class="col-xs-6" style="text-align: right">

                                </div>
                            </div>

                            <div class="row" style="margin: auto 0">
                                <table id="pesanan" style="width: 100%;">
                                    <thead style="border-bottom: 3px solid #BF000E; border-top: 3px solid #BF000E; color: #BF000E; font-weight: bold">
                                        <tr>
                                            <td>ITEM</td>
                                            <td style="text-align: center">QTY</td>
                                            <td style="text-align: right">HARGA</td>
                                        </tr>
                                    </thead>
                                    <tbody style="border-bottom: 3px solid #BF000E;">
                                        <tr style="border-top: 2px solid #D0D0D3;">
                                            <td>Mie Setan Lv1</td>
                                            <td style="text-align: center">2</td>
                                            <td style="text-align: right">Rp 16.000</td>
                                        </tr>
                                        <tr style="border-top: 2px solid #D0D0D3;">
                                            <td>Mie Setan Lv5</td>
                                            <td style="text-align: center">1</td>
                                            <td style="text-align: right">Rp 8.000</td>
                                        </tr>
                                        <tr style="border-top: 2px solid #D0D0D3;">
                                            <td>Es Tuyul</td>
                                            <td style="text-align: center">1</td>
                                            <td style="text-align: right">Rp 5.000</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table id="total" style="width: 100%;">
                                    <thead style="border-bottom: 3px solid #BF000E;">
                                        <tr>
                                            <td style="padding-top: 10px">Subtotal</td>
                                            <td style="text-align: right; padding-top: 10px">Rp 29.000</td>
                                        </tr>
                                        <tr>
                                            <td>Diskon</td>
                                            <td style="text-align: right">0%</td>
                                        </tr>
                                        <tr>
                                            <td style="padding-bottom: 10px">Pajak</td>
                                            <td style="text-align: right; padding-bottom: 10px">Rp 3.000</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="padding-top: 10px">TOTAL</td>
                                            <td style="text-align: right;padding-top: 10px">Rp 32.000</td>
                                        </tr>
                                        <tr>
                                            <td style="padding-bottom: 10px">DIBAYAR</td>
                                            <td style="text-align: right; border-bottom: 3px solid #BF000E; padding-bottom: 10px">Rp 50.000</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td style="padding-top: 10px">KEMBALI</td>
                                            <td style="text-align: right;padding-top: 10px">Rp 18.000</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row" style="margin-top: 35px">
                                <div class="col-xs-12" style="text-align: center;">
                                    Terima Kasih Atas Kunjungannya
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Status -->
            <div class="col-sm-8" style="font-size: 18px;">
                <div class="row">
                    <div class="col-xs-12 min-high" style="background-color: #BF000E">
                        <div style="padding: 18px 0;; text-align: center">
                            <span class="glyphicon glyphicon-user" style="margin-right: 10px"></span> No. order 15
                        </div>
                    </div>
                    <div class="col-xs-12 min-high-lg" style="background-color: #F2F2F2; color: #333; border-left: 2px solid #D0D0D3; text-align: center; font-size: 20px; padding: 55px 0;">
                        <img alt="sucses" src="<?php base_url(); ?>toolkit/asset/suckses.svg" width="250px">
                        <br><br>
                        Kembali <strong>Rp 18.000</strong> dibayar dengan <strong>TUNAI</strong>
                        <form method="post">
                            <input type="submit" name="secak" value="CETAK STRUK" required style="padding: 12px 15px; width: 200px">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>