<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style3.css">
    <link href="https://fonts.googleapis.com/css2?family=Bitter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<title>Ekinci Hotel</title>
</head>
<body>
<?php
    session_start();

    $db = mysqli_connect("localhost","root","","otelsite");

    if (isset($_POST['register_btn'])) {

      $name = mysqli_real_escape_string($db,$_POST['name']);
      $surname = mysqli_real_escape_string($db,$_POST['surname']);
      $email = mysqli_real_escape_string($db,$_POST['email']);
      $subject = mysqli_real_escape_string($db,$_POST['subject']);
      $message = mysqli_real_escape_string($db,$_POST['message']);

      $sql = "INSERT INTO `tbl_contact`(Name,Surname,Email,Subject,Message)VALUES ('$name','$surname','$email','$subject','$message')";
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
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="history.html">History</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="video.html">Service</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="contact.html">Contact Us  <span class="sr-only">(current)</span></a>
              </li>
            <li class="nav-item">
              <a class="nav-link " href="reservation.php">Reservation</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button id="search" class="btn btn-outline-success my-2 my-sm-0"onclick="searchBox()"type="submit">Search</button>
          </form>
        </div>
      </nav>
       
      <div class="contact-section">
          <h1>Contact Us</h1>
            <div class="border"></div>
          <form action="contact.php"class="contact-form" method="post">
              <input id="contact" type="text" name="name" class="contact-form-text" placeholder="Your Name" required="">
              <input id="contact"type="text" name="surname" class="contact-form-text" placeholder="Your Surname" required="">
              <input id="contact" type="email" name="email" class="contact-form-text" placeholder="Your Email" required="">
              <input id="contact" type="text" name="subject" class="contact-form-text" placeholder="Subject to the this Email" required="">
              <textarea id="contact" name="message" class="contact-form-text" cols="30" rows="10"placeholder="Your Message" required=""></textarea>
              <input type="submit" name="register_btn" class="contact-form-btn" onclick="" value="Send Message">
          </form>
      </div>
      
    </header>

    <main>
        <div class="harita">
            <img src="img/varak.jpg" alt="resim">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12038.493123895083!2d28.7888045!3d41.0334971!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa4eb20ddc406fa96!2s%C4%B0stanbul%20Sabahattin%20Zaim%20%C3%9Cniversitesi!5e0!3m2!1str!2str!4v1586524424055!5m2!1str!2str" width="590" height="435" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </main>
    <footer>
        <section id="sectionFooter">
            <h1>Our Hotels</h1><hr>
            <table class="table table-light">
    <thead>
      <tr>
        <th>#</th>
        <th>Hotel</th>
        <th>Working Seasons</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Antalya</td>
        <td>Summer</td>
        
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Van</td>
        <td>All Seasons</td>
      </tr>
          <tr>
        <th scope="row">3</th>
        <td>Muğla</td>
        <td>Spring/Summer
  </td>
      </tr>
    </tbody>
  </table>
  
        </section>
         <section id="sectionFooter">
             <h1>About Us</h1><hr>
                <p>Four Seasons Hotels Limited, trading as Four Seasons Hotels and Resorts, is a Canadian international luxury hospitality company[3] headquartered in Toronto, Ontario, Canada.[4] Four Seasons operates more than 100 hotels worldwide.[5] Since 2006, Bill Gates (through Cascade Investment) and Prince Al-Waleed bin Talal have been majority owners of the company.</p>
         </section>
         <section id="sectionFooter">
             <h1>Social Media Accounts</h1><hr>
             <a href="#"><img src="img/facebook.png" style="width: 6rem; height: 6rem; float: left; margin-right: 2rem;"></a>
             <a href="https://www.instagram.com/omrekinci/?hl=tr"><img src="img/insta.webp" style="width: 6rem; height: 6rem; float: left; margin-right: 2rem;"></a>
             <a href="https://twitter.com/OFEkinci"><img src="img/twitter.webp" style="width: 6rem; height: 6rem; float: left;"></a>
         </section>
         
     </footer>
</body>

<script>
  function ControlFunc() {

      var x;

      x = document.getElementById("contact").value;

      if (isNaN(x) || x < 1 || x > 50) {
          alert("Input not valid");
      } else {
          alert("Your message have been sent in our system");
      }
  }

  function searchBox(){

    var x;

    x = document.getElementById("search").value;

    if(isNaN(x) || x<1 || x>10){
      alert("There are not anything for this request");
    }
    else{
      return true;
    }
  }
</script>
</html>