<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <title>Ekinci Hotel</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Bitter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img style="height: 50px;width: 80px;" src="img/yenilogo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="history.php">History</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="video.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reservation.php">Reservation</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0" style="background-color: transparent;">
                <button id="search"style="background-color: black; margin-right: 5px;" class="btn btn-outline-success my-2 my-sm-0" type="submit"><a style="color: white;" href="register.php">Register</a></button>
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button id="search" class="btn btn-outline-success my-2 my-sm-0" onclick="searchBox()" type="submit">Search</button>                
              </form>
            </div>
        </nav>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                  <div class="headerInfo"><h1>Welcome to the our Hotel</h1>
                    <div class="button">
                        <a href="video.php#varak" class="btn">Watch Video</a>
                        <a href="video.php" class="btn">Learn More</a>
                    </div>
                </div>
                <img class="d-block w-100 bannerHeader" src="img/hotel.jpg" data-src="holder.js/900x400?theme=social" alt="900x400" data-holder-rendered="true" >
              </div>
              <div class="carousel-item">
                  <div class="headerInfo"><h1>Welcome to the Most funniest Hotel</h1>
                    <p>Our hotel has many fun activities including Night Club, Beach entertainment , social activities and excursions to cultural areas..</p>
                  </div>
                <img class="d-block w-100 bannerHeader" src="img/hotel3.webp" data-src="holder.js/900x400?theme=industrial" alt="900x400" data-holder-rendered="true" >
              </div>
              <div class="carousel-item">
                <div class="headerInfo"><h1>Have a help for your reservation</h1>
                  <select id="sec" class="custom-select selectSet">
                    <option disabled selected="">Choose your rooms</option>
                    <option value="1">Single Room</option>
                    <option value="2">Double Room</option>
                    <option value="3">Family Room</option>
                     <option value="4">Suit Room</option>
                  </select>
                  <select id="sec" class="custom-select selectSet">
                    <option disabled selected="">Amount Person</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">More</option>
                  </select>
                    <select id="sec" class="custom-select selectSet">
                    <option disabled selected="">Amonut Child</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">Daha Fazla</option>
                  </select>
                  <button onclick="Warning()" type="button" class="btn btn-primary" style="float: right; margin-top: 1rem;">Contact Us</button>
                </div>
                <img class="d-block w-100 bannerHeader" src="img/hotel2.jpg" data-src="holder.js/900x400?theme=industrial" alt="900x400" data-holder-rendered="true">
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
          <div class="wd" id="special">
            <center><img src="img\yenilogo.png" class="logo" alt="resim"></center>
              <h1>Welcome to the Ekinci</h1>
    
              <h4>Bu otel web sayfamız İstanbul Sabahattin Zaim Üniversitesinde görev yapan Zahra ELMİ nin web tabanlı programlama dersinde
              vize yerine isteği üzerine yapılmıştır.</h4>
    
              <h2>Reservation</h2>
              
              <div class="opt">
                  <form class="" action="index.html" method="post">
                  <a href="register.php"><input type="button" value="Start Now"></a>
                  </form>
                <h4>Designed by Ömer Fatuk Ekinci/2020</h4>
              </div>
          </div>
          
    </header>

    <main>
        <section id="otelTanitim">
            <div class="otelResim"></div>
            <div class="otelInfo"><h1>History of our Hotel</h1>
                <p>The original company was founded by Conrad Hilton. As of December 31, 2018, there were 586 Hilton Hotels & Resorts properties with 215,623 rooms in 85 countries and territories across six continents[1].[5] This includes 66 properties that are owned or leased with 20,264 rooms, 276 that are managed with 119,594 rooms, and 244 that are franchised with 75,765 rooms.[1] In 2020, Fortune magazine ranked Hilton Hotels & Resorts at number one on their Fortune List of the Top 100 Companies to Work For in 2020 based on an employee survey of satisfaction.[6]</p>
                <a href="history.html"><button type="button" class="btn btn-primary btn-lg"style="margin-top:2rem;">Learn More</button></a>
            </div>
        </section>
        <section id="Rooms">
            <div class="jumbotron one">
                <h1 class="display-3">Single Room</h1>
                <p class="lead">This room is avaliable for single person,room include one bed , one bed , sutable for living one person
                    Price is for one day/night.  </p>
                <hr class="my-2">
                <p>Contact the reservation and have a more information</p>
                <p class="lead">
                  <a class="btn btn-primary btn-lg" href="#!" role="button">Learn More</a>
                </p>
              </div>
              <div class="jumbotron two">
                <h1 class="display-3">Double Room</h1>
                <p class="lead">This room is avaliable for double person,room include one bed , one bed , sutable for living one person
                    Price is for one day/night.  </p>
                <hr class="my-2">
                <p>Contact the reservation and have a more information</p>
                <p class="lead">
                  <a class="btn btn-primary btn-lg" href="#!" role="button">Learn More</a>
                </p>
              </div>
              <div class="jumbotron three">
                <h1 class="display-3">Family Room</h1>
                <p class="lead">This room is avaliable for single person,room include one bed , one bed , sutable for living one person
                    Price is for one day/night.  </p>
                <hr class="my-2">
                <p>Contact the reservation and have a more information</p>
                <p class="lead">
                  <a class="btn btn-primary btn-lg" href="#!" role="button">Learn More</a>
                </p>
              </div>
              <div class="jumbotron four">
                <h1 class="display-3">Suit Room</h1>
                <p class="lead">This room is avaliable for single person,room include one bed , one bed , sutable for living one person
                    Price is for one day/night.  </p>
                <hr class="my-2">
                <p>Contact the reservation and have a more information</p>
                <p class="lead">
                  <a class="btn btn-primary btn-lg" href="#!" role="button">Learn More</a>
                </p>
              </div>
              
            
        </section>
        <section id="service">
            <h1 style="text-align: center;">MOST POPULAR SERVICES</h1>
          <div id="servicePencere">
            <div class="serviceOne">
              <div class="serviceLike"></div>
            </div>
            <div class="serviceInfo">
              <h2>Beach</h2>
              <p>The first inhabitants of the Bahamas were the aravak natives, whom Christopher Columbus named Lucayan. Their origin is based on the Aravaks, which came from South America and were driven northward by the Caribbean into the Antillean sea. Unlike the neighbouring Caribbean, The Aravaks, who were generally peaceful, were more engaged in fishing and agriculture.
                It is believed that Christopher Columbus, who arrived in the New World in 1492, first set foot on the island called Guanahani by the natives in the Bahamas. The Spanish made no attempt to settle in the Bahamas, but with the raids they organized, they rounded up the peaceful Aravaks and employed them in the mines of Hispaniola. The population of the islands declined as a result of these slave hunts. A century later, when British immigrants came here, no people lived on the islands.
              </p>
            </div>
          </div>
            <div id="servicePencere">
              <div class="serviceTwo">
                <div class="serviceLike"></div>
              </div>
              <div class="serviceInfo">
                <h2>Turkish Cusine</h2>
                <p>Most of the meat dishes in Turkish cuisine are kebabs, meatballs and saucepan dishes.
                  In Turkish cuisine, kebab includes meat, meaning lahmacun kebab dish. Kebabs are usually eaten in restaurants and prepared by grill method. Among the kebabs, doner kebab is among the most popular kebabs. Bursa kebab, Adana kebab, Urfa kebab, Tokat kebab and chop are also very common.
                  Meatballs are dishes made by kneading, shaping and cooking mince with bread, onions and various spices. It can be done by grilling, baking, frying, or as a juicy meal. Akçaabat patties, Inegöl patties, Tekirdağ patties are among the most popular patties throughout the country.
                  Juicy meat dishes include stews, paper kebabs and various kinds and stews. In addition, a large number of fish, chicken and offal dishes are available in Turkish cuisine.</p>
              </div>
            </div>
            <div id="servicePencere">
              <div class="serviceThree">
                <div class="serviceLike"></div>
              </div>
              <div class="serviceInfo">
                <h2>Turkish Bath</h2>
                <p>Hamam (Arabic حمام, hammam), a structure with hot and cold water heated by a special arrangement, used for bathing purposes.
                  The history of the bath dates back to the ancient Romans. Excavations in the city of Pompeii, which was buried under Ashes after the eruption of the Vesuvius volcano, have revealed the baths used by the Romans. It is understood that these baths were not only for cleaning but also for pleasure and entertainment. Because there was a class difference in the Romans, the bathhouses were separated by the entrance gates of slaves and nobles and the places where they bathed. The Roman baths also had a steam bath place and pools of cold and hot water.</p>
              </div>
            </div>
            <div id="servicePencere">
              <div class="serviceFour">
                <div class="serviceLike"></div>
              </div>
              <div class="serviceInfo">
                <h2>Turkish Desserts</h2>
                <p>Türkiye'de, Gaziantep baklavasıyla tanınan şehirdir. İçersinde kullanılan malzeme, Gaziantep baklavasında antep fıstığı olsa da, bu coğrafi olarak büyük farklılıklar gösterir. Evde yapılan baklavalarda, Güneydoğu Anadolu'da antep fıstığı, Karadeniz'de fındık, İç Anadolu'da ceviz, Kıyı Ege'de badem, Edirne ve Trakya'da ise susam kullanılır. Genelde arananı antep fıstıklı tipi olsa da ekonomik nedenlerle sık sık cevizlisine de rastlanır. Yalın servis edilebileceği gibi, sade dondurma veya kaymakla da servis edilebilir.
                   Baklavanın yufkalarının ince açılmış olması, ceviz veya fıstığının bol olması ve şerbetinin tam kıvamında olması o baklavanın kaliteli olduğunu gösterir.</p>
              </div>
            </div>

        </section>
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
     
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script type="text/javascript">
        $(function(){
            Swal.fire({
                'imageUrl' : 'img/yenilogo.png',
                'imageHeight' : 150,
                'imageWeight' : 300,
                'title' : 'Welcome The Ekinci Hotel',
                'text' : 'Ömer Ekinci says Welcome',
                'type' : 'success'
            })
        });
    </script>

</body>

<script>
      function Warning(){
        var x = document.getElementById("sec").value;
        if(isNaN(x))
          alert("Choose items for reservation..");
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