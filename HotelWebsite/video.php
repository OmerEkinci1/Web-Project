<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekinci Hotel</title>
    <link href="https://fonts.googleapis.com/css2?family=Bitter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylevideo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
 
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img style="height: 50px; width: 80px" src="img/yenilogo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="history.php">History</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="video.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reservation.php">Reservation</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <button id="search"style="background-color: black; margin-right: 5px;" class="btn btn-outline-success my-2 my-sm-0" type="submit"><a style="color: white;" href="register.php">Register</a></button>
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button id="search" class="btn btn-outline-success my-2 my-sm-0" onclick="searchBox()" type="submit">Search</button>
              </form>
            </div>
          </nav>
          <center>
          <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-border text-secondary" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-border text-success" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-border text-danger" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-border text-warning" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-border text-info" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-border text-light" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-border text-dark" role="status">
            <span class="sr-only">Loading...</span>
          </div>
        </center>

          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <div class="headerInfo"><h1>Unique Turkish Bath</h1>
              </div>
                <img class="d-block w-100" src="img/hamam.jpg" data-src="holder.js/900x400?theme=social" alt="900x400" data-holder-rendered="true" style="width: 900px; height: 650px;">
              </div>
              <div class="carousel-item">
                <div class="headerInfo"><h1>Very Close to the Beach</h1>
                </div>
                <img class="d-block w-100" src="img/sahil.png" data-src="holder.js/900x400?theme=industrial" alt="900x400" data-holder-rendered="true" style="width: 900px; height: 650px;">
              </div>
              <div class="carousel-item">
                <div class="headerInfo"><h1>With Amazing Theatre</h1>
                </div>
                <img class="d-block w-100" src="img/tiyatro.jpg" data-src="holder.js/900x400?theme=industrial" alt="900x400" data-holder-rendered="true" style="width: 900px; height: 650px;">
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
    </header>

    <main>
      <div class="video">
        <img id="varak" src="img/varak.jpg" alt="resim">
        <iframe id="video" width="700" height="500" src="https://www.youtube.com/embed/1dkmuhyDeLw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

        <div id="sablonlar" style="font-size: 13px; margin-top: 15px;">
            <h1 style="border: 2px groove black;text-align: center;">Our Services</h1>
            <div class="sablon">
                <div class="iconOne" style="float: right; margin-right: 10px; margin-top: 5px;"></div>
                <h1 style="font-size: 35px; text-align: center;">Turkish Cusine</h1>
                <div class="bilgi"><h3>Turkish Kebap</h3></div>
                 <div class="bilgi"><h3>Dolma</h3></div>
                  <div class="bilgi"><h3>Pezük</h3></div>
                  <div id="button" style="margin: 0; margin-top: 20px;margin-left: 80px;"><a href="#" onclick="Warning()">Read More</a><div class="iconBanner"></div></div>
            </div>
             <div class="sablon">

                <h1 style="font-size: 35px; ">Turkish Bath</h1>
                <div class="bilgi"><h3>Bath</h3></div>
                 <div class="bilgi"><h3>Spa</h3></div>
                  <div class="bilgi"><h3>Massage</h3></div>
                  <div id="button" style="margin: 0; margin-top: 20px;margin-left: 80px;"><a href="#" onclick="Warning()">Read More</a><div class="iconBanner"></div></div>
            </div>
            <div class="sablon" style="float: right; margin: 0;">

                <h1 style="font-size: 35px;">Activites</h1>
                <div class="bilgi"><h3>Night Club</h3></div>
                 <div class="bilgi"><h3>Cinema</h3></div>
                  <div class="bilgi"><h3>Theatre</h3></div>
                  <div id="button" style="margin: 0; margin-top: 20px;margin-left: 80px;"><a href="#"onclick="Warning()">Read More</a><div class="iconBanner"></div></div>
            </div>
            
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
      function Warning(){
        alert("Right now, We cannot give any services because of crowded.")
      }

      function setCookie(cname, cvalue, exdays) {
          var d = new Date();
          d.setTime(d.getTime + exdays * 24 * 60 * 60 * 1000);
          var expires = "expires= " + dotoGMTsting();
          document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";

      }

      function getCookie(cname) {
          var name = cname + " =";
          var decodecookie = decodeURIComponent(document.cookie);
          var ca = decodecookie.split(";");
          for (var i = 0; i < ca.length; i++) {
              var c = ca[i];
              while (c.charAt[0] == "") {
                  c = c.substring(1);
              }
              if (c.indexOf(name) == 0) {
                  return c.substring(name.length, c.length)
              }
          }
          return "";

      }

      function checkCookie() {
          var user = getCookie("username");
          if (user != "")
              alert("welcome again " + user);
          else {
              user = prompt("please enter your name: ", "");
              if (user != " " && user != nul)
                  setCookie("username", user, 30);
          }
      }

      function searchBox(){

          var x , text;

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