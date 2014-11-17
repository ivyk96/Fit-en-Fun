<!DOCTYPE html>
<html lang="en">

<head>
	<title>Fit en Fun - Sportief wandelen</title>
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
                <h2 class="page-header">Sportief wandelen</h2>
            </div>
            <div class="col-md-6">
                <p>
                    Hierbij lopen we (in groepsverband) een uur lang stevig door in Papendrecht en omgeving.
                    Wat deze les zo leuk maakt is de combinatie van een intensieve buitenactiviteit (er zal regelmatig een trap of hol moeten worden “genomen”)
                    en de ruimte voor sociale contacten (je kunt gewoon door blijven praten tijdens de les). Een les voor jong en oud dus!
                    Na afloop is er ook nog gelegenheid om gezamenlijk koffie of thee te drinken.
                </p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="img/groep3.png" alt="">
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
