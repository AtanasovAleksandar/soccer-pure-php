<?php
include 'header.php';

$server = "localhost";
$username = "root";
$password = "usbw";
$dbname = "soccer";
// $_REQUEST = 'POST';


// Create connection
$link = new mysqli($server, $username, $password, $dbname);

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}



$sql = "SELECT  name , lastName , bornYear, contry, team , sallery FROM player";
$result = $link->query($sql);

$link->close();
?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" style="height: 540px;">
        <div class="carousel-item active">
            <img src="./img/skysports-manchester-united_4692342.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="./img/543.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="./img/Tour_2019_ALL_ICC_Article41553611433404_large.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container">
    <div class="row">

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo  '<div class="card m-3"  style="width: 21rem;">
                <div class="card-body">
                    <h5 class="card-title text-center"> Name: <span class="badge badge-info"> ' . $row["name"] . '<span></h5>' .
                    '<p class="card-text">Last Name: <span class="badge badge-primary"> ' . $row["lastName"] . '<span></p>' .
                    ' <p class="card-text"> Born: <span class="badge badge-primary"> ' . $row["bornYear"] . '<span></p>' .
                    '<p class="card-text"> Team: <span class="badge badge-primary"> ' . $row["team"] . '<span></p>' .
                    '<p class="card-text">Contry: <span class="badge badge-primary"> ' . $row["contry"] . '<span></p>' .
                    '<p class="card-text">Sallery: <span class="badge badge-primary"> ' . $row["sallery"] . '<span></p>' .
                    '<a href="#" class="btn btn-danger float-right">Delete</a>
                    <a href="#" class="btn btn-success float-left">Edit</a>
                </div>
            </div>';
            }
            echo '</div>';
        } else {
            echo "0 results";
        }
        ?>
    </div>
</div>
<div class="jumbotron">
    <h1 class="-4">REVEALED: UNITED'S SQUAD NUMBERS FOR 2019/20</h1>
    <p class="lead">We are pleased to confirm the official Manchester United squad numbers for the 2019/20 Premier League season, including a significant change for one first-team member.</p>
    <hr class="my-4">
    <p>Anthony Martial will now wear the no.9 shirt following the departure of Romelu Lukaku on Thursday. The Frenchman previously wore it before switching to the no.11. </p>
</div>

<div id="googleMap"  style="width:50%; margin-left: 7%;">
    <img class="mx-5 px-5 my-5" src="./img/Screenshot_1.png" class="w-100" alt="">
</div>
<div class="bg-dark">
    <p class="text-light text-center">©2019 Manchester United Ltd</p>
</div>


</body>

</html>