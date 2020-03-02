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
    <title>Tech Quest 2020 | Presentazion Details:</title>
    <style>
    .body {
        margin-top: 20px;
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
        <h2>Tech Quest 2020 | Presentazion Candidate List</h2>
        <br>
        <div class="responsive-table">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>S.NO</th>
                        <th>NAME 1</th>
                        <th>NAME 2</th>
                        <th>COLLEGE</th>
                        <th>EMAIL</th>
                        <th>PHONE</th>
                        <!-- <th>EVENTS</th> -->
                    </tr>
                </thead>
                <?php 
    $i=0;
    $result = $conn->query("Select * from events where presentazion='presentazion'");
    // SELECT name FROM employees WHERE SUBSTRING_INDEX(SUBSTRING_INDEX(address, ',', 4), ',', -1)='PA';
    while ($row = mysqli_fetch_array($result)){         
        $i+=1;
    ?>
                <tbody>
                    <tr>
                        <td><?php echo($i); ?></td>
                        <td><?php echo($row['name_1']); ?></td>
                        <td><?php echo($row['name_2']); ?></td>
                        <td><?php echo($row['college']); ?></td>
                        <td><?php echo($row['email']); ?></td>
                        <td><?php echo($row['ph']); ?></td>
                    </tr>
                </tbody>
                <?php }?>
            </table>
        </div>
    </div>
</body>

</html>