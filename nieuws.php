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
            	<p><b>Beste sportieve allemaal!</b></p>
            	<p>Nog een paar weken en dan is het al weer kerstvakantie
            		<br>
            		<br>
            		Tot dan gaan (uiteraard) alle lessen gewoon door, want Sinterklaasavond valt dit jaar op zaterdag.....
            		<br>
            		<br>
            		De eerste week van de kerstvakantie gaan de lessen van maandag 21 december tot en met woensdag 23 december gewoon door (vrijdag is het 1e kerstdag, dus dan “hoef” je niet hoor)!
					Dus zelfde tijd, zelfde plaats, zelfde juf (sorry!!), zelfde les als je gewend bent. De week tussen kerst en oud en nieuw is er geen les (maandag 28 december tot en met vrijdag 1 januari).
					<br>
					<br>
					Uiteraard gaan we er vanaf maandag 4 januari gewoon weer lekker tegenaan om alles wat we er aan gegeten hebben weer vanaf te sporten! Je mag natuurlijk ook vast een afspraak met me maken als je hulp nodig heb om af te vallen.....
				</p>
				</div>

            <div class="col-md-8">
            <hr>
                <p>Bent u in de vakantie een paar kilo aangekomen en wilt u die er op een leuke en gezonde manier weer af hebben? Of misschien was u al iets te zwaar....... Doe dan vanaf vrijdag 4 september mee met de circuittraining in de kleinschalige, moderne fitnessruimte van Top Spin in Zwijndrecht.</p>

				<p>Wekelijks van 10.45 uur tot 11.30 uur op een leuke en afwisselende manier bewegen: fitness, grondoefeningen, cardio...... In groepsverband, maar afgestemd op het individu, dus geschikt voor iedereen! De lessen worden begeleid door een gediplomeerde sportinstructrice / voedingscoach.</p>

				<p>Daarna eventueel aansluitend van 11.45 tot 12.15 een half uur voedingsbegeleiding en wegen.</p>

				<p>Kosten voor de circuit training bedragen € 60,00 voor een strippenkaart van 10 keer (die u overigens ook voor de andere lessen van Fit & Fun kunt gebruiken).</p>

				<p>Kosten voor de totale cursus van 10 keer sporten én 10 wekelijkse voedingsbegeleidingen bedragen € 150,00.</p>
			</div>

			<div class="col-md-12">
			<hr>
                <p><b>Indoor Bootcamp</b></p>
                <p>
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
