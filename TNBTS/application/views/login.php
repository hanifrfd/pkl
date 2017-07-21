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
        <script src='<?php base_url(); ?>toolkit/js/bootstrap.min.js'></script>

        <link rel='stylesheet' type='text/css' href='<?php base_url(); ?>toolkit/css/style.css'>
    </head>
    <body style="color: white">
        <div class="wrapper">
            <div class="container kolom" style="width: 30%; background-color: rgba(5,5,5,0.6); margin-top: 5%;">
                <div id="kolom">                    
                    <h3 style="margin-bottom: 0;"><b>TAMAN NASIONAL</b></h3>
                    <h3 style="margin-top: 0; margin-bottom: 50px"><b> BROMO TENGGER SEMERU</b></h3>
                    	
                    <form id="login" method="post" action="<?php base_url()?>Welcome/cek_login">
                        <ul>
                            <h5><b>USERNAME</b></h5>
                            <input type="text" name="username" placeholder="Username" required style="width: 67%">
                        </ul>
                        <ul>
                            <h5><b>PASSWORD</b></h5>
                            <input type="password" name="password" placeholder="Password" required style="width: 67%">
                        </ul>
                        <ul>
                            <button type="submit" name="login" value="Log in" id="loginbutton">Login</button>
                        </ul>
                    </form>		
                </div>            
            </div>
        </div>
    </body>
</html>
