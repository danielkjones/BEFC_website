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
        <h1>Location</h1>
    </div>

    <!-- MAIN CONTENT -->
    <div class="container row page-content">
        <div class="col-sm-4">
            <h2>Church Location:</h2>
            <address>
                1209 Lower Plain<br>
                Bradford, VT 05033
            </address>
            <h2>Mailing Address:</h2>
            <address>
                <strong>Bradford Evangelical Free Church</strong><br>
                P.O. Box 360<br>
                Bradford, VT 05033
            </address>
        </div>
        <div class="col-sm-8">
            <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2871.179468776724!2d-72.12035868449168!3d43.976337979111584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cb4ecc71a67ff6f%3A0xee00f4305793d5b9!2sBradford+Evangelical+Free+Church!5e0!3m2!1sen!2sus!4v1490400364572"
                     frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>

    <!-- FOOTER -->
    <?php include 'footer.php';?>

</div>
</body>