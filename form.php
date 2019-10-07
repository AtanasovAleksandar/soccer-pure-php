<?php 

$server = "localhost";
$username = "root";
$password = "usbw";
$dbname = "soccer";
// $_REQUEST = 'POST';


// Create connection
$link = new mysqli($server, $username, $password, $dbname);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$lastName = mysqli_real_escape_string($link, $_REQUEST['lastName']);
$bornYear = mysqli_real_escape_string($link, $_REQUEST['bornYear']);
$team = mysqli_real_escape_string($link, $_REQUEST['team']);
$contry = mysqli_real_escape_string($link, $_REQUEST['country']);
$sallery = mysqli_real_escape_string($link, $_REQUEST['sallery']);


$sql = "INSERT INTO player (name, lastName, bornYear, team , contry, sallery)
VALUES ('$name', '$lastName', '$bornYear','$team','$contry','$sallery')";

include 'player.php';

if(mysqli_query($link, $sql)){
    echo  "<p class='text-center'>Records added successfully.</p>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


mysqli_close($link);

?>