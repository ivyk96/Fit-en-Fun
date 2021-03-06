<!DOCTYPE html>
<html lang="en">

<head>
	<title>Fit en Fun - ClubJoy Yoga</title>
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
                <h2 class="page-header footertekst">ClubJoy Yoga</h2>
            </div>
            <div class="col-md-6">
                <p>
                    ClubJoy Yoga® is een training waarmee je werkt aan je lichaam en geest. Fitheid is veel meer dan fysiek sterk zijn, ook je geest moet in conditie zijn.
                </p>
                <p>
                    De stem van de coach en de klanken van de muziek nemen je mee, even weg van de drukte. Ontspanning en inspanning wisselen elkaar af.
                    De yogaoefeningen hebben als doel de spieren sterker en langer te maken, maar geven je toch een ontspannen gevoel.
                    Je verlaat de les met een leeg hoofd, een gezond lichaam en nieuwe energie.
                </p>
                <p>
                    ClubJoy Yoga® is geschikt voor een brede doelgroep ongeacht leeftijd, niveau en geslacht.
                </p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="img/yoga.png" alt="">
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
