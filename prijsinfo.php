<!DOCTYPE html>
<html lang="en">

<head>
	<title>Fit en Fun - Prijsinfo</title>
    <?php include_once('includes/head.html') ?>
</head>

<body>

    <!-- Navigation -->
    <?php include_once('includes/navbar.html') ?>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('img/slider1.png');"></div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/slider2.png');"></div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/slider3.png');"></div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        
        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Prijsinfo</h2>
            </div>
            <h4>Strippenkaart</h4>
            <p>Er wordt gewerkt met strippenkaarten van 10 strippen voor € 60,-  20 strippen voor € 95,- en 30 strippen voor €120,-</p>
            <p>We rekenen géén inschrijfgeld of administratiekosten.</p>
            <p>
                De kaarten van 10 en 20 ritten blijven onbeperkt geldig, maar die van 30 ritten heeft vanaf 1 december weer een geldigheidsduur van 3 maanden.
                De vakanties komen nog steeds voor mijn rekening, dus mocht er een vakantie binnen die 3 maanden vallen, 
                wordt de geldigheidsduur van de kaart verlengd met de duur van de vakantie. Als er omstandigheden zijn waardoor je niet kunt sporten, 
                laat het dan even weten, dan word je uiteraard ook niet aan deze geldigheidsduur gehouden.
                Vanaf komende week zullen de strippenkaarten niet meer persoonsgebonden zijn. Zeker ook omdat de yoga en de bootcamp 
                lessen zijn die ook voor andere gezinsleden geschikte lessen zijn om te volgen. Je kan dan dus met het hele gezin op één kaart. 
                Je naam komt nog wel gewoon op de kaart, maar dit om onduidelijkheid te voorkomen als je je kaart een keer in de kleedkamer of zaal laat liggen.....
            </p>
            <p>Zorgt u zelf a.u.b. voor een handdoek, matje en eventueel gewichtjes.</p>
            <p>Een dynaband kunt u bij ons aanschaffen voor € 5,00.</p>
            <p>Wilt u er s.v.p. rekening mee houden dat betalen alleen contant kan.</p>
            
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <?php include_once('includes/footer.html') ?>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
