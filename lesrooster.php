<!DOCTYPE html>
<html lang="en">

<head>
	<title>Fit en Fun - Lesrooster</title>
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
                <h2 class="page-header footertekst">Lesrooster</h2>
            </div>
            <table class="table table-bordered">
            	<th class="info">Maandag</th>
                <th class="info">Lessen</th>
                <th class="info">Locatie</th>
            	<tr>
            		<td>09:00 - 10:00</td>
                    <td><a href="callanetics.php">Callanetics</a></td>
            		<td><a href="locaties.php">De Kooy</a></td>
            	</tr>
            	<tr>
            		<td>10:00 - 11:00</td>
                    <td><a href="highshape.php">High Shape</a></td>
            		<td><a href="locaties.php">De Kooy</a></td>
            	</tr>
            	<tr>
            		<td>19:00 - 20:00</td>
                    <td><a href="bodyshape.php">Body Shape</a></td>
            		<td><a href="locaties.php">De Willem</a></td>
            	</tr>
            	<tr>
            		<td>20:00 - 21:00</td>
                    <td><a href="boksdance.php">Boksdance</a></td>
            		<td><a href="locaties.php">De Willem</a></td>
            	</tr>

            	<th class="info">Woensdag</th>
            	<tr>
            		<td>09:00 - 10:00</td>
                    <td><a href="clubjoyyoga.php">ClubJoy Yoga</a></td>
            		<td><a href="locaties.php">De Kooy</a></td>
            	</tr>
            	<tr>
            		<td>10:00 - 11:00</td>
                    <td><a href="highshape.php">High Shape</a></td>
            		<td><a href="locaties.php">De Kooy</a></td>
            	</tr>
            	<tr>
            		<td>19:00 - 20:00</td>
                    <td><a href="clubjoyyoga.php">ClubJoy Yoga</a></td>
            		<td><a href="locaties.php">De Willem</a></td>
            	</tr>
            	<tr>
            		<td>20:00 - 21:00</td>
                    <td><a href="indoorbootcamp.php">Indoor Bootcamp</a></td>
            		<td><a href="locaties.php">De Willem</a></td>
            	</tr>

            	<th class="info">Vrijdag</th>
            	<tr>
            		<td>09:00 - 10:00</td>
                    <td><a href="sportiefwandelen.php">Sportief wandelen</a></td>
            		<td><a href="locaties.php">De Kooy</a></td>
            	</tr>
                <tr>
                    <td>11:00 - 12:00</td>
                    <td><a href="">Circuittraining</a></td>
                    <td><a href="locaties.php">Top Spincentre Zwijndrecht</a></td>
                </tr>
            </table>
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
