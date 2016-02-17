<!DOCTYPE html>
<html lang="en">

<head>
	<title>Fit en Fun - Locaties</title>
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
                <h2 class="page-header footertekst">Locaties</h2>
            <div class="col-md-6">
                <p>De Willem</p>
                <p>Van der Palmstraat 2</p>
                <p>3351 HA Papendrecht</p>
            </div>
            <div class="col-md-6">
            <!-- Map -->
                <div id="contact" class="map">
                    <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAQBNsWlhY6z5hcwO8HtrS4ubjAd1BISN8&q=Van+der+Palmstraat+2,+3351+HA+Papendrecht"></iframe>
                </div>
            <!-- /Map -->
            </div>
            <div class="col-md-6">
                <p>Sporthal de Kooy</p>
                <p>Pieterzeemanlaan 39/41</p>
                <p>3356 BR Papendrecht</p>
            </div>
            <div class="col-md-6">
            <!-- Map -->
                <div id="contact" class="map">
                    <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAQBNsWlhY6z5hcwO8HtrS4ubjAd1BISN8&q=Pieter+Zeemanlaan+39,+3356+BR+Papendrecht"></iframe>
                </div>
            <!-- /Map -->
            </div>
            <div class="col-md-6">
                <p>Top Spincentre</p>
                <p>Winkelhaak 11</p>
                <p>3335KG Zwijndrecht</p>
            </div>
            <div class="col-md-6">
            <!-- Map -->
                <div id="contact" class="map">
                    <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2465.724768549592!2d4.6129446000000005!3d51.8294581!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c42e6147f3651f%3A0x56e0c8f3ac8c461f!2sWinkelhaak+11%2C+3335+KG+Zwijndrecht!5e0!3m2!1sen!2snl!4v1440057215954"></iframe>
                </div>
            <!-- /Map -->
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
