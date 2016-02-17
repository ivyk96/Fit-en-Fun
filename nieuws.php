<!DOCTYPE html>
<html lang="en">

<head>
	<title>Fit en Fun - Nieuws</title>
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
                <h2 class="page-header footertekst">Nieuws</h2>
            </div>
            <div class="col-md-12">
                <div class="col-md-8">
                <p>
                    Zondag 14 februari is het weer Valentijns dag. Het leek mij leuk om iets te organiseren dat jullie niks kost, maar juist iets oplevert, dus:
                </p>
                <p>
                    In de week voorafgaand aan Valentijnsdag (dus van maandag 8 februari t/m vrijdag 12 februari) kun je een vriend of vriendin meenemen, die dan een (uiteraard gratis) proefles volgt. Jullie ontvangen dan alle twee een hartje.
                </p>
                <p>
                    Bij aanschaf van je volgende kaart, en je vriend(in) bij het kopen van haar/zijn kaart, lever je deze in en ontvang je € 5 korting!!
                    Dus doe mee en haal die vriend of vriendin over om lekker te komen sporten en………..word er zelf ook beter van!!
                </p>

                <p>
                    Ik hoop dat alles zo duidelijk is en dan zie ik jullie graag zo snel mogelijk weer!
                </p>
                </div>
            	<div class="col-md-4">
                    <img class="img-responsive" src="img/hartrennen.jpg" alt="">
                </div>

			</div>
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
