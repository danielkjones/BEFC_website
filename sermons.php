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

        <!-- Page title -->
        <div class="container page-header">
            <h1>Sermons</h1>
        </div>



        <!-- Sermon Displays -->
        <div class="container page-content">
            <?php
            $xml=simplexml_load_file("sermon-info/sermons.xml") or die("Error: Cannot create object.");
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
        <?php include 'footer.php';?>

    </div>
</body>