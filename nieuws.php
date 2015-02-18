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
                <p>
                    <b>Leuke februari – aktie!!</b><br>

Voor de hele maand februari heb ik een aktie bedacht om nog meer mensen te laten genieten van de leuke, diverse en gevarieerde lessen van Fit & Fun. Jij als bestaand lid van Fit & Fun kan hier je voordeel mee doen:

Neem in februari iemand mee (die nog geen lid is) voor een gratis proefles. Als deze persoon dan vervolgens een strippenkaart koopt, krijg jij een les gratis! Zo snijdt het mes aan 2 kanten (of eigenlijk aan 3, haha).
                </p>
                <p>
                    <b>Indoor Bootcamp</b><br>

Kom ook een keer deze leuke, pittige, maar goed te doseren les meedoen. Je kunt het zo zwaar maken als je zelf wilt, dus ook voor de beginnende sporter geschikt. Er komen al steeds meer heren bij (ook echtparen!), maar ook jongeren zijn natuurlijk van harte welkom. Het hele gezin of de familie mag op 1 kaart! Woensdagavond in de Willem om 20.00 uur. Enne....de les duurt “maar” 45 minuten!
                </p>

            
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
