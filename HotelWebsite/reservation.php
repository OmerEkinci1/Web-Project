<!DOCTYPE html>
<html>
<head>
	<title>Ekinci Hotel</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="reservation.css">
    <link href="https://fonts.googleapis.com/css2?family=Bitter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
	<?php
    session_start();

    $db = mysqli_connect("localhost","root","","otelsite");

    if (isset($_POST['register_btn'])) {

      $name = mysqli_real_escape_string($db,$_POST['name']);
      $surname = mysqli_real_escape_string($db,$_POST['surname']);
      $email = mysqli_real_escape_string($db,$_POST['email']);
      $enterdate = mysqli_real_escape_string($db,$_POST['enterdate']);
      $leavedate = mysqli_real_escape_string($db,$_POST['leavedate']);
      $adult = mysqli_real_escape_string($db,$_POST['adult']);
      $child = mysqli_real_escape_string($db,$_POST['children']);
      $package = mysqli_real_escape_string($db,$_POST['package']);

      $sql = "INSERT INTO `tbl_reservation`(Name,Surname,Email,EnterDate,Leavedate,Adult,Children,Package)VALUES ('$name','$surname','$email','$enterdate','$leavedate','$adult','$child','$package')";
      mysqli_query($db,$sql);
      echo "<script>alert('Your message have been sent');</script>"; 
    }
    mysqli_close($db);

?>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img style="height: 50px;width: 80px;" src="img/yenilogo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="history.php">History</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="video.php">Service</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="contact.php">Contact Us  </a>
              </li>
            <li class="nav-item active">
              <a class="nav-link " href="reservation.php">Reservation <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <button id="search"style="background-color: black; margin-right: 5px;" class="btn btn-outline-success my-2 my-sm-0" type="submit"><a style="color: white;" href="register.php">Register</a></button>
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button id="search" class="btn btn-outline-success my-2 my-sm-0"onclick="searchBox()"type="submit">Search</button>
          </form>
        </div>
      </nav> 
      <div class="contact-section">
	      <div class="resim" style="padding-left: 36rem;">
	      	<img style="height: 250px; width:300px; float: left;" src="img/yenilogo.png">
	      </div><br><br><br><br><br><br><br><br><br><br><br><br>
	      <h1 style=" text-align: center;">THE EKINCI HOTEL</h1>
          <h1 >Reservation Page</h1>
            <div class="border"></div>
          <form action="reservation.php"class="contact-form" method="post">
          	  <label style="color: white;">Name:</label>
              <input id="contact" type="text" name="name" class="contact-form-text" placeholder="Your Name" required="">
              <label style="color: white;">Surname:</label>
              <input id="contact"type="text" name="surname" class="contact-form-text" placeholder="Your Surname" required="">
              <label style="color: white;">Email:</label>
              <input id="contact" type="email" name="email" class="contact-form-text" placeholder="Your Email" required="">
              <label style="color: white;">Enter Date:</label>
              <input id="contact" type="date" name="enterdate" class="contact-form-text" required="">
              <label style="color: white;">Leave Date:</label>
              <input id="contact" type="date" name="leavedate" class="contact-form-text" required="">
              <label style="color: white;">Amout of Adult Person:</label>
              <input id="contact" type="number" name="adult" class="contact-form-text" value="1">
              <label style="color: white;">Amount of Child:</label>
              <input id="contact" type="number" name="children" class="contact-form-text" value="0">
              <label style="color: white;">Choose Package</label>
              <select id="contact" class="contact-form-text" name="package">
              	<option value="1">Custom Package</option>
              	<option value="1">Full Package</option>
              </select>
              <input type="submit" name="register_btn" class="contact-form-btn" onclick="" value="Save Reservation">
          </form>
      </div>
      
    </header>

</body>
</html>