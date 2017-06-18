<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bradford Evangelical Free Church</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and miniied CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="styles/main.css">
</head>
<body>
    <div class="main-div">
        <!-- HEADER -->
        <?php include 'header.php';?>

        <!-- SLIDE SHOW -->
        <div class="container" id="carousel-container">
            <div id="homepage-carousel" class="carousel slide" data-ride="carousel" data-interval="2500">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#homepage-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#homepage-carousel" data-slide-to="1"></li>
                    <li data-target="#homepage-carousel" data-slide-to="2"></li>
                    <li data-target="#homepage-carousel" data-slide-to="3"></li>
                    <li data-target="#homepage-carousel" data-slide-to="4"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="images/sunny_church_and_field.jpeg" alt="Church and Field">
                    </div>
                    
                    <div class="item">
                        <img src="images/DSC_0048.JPG" alt="Gathering in the Kitchen">
                    </div>

                    <div class="item">
                        <img src="images/people_and_fire.jpeg" alt="People and Fire">
                    </div>

                    <div class="item">
                        <div id="collage-slide">
                            <img id="collage-image" src="images/collage.jpg" alt="Church Family Collage">
                        </div>
                    </div>

                    <div class="item">
                        <img src="images/pews.jpeg" alt="Church Pews" >
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#homepage-carousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#homepage-carousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <!-- MISSION STATEMENT -->
        <div class="container" id="index-mission-statement">
            <blockquote class="blockquote-reverse">
                <h1><i>We look forward to welcoming you ... </i></h1> 
                <h1><i>just as Christ has welcomed us!</i></h1>
            
            </blockquote>
        </div>

        <!-- FOOTER -->
        <?php include 'footer.php';?>

    </div>
</body>
</html>
