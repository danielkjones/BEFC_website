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
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Bradford Evangelical Free Church</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="location.html">Location</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                About Us <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="staff.html">Pastors and Elders</a></li>
                                <li><a href="who-we-are.html">Who We Are</a></li>
                                <li><a href="what-we-believe.html">What We Believe</a></li>
                            </ul>
                        </li>
                        <li><a href="gatherings.html">Gatherings</a></li>
                        <li><a href="ministries.html">Ministries</a></li>
                        <li><a href="sermons.php">Sermons</a></li>
                        <li><a href="blog.html">Blog</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page title -->
        <div class="container page-header">
            <h1>Sermons</h1>
        </div>



        <!-- Sermon Displays -->
        <div class="container page-content">
            <?php
            $xml=simplexml_load_file("styles/sermons.xml") or die("Error: Cannot create object.");
               foreach($xml->sermon as $sermon){
                    echo "<div class=\"sermon\">
                                          <h3>{$sermon->reference}</h3>
                                          <p><strong>{$sermon->speaker} <br> {$sermon->date}</strong></p>
                                          <p>{$sermon->description}</p>
                                          <audio controls=\"controls\">
                                              <source src=\"http://www.bradfordfreechurch.org/BEFC-mp3s/{$sermon->file}\" type=\"audio/mpeg\">
                                              Your browser does not support mp3
                                          </audio>
                                      </div>";
               }

            ?>
        </div>
        <!-- FOOTER -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">&copy; Bradford Evangelical Free Church 2017</div>
                    <div class="col-sm-4"><a href="https://www.google.com/maps/place/Bradford+Evangelical+Free+Church/@43.9763418,-72.1203587,17z/data=!3m1!4b1!4m5!3m4!1s0x4cb4ecc71a67ff6f:0xee00f4305793d5b9!8m2!3d43.976338!4d-72.11817" target="_blank">1209 Lower Plain, Bradford, VT 05033</a></div>
                    <div class="col-sm-2">(802) 222-9021</div>
                </div>
            </div>
        </footer>
    </div>
</body>