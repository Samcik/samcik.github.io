<?php
    require_once 'class.phpmailer.php';
?>
<!doctype html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->

<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->

<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->

<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title></title>

        <meta name="description" content="">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">



        <link rel="stylesheet" href="css/bootstrap.min.css">

        <link rel="stylesheet" href="css/bootstrap-theme.min.css">

        <link rel="stylesheet" href="css/main.css">



        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    </head>

    <body>

        <nav>

            <div class="top-right">

                <a href="#facebook"><img src="img/facebook.png" alt="fb"/></a>

                <a href="#contact"><img src="img/mail.png" alt="kn"/></a>

            </div>

            <div class="top-left">

                <a href="index.php"><div class="logo">

                    <img src="img/logo.png" alt="logo" width="180"/>

                </div></a>

                <h1>Świerkowe Rancho</h1>

                <div class="menu">

                    <a href="o-nas.html" class="menu-pos">O <b>NAS</b></a>

                    <a href="galeria.php" class="menu-pos">G<b>ALERIA</b></a>

                    <a href="oferta.php" class="menu-pos">O<b>FERTA</b></a>

                    <a href="kontakt.php" class="menu-pos current">K<b>ONTAKT</b></a>

                </div>

            </div>

            <div class="clearfix"></div>

            <div class="bg-separator"></div>

        </nav>

        <div class="container">

            <div class='main' style="margin-bottom: 20px;">

                <h3>Napisz do nas</h3>
                <form style='float: left; width: 70%' method='POST'>

                    <p>Skorzystaj z naszego formularza kontaktowego i napisz do nas! Podaj swój

                        adres email - musimy przecież wiedzieć komu odpisać, a następnie wpisz treść wiadomości. 

                        <br/><b>Nie zapomnij zaznaczyć kratki!</b>

                    </p>
                    
                    <?php
                    if(isset($_POST['submit'])){
                        $mail = new PHPMailer;
                        $mail->From = $_POST['email'];
                        $mail->addAddress('bandola_1@wp.pl');
                        $mail->Subject = 'Wiadomość ze strony Świerkowego Rancho';
                        $mail->Body = $_POST['text'];
                        if(!$mail->send()) 
                        {
                            echo "<p>Nie udało się wysłać wiadomości, przepraszamy. Spróbuj skontaktować sie z nami telefonicznie.</p>";
                        } 
                        else 
                        {
                            echo "<p>Udało się wysłać wiadomość</p>";
                        }
                    }
                    ?>
                    <input type='email' name='email' id='email' placeholder='Email' required/><br/>

                    <textarea name='text' id='text' placeholder='Treść' required></textarea><br/>

                    <div><span>Nie jestem botem</span><input type='checkbox' name='bot' required/></div>

                    <input type='submit' name='submit' id='submit' value='wyślij'/><br/><br/>
                    <p>
                        Nie musisz korzystać z formularza! Napisz do nas na <a href='mailto:bandola_1@wp.pl'>bandola_1@wp.pl</a>.
                    </p>
                </form>

                <div class='addition'>

                    <p>
                        Możesz także skontaktować się z nami telefonicznie pod numerami:<br/>

                        <span>+48 507 164 717</span><br/>

                        <span>+48 505 152 106</span>

                    </p>
                    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
                    <div style="overflow:hidden;height:300px;width:244px;">
                        <div id="gmap_canvas" style="height:300px;width:244px;"></div>
                        <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
                        <a class="google-map-code" href="http://premium-wordpress-themes.org" id="get-map-data">http://premium-wordpress-themes.org</a></div>
                        <script type="text/javascript"> 
                            function init_map(){
                                var myOptions = {zoom:12,center:new google.maps.LatLng(49.92305189999999,21.36337100000003),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(49.912861, 21.362977)});infowindow = new google.maps.InfoWindow({content:"<b>&#346;wierkowe Rancho</b><br/>Kamienica Dolna 15<br/>39-230 Brzostek" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                </div>

                <div class='clearfix'></div>

            </div>

        </div>

        <footer>

            <div>&#169; Created for <a href="index.php">Świerkowe Rancho</a> <i>by</i> <a href="#rw">Roger Woźniak</a></div>

        </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.js"></script>

        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.js"><\/script>')</script>



        <script src="js/vendor/bootstrap.min.js"></script>



        <script src="js/main.js"></script>



        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->

        <script>

            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=

            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;

            e=o.createElement(i);r=o.getElementsByTagName(i)[0];

            e.src='//www.google-analytics.com/analytics.js';

            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));

            ga('create','UA-XXXXX-X','auto');ga('send','pageview');

        </script>

    </body>

</html>