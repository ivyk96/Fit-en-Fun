<!DOCTYPE html>
<html lang="en">

<head>
	<title>Fit en Fun - Afvallen</title>
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
                <h2 class="page-header footertekst">Afvallen</h2>
            </div>
            <div class="col-md-6">
            
            <p>Vaak lukt dit niet alleen. Daarom heb ik een programma ontwikkeld waarmee jij je doel wel zult bereiken.</p>
            <ul>
                <li>Doordat je tips meekrijgt die zijn afgestemd op jouw eetgewoonte heb je niet het gevoel dat je op dieet bent, maar wordt het meer een nieuwe eetgewoonte. Het afvallen gaat je dus gemakkelijker af en het effect zal blijvend zijn.</li>
                <li>Je krijgt uitgebreide informatie over gezonde voeding en bewegen.</li>
                <li>Je hebt “een stok achter de deur” want je moet om de zoveel tijd toch weer op de weegschaal bij mij.</li>
                <li>Het lijkt duurder (de kosten zijn € 99,--) dan wanneer je niet komt, maar realiseer je eens wat je aan kosten bespaard omdat je geen overbodige dingen meer in huis haalt en je je gezonder en energieker voelt!</li>
            </ul>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="img/weegschaal.png" alt="">
            </div>
            <div class="col-md-12">
                <p>Het programma bestaat uit 5 bijeenkomsten.</p>
                <p>Je krijgt eerst een uitgebreide intake van zo’n 50 minuten waarbij niet alleen je gewicht maar ook je spiermassa, vetpercentage en vochtpercentage wordt gemeten. Verder krijg je uitgebreide informatie over wat nu gezonde voeding is: je ziet toch door de bomen het bos niet meer met al die artikelen over superfoods, wel of geen koolhydraten, ontbijt wel of niet overslaan, wel of geen tussendoortjes, lightproducten, en ga zo maar door!!!</p>
                <p>Mede op basis van je persoonlijk situatie en voorkeur wordt er een op maat gesneden voedingsplan gemaakt.</p>
                <p>In de daar op volgende 4 bijeenkomsten van zo’n 25 minuten word je steeds gewogen, verfijnen we je eetplan en krijg je handige tips mee waardoor je gezonde eetgewoonte ook leuk blijft en je dit dus blijft volhouden!</p>
                <p>DUS:</p>
                <p>Twijfel niet langer en geef je op! Bel voor een afspraak (078- 6413473 / 06-41696046). Je kunt zelf bepalen op welke dag en welk tijdstip je komt. Natuurlijk kun je ook samen met iemand komen (dat stimuleert wellicht NOG meer om jullie doel te bereiken!). De bijeenkomsten duren dan iets langer, maar de kosten zijn ook lager (€ 85,-- per persoon).</p>
                
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
