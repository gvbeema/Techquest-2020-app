<?php
session_start(); 
$servername = "localhost";
$username = "root";
$password = "";
$db = "techquest";
$table = "reg_form"; 

$conn = new mysqli($servername, $username, $password,$db);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Quest | View Abstract</title>

    <style>
    .body {
        margin-top: 20px;
    }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
</head>

<body class="body">

    <div class="container">
        <h2>Tech Quest 2020 | Abstract file</h2>
        <br>

        <div class="table-responsive">
            <table class="table table-stipped table-hover display" id="fil_table" style="widht=100%">
                <thead>
                    <tr>
                        <th>S.no</th>
                        <th>Participant 1</th>
                        <th>Participant 2</th>
                        <th>Phone Number</th>
                        <th>Abstract</th>
                    </tr>
                </thead>
                <?php 
    $i=0;
    $result = $conn->query("Select * from reg_form  ORDER BY ID desc");
    while ($row = mysqli_fetch_array($result)){ 
        $files_field= $row['file'];
        $files_show= "uploads/$files_field"; 
        $i+=1;
    ?>
                <tbody>
                    <td><?php echo($i); ?></td>
                    <td><?php echo($row['name_1']); ?></td>
                    <td><?php echo($row['name_2']); ?></td>
                    <td><?php echo($row['ph']); ?></td>
                    <td><a href='<?php echo($files_show) ?>' target="blank"><?php echo($files_field); ?></a></td>
                </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
    <script src="jscript.js"></script>
</body>

</html>