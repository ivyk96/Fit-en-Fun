<!DOCTYPE html>
<html lang="en">

<head>
	<title>Fit en Fun - Home</title>
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
                <h2 class="page-header">Fit en Fun Aerobics</h2>
            </div>
            <div class="col-md-6">
                <p>Je wilt gezellig sporten in groepsverband, maar geen gebruik maken van snelbruiners, een sauna of andere kostenverhogende faciliteiten. Dan wil je daar toch ook niet voor betalen?</p>
                <p>Kom dan naar Fit & Fun Aerobics!</p>
                <p>De lessen worden gegeven op 3 verschillende locaties in Papendrecht door Jolanda Faro.</p>
                <p>Zij is internationaal gecertificeerd aerobic docente en gediplomeerd gewichtsconsulente en heeft ruim 20 jaar leservaring, waarvan 10 jaar bij Fit Point.</p>
                <p>Het motto van Fit & Fun Aerobics is: op verantwoorde wijze, resultaatgericht en met veel plezier bewegen!</p>
                <p>Bel gerust voor een gratis proefles of meer informatie: 06-41696046</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="img/bodydynamics.png" alt="">
            </div>
        </div>
        <!-- /.row -->

		<div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Favoriete lessen</h2>
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6">
                <a href="clubjoyyoga.php">Yoga<img class="img-responsive customer-img" src="img/yoga.png" alt=""></a>
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6">
                <a href="callanetics.php">Callanetics<img class="img-responsive customer-img" src="img/callanetics.png" alt=""></a>
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6">
                <a href="highshape.php">High Shape<img class="img-responsive customer-img" src="img/highshape.png" alt=""></a>
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6">
                <a href="boksdance.php">Boksdance<img class="img-responsive customer-img" src="img/boksdance.png" alt=""></a>
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6">
                <a href="indoorbootcamp.php">Indoor Bootcamp<img class="img-responsive customer-img" src="img/indoorbootcamp.png" alt=""></a>
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6">
                <a href="sportiefwandelen.php">Sportief wandelen<img class="img-responsive customer-img" src="img/sportiefwandelen.png" alt=""></a>
            </div>

        </div>
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
