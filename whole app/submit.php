<?php
session_start(); 
$servername = "localhost";
$username = "root";
$password = "";
$db = "techquest";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

$email = isset($_POST["email"]) ? $_POST["email"] :'';
$events = isset($_POST["events"]) ? $_POST["events"] :'';
$imploded_events= implode(", 
",$events);
$name_1 = isset($_POST["name_1"]) ? $_POST["name_1"] :'';
$name_2 = isset($_POST["name_2"]) ? $_POST["name_2"] :'';
$ph = isset($_POST["ph"]) ? $_POST["ph"] :'';
$college = isset($_POST["college"]) ? $_POST["college"] :'';
$location = isset($_POST["location"]) ? $_POST["location"] :'';
$degree = isset($_POST["degree"]) ? $_POST["degree"] :'';
$degree1 = isset($_POST["degree1"]) ? $_POST["degree1"] :'';
$year = isset($_POST["year"]) ? $_POST["year"] :'';
$department = isset($_POST["department"]) ? $_POST["department"] :'';
$department1 = isset($_POST["department1"]) ? $_POST["department1"] :'';


// upload file to folder
$f_name= $_FILES['file']['name'];

$tmp_name= $_FILES['file']['tmp_name'];

$position= strpos($f_name, "."); 

$fileextension= substr($f_name, $position + 1);

$fileextension= strtolower($fileextension);


if (isset($f_name)) {

$path= 'uploads/';

if (!empty($f_name)){
if (move_uploaded_file($tmp_name, $path.$f_name)) {
echo 'Uploaded!';

}
}
}

 
if($degree==others){
    $degree=$degree1;
}

if($department==others){
    $department=$department1;
}
if(in_array("PRESENTAZION",$events)){
    $presentazion='PRESENTAZION';    
    // echo $presentazion;
}
else{
    $presentazion='NUll';
    // echo $presentazion;
}
if(in_array("PROGETTO",$events)){
    $progetto='PROGETTO';
    // echo $progetto;
}
else{
    $progetto='NUll';
    // echo $progetto;
}
if(in_array("UNLINK 1337",$events)){
    $unlink1337='UNLINK 1337';
    // echo $unlink1337;
}
else{
    $unlink1337='NUll';
    // echo $unlink1337;
}
if(in_array("QUESTIONARIO",$events)){
    $questionario='QUESTIONARIO';
    // echo $questionario;
}
else{
    $questionario='NUll';
    // echo $questionario;
}
if(in_array("ANGRY BIRD",$events)){
    $angry='ANGRY BIRD';
    // echo $angry;
}
else{
    $angry='NUll';
    // echo $angry;
}
if(in_array("CODEMET",$events)){
    $codemet='CODEMET';
    // echo $codemet;
}
else{
    $codemet='NUll';
    // echo $angry;
}
$query = "INSERT INTO `reg_form`
(`email`,`events`,`name_1`,`name_2`,`ph`,`college`,`location`,`degree`,`year`,
`dept`,`file`)
VALUES
('$email','$imploded_events','$name_1','$name_2','$ph','$college','$location','$degree','$year','$department','$f_name')";

$query_1 = "INSERT INTO `events`
(`name_1`,`name_2`,`email`,`ph`,`college`,`dept`,`presentazion`,
`progetto`,`unlink1337`,`questionario`,`angry_bird`,`codemet`)
VALUES
('$name_1','$name_2','$email','$ph','$college','$department','$presentazion','$progetto','$unlink1337','$questionario','$angry','$codemet')";

if($result = $conn->query($query) && $conn->query($query_1)){
    $_SESSION['success']="Data Submit Successful";    
}
else{
    $_SESSION['error']="Data Submit Error!!";    
}

// if($result = $conn->query($query_1)){
//     $_SESSION['success']="Event Data Submit Successful";    
// }
// else{
//     $_SESSION['error']="Event Data Submit Error!!";    
// }
header("location:reg_form.php");
?>