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
    <title>TechQuest2020 | Registration</title>
    <style>
    .body {
        margin-top: 20px;
        background: #13181d;
        color: #ffffff;
    }

    .img {
        /* height: 0%; */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
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
    <!-- <script type="text/javascript">
    function checkvalue(val) {
        if (val === "others")
            document.getElementById('degree1').style.display = 'block';
        else
            document.getElementById('degree1').style.display = 'none';
    }
    </script> -->
</head>

<body class="body">
    <?php
	if(isset($_SESSION['success']))
	{
	?>
    <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Success!</strong> <?php echo $_SESSION['success']; ?>
    </div>
    <?php
	}
	unset($_SESSION['success']);
	if(isset($_SESSION['error']))
	{
	?>
    <div class="alert alert-danger fade in">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Error!</strong> <?php echo $_SESSION['error']; ?>
    </div>
    <?php
	}
	unset($_SESSION['error']);
?>
    <div class="container">
        <img src="Techquest_White.png" class="img-fluid img-responsive" alt="Banner" style="">
        <!-- <div>

        </div> -->
        <br>
        <form class="form-horizontal" name="reg_form" id="reg_form" action="submit.php" method="POST"
            enctype="multipart/form-data">
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">EMAIL <span style="color: red;">*</span>:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
                </div>
            </div>

            <div class="form-group" id="chk">
                <label class="control-label col-sm-2" for="events">EVENTS <span style="color: red;">*</span>:</label>
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label><input type="checkbox" name="events[]" id="events"
                                value="PRESENTAZION">PRESENTAZION</label>
                    </div>
                </div>

                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label><input type="checkbox" name="events[]" id="events" value="PROGETTO">PROGETTO</label>
                    </div>
                </div>

                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label><input type="checkbox" name="events[]" id="events" value="UNLINK 1337">UNLINK 1337
                        </label>
                    </div>
                </div>

                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label><input type="checkbox" name="events[]" id="events"
                                value="QUESTIONARIO">QUESTIONARIO</label>
                    </div>
                </div>

                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label><input type="checkbox" name="events[]" id="events" value="ANGRY BIRD">ANGRY BIRD</label>
                    </div>
                </div>

                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label><input type="checkbox" name="events[]" id="events[]" value="CODEMET">CODEMET</label>
                    </div>
                    <span id="spnError" class="error" style="display:none; color: red;">Please Select Atleast One
                        Event</span>
                </div>
            </div>


            <div class="form-group">
                <label class="control-label col-sm-2" for="PARTICIPANT 1 ">PARTICIPANT 1 <span
                        style="color: red;">*</span>: </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name_1" placeholder="Enter Name" name="name_1">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="PARTICIPANT 2 ">PARTICIPANT 2: </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name_2" placeholder="Enter Name" name="name_2">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="PHONE">PHONE <span style="color: red;">*</span>:</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="ph" placeholder="Enter Phone Number" name="ph">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="INSTITUTION NAME">INSTITUTION NAME <span
                        style="color: red;">*</span>: </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="college" placeholder="Enter Institution Name"
                        name="college">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="LOCATION">LOCATION <span
                        style="color: red;">*</span>:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="location" placeholder="Enter Location" name="location">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="DEGREE ">DEGREE <span style="color: red;">*</span>:</label>
                <div class="col-sm-10">
                    <!-- <div class="radio">
                        <label><input type="radio" name="degree" id="degree" value="B.E">B.E</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="degree" id="degree" value="B.Tech">B.Tech</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="degree" id="degree">Other</label>
                    </div> -->
                    <select name="degree" id="degree" class="form-control" onchange='checkvalue_degree(this.value)'>
                        <option value="">Choose Degree</option>
                        <option value="B.E">Bachelor of Engineering</option>
                        <option value="B.Tech">Bachelor of Technology</option>
                        <option value="others">Other</option>
                    </select>
                </div>
                <label class="control-label col-sm-2" for=""></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Enter Degree" name="degree1" id="degree1"
                        style='display:none' />
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="YEAR">YEAR <span style="color: red;">*</span>:</label>
                <div class="col-sm-10">
                    <!-- <input type="text" class="form-control" id="year" placeholder="Enter Year" name="year"> -->
                    <select name="year" id="year" class="form-control">
                        <option value="">Choose Year</option>
                        <option value="I">I</option>
                        <option value="II">II</option>
                        <option value="III">III</option>
                        <option value="IV">IV</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="DEPARTMENT">DEPARTMENT <span
                        style="color: red;">*</span>:</label>
                <div class="col-sm-10">
                    <!-- <input type="text" class="form-control" id="department" placeholder="Enter Department"
                        name="department"> -->
                    <select name="department" id="department" class="form-control"
                        onchange='checkvalue_department(this.value)'>
                        <option value="">Choose Department</option>
                        <option value="CSE">CSE</option>
                        <option value="ECE">ECE</option>
                        <option value="IT">IT</option>
                        <option value="others">Others</option>
                    </select>
                </div>
                <label class="control-label col-sm-2" for=""></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Enter Department" name="department1"
                        id="department1" style='display:none' />
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="ABSTRACT">ABSTRACT <span style="color: red;"></span>:</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="file" name="file" onchange='
                        checkvalue_file_format(this.value)'>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" id="form_submit" name="form_submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <script src="jscript.js"></script>
</body>

</html>

<?php
if(isset($_SESSION["message"])){
    unset($_SESSION["message"]);
  }
  ?>