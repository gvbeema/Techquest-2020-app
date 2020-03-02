<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "techquest";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Quest 2020 | Dashboard:</title>
    <style>
    .body {
        margin-top: 20px;
        background: #13181d;
        color: #ffffff;
    }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
    </script>
</head>

<body class="body">
    <div class="container">
        <div class="col col-xs-12">
            <h2 style="text-align:left">Tech Quest 2020 | Dashboard</h2>
        </div>

        <div class="row">
            <div class="col col-xs-6">
                <button onclick="window.location.href = 'file.php';" class="btn btn-primary center-block"
                    style="width:250px;">Check Abstract</button>
            </div>
            <div class="col col-xs-6">
                <button onclick="window.location.href = 'details.php';" class="btn btn-success center-block"
                    style="width:250px;">Final Report All Registration
                </button>
            </div>
        </div>

        <div>

            <br>
            <br>

        </div>

        <div class="row">
            <div class="col col-xs-6">
                <button onclick="window.location.href = 'presentazion.php';" class="btn btn-warning center-block"
                    style="width:250px;">Presentazion Event</button>
            </div>
            <div class="col col-xs-6">
                <button onclick="window.location.href = 'progetto.php';" class="btn btn-danger center-block"
                    style="width:250px;">Progetto Event</button>
            </div>
        </div>

        <div>

            <br>
            <br>

        </div>

        <div class="row">
            <div class="col col-xs-6">
                <button onclick="window.location.href = 'questionario.php';" class="btn btn-primary center-block"
                    style="width:250px;">Questionario Event</button>
            </div>
            <div class="col col-xs-6">
                <button onclick="window.location.href = 'unlink.php';" class="btn btn-success center-block"
                    style="width:250px;">Unlink 1337 Event</button>
            </div>
        </div>

        <div>

            <br>
            <br>

        </div>

        <div class="row">
            <div class="col col-xs-6">
                <button onclick="window.location.href = 'angrybird.php';" class="btn btn-warning center-block"
                    style="width:250px;">Angry Bird Event</button>
            </div>
            <div class="col col-xs-6">
                <button onclick="window.location.href = 'codemet.php';" class="btn btn-danger center-block"
                    style="width:250px;">CodeMet Event</button>
            </div>
        </div>

        <div>

            <br>
            <br>

        </div>

        <div class="row">
            <div class="col col-xs-12">
                <button onclick="window.location.href = 'reg_form.php';" class="btn btn-info center-block"
                    style="width:250px;">Registration Form</button>
            </div>
            <!-- <div class="col col-xs-6">
                <button onclick="window.location.href = 'codemet.php';" class="btn btn-danger center-block"
                    style="width:250px;">CodeMet Event</button>
            </div> -->
        </div>

</body>

</html>