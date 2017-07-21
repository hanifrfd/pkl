<!-- <?php 
include "koneksi.php";
include "penjualan.php";
?> -->
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
                var option ;
                var tes ;

                 $.ajax({
                   url: '<?php base_url(); ?>Kasir/datamenu',
                   success: function(data) {
                     $("#sel1").append(data);                                                            
                        option = data;
                    }
                }); 
                
                 
                $("#tambah").click(function () {
                                                            
                    $("#pesanan").append("<div class='margin-pesanan'> <select name='pesanan" + (++count1) + "' id='sel1'>" + option + "</select> <input type='number' name='jumlah" + (++count2) + "' required> </div>");
                    $("#count").val(count1);                    
                });			                    
                  
      //           function showValues() {
			   //    var str = $( "#input" ).serialize();
				  // $(".tes").append(str);
				  //   // jQuery.each( str, function( i, fields ) {
      // 		        // 		$( ".tes" ).append( str) })
				  // }				

    //             $( "#input" ).on( "submit", function( event ) {
  		// 			event.preventDefault();
  		// 			// showValues();
    //                 alert($( "#input" ).length);
				// });

            });
        </script>


        <link rel='stylesheet' type='text/css' href='<?php base_url(); ?>toolkit/css/style.css'>
    </head>
    <body style="color: white">

        <!-- NAVIGATION -->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid" style="padding: 0">
                <div class="collapse navbar-collapse">
                    <div class="col-xs-9 col-sm-10 col-md-11 navi">
                    <h1>Kasir</h1>
                    </div>
                    <ul class="col-xs-3 col-sm-2 col-md-1 nav navbar-nav navbar-right">
                        <li><a href="<?php base_url(); ?>Welcome/logout"><span class="glyphicon glyphicon-off"></span></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Pemesanan -->
        <div class="container-fluid">
            <!-- Form Pesanan -->
            <div class="col-sm-8" style="padding: 0">
                <div class="row">
                    <div class="col-xs-12 min-high" style="background-color: #99000B; font-size: 20px">
                        <form method="post">Pemesan <input type="text" name="nama" style="margin-left: 10px" required class="pemesan" value="tes"></form>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 min-high-lg" style="background-color: #E6E6E6; color: #333; font-size: 20px; padding-right: 35px;">
                        <h3>Pesanan</h3>
                        <form id="input" method="post" action="<?php base_url();?>Kasir/ordersave">                            
                            <input id="count" type="hidden" name="count" value="1">                            
                            
                            <div id="pesanan" class="pesanan">
                                <div class='margin-pesanan'>                                  
                                    <select name="pesanan1" id="sel1">
                                    </select>
                                    <input type="number" name="jumlah1" required>
                                </div>
                            </div>
                            <div class="row m">
                                <div class="right">
                                    <input id="tambah" type="button" name="tambah" value="+" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="right">
                                    <input id="save" type="submit" name="save" value="SAVE" required>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Total Pesanan -->
            <div class="col-sm-4" style="padding: 0; font-size: 18px;">
                <div class="row">
                    <div class="col-xs-12 min-high" style="background-color: #BF000E">
                        <div style="padding: 18px 0;">
                            <span class="glyphicon glyphicon-user" style="margin-right: 10px"></span> No. order 15
                        </div>
                    </div>
                    <div class="col-xs-12 min-high-lg" style="background-color: #F2F2F2; color: #333; border-left: 2px solid #D0D0D3;">
                        <div class="row" style="height: 251px; overflow-y: scroll">
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-xs-6 tes" style="border-bottom: 2px solid #D0D0D3;">
                                        <h4>di sini</h4>
                                    </div>
                                    
                                    <div class="col-xs-6" style="text-align: right">
                                        <h4>harganya</h4>
                                    </div>                                    
                                </div>
                                
                                
                            </div>
                        </div>

                        <div class="row" style="background-color: #E6E6E6;">
                            <div class="col-xs-6">
                                <h4>Subtotal</h4>
                                <h4>Diskon</h4>
                                <h4>Pajak</h4>
                            </div>

                            <div class="col-xs-6" style="text-align: right">
                                <h4>Rp 116.000</h4>
                                <h4>0%</h4>
                                <h4>Rp 3.000</h4>
                            </div>
                        </div>

                        <div class="row nota" style="border-bottom: 2px solid #D0D0D3;">
                            <div class="col-xs-6">
                                <h4><strong>TOTAL</strong></h4>
                            </div>
                            <div class="col-xs-6" style="text-align: right">
                                <h4><strong>Rp 116.000</strong></h4>
                            </div>
                        </div>

                        <div class="row" style="font-size: 18px">
                            <form method="get">
                                <div class="col-xs-6">
                                    <h4><strong>DIBAYAR</strong></h4>
                                </div>
                                
                                <div class="col-xs-6" style="text-align: right">
                                    <strong>Rp </strong> <input class="bayar" type="text" name="bayar" required>
                                </div>
                                
                                <div class="col-xs-12" id="bayar">
                                    <input type="submit" name="bayar" value="BAYAR" required>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>