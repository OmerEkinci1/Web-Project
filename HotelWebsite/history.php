<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="history.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Bitter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Ekinci Hotel</title>
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
                <li class="nav-item ">
                  <a class="nav-link" href="index.php">Home </a>
                </li>
                <li class="nav-item  active">
                  <a class="nav-link" href="history.php">History <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="video.php">Service</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link " href="reservation.php">Reservation</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <button id="search"style="background-color: black; margin-right: 5px;" class="btn btn-outline-success my-2 my-sm-0" type="submit"><a style="color: white;" href="register.php">Register</a></button>
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button id="search" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>
    </header>

    <main>
        <section id="aboutus">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <h1 class="text-center">The Ekinci Hotel</h1>
                        <p style="color: white;">Canadian businessman Isadore Sharp founded Four Seasons in 1960. While a young architect working for his father, Sharp designed a motel for a family friend; its success motivated him to try creating his own hotel. He bought a large parcel of land in a run-down area of Toronto and planned a stopover for business travellers; the Four Seasons Motor Hotel opened in 1961.
                            Four Seasons built more hotels, including the 1963 Inn on the Park, a $4 million two-story resort hotel in suburban Toronto that housed Canada's first discothèque.[7][8]
                            Upscale luxury became part of the brand when the company expanded to London. When a developer approached Four Seasons about building a hotel in London, Sharp planned it to compete with the city's old-world, elite hotels, such as Claridge's and The Connaught.[4] The hotel opened in 1970.[5]
                            The lead consultant was the architecture firm Aedas.[9]]]
                            In 1974, cost overruns at the Four Seasons Hotel Vancouver nearly led the company into bankruptcy. As a result, the company began shifting to its current, management-only business model, eliminating costs associated with buying land and buildings. The company went public in 1986.[5] In the 1990s, Four Seasons and Ritz-Carlton began direct competition, with Ritz-Carlton emphasizing a uniform look while Four Seasons emphasized local architecture and styles with uniform service; in the end Four Seasons gained market share.[5]
                           
                            In 2009, founder Sharp wrote a memoir titled Four Seasons: The Story of Business Philosophy. It contained a historical chronicle of the hotels since its inception.[20]</p>
                    </div>
                    <div class="col-sm-5">
                        <div class="img-wrap">
                            <img src="img/yenilogo.png" alt="resim">

                        </div>

                    </div>

                </div>
            </div>

        </section>

        <section id="sectionFooter">
            <a href="#"><img src="img/facebook.png" style="width: 6rem; height: 6rem; float: left; margin-right: 2rem;"></a>
            <a href="https://www.instagram.com/omrekinci/?hl=tr"><img src="img/insta.webp" style="width: 6rem; height: 6rem; float: left; margin-right: 2rem;"></a>
            <a href="https://twitter.com/OFEkinci"><img src="img/twitter.webp" style="width: 6rem; height: 6rem; float: left;"></a>
        </section>

        
    </main>
    
</body>
<script>
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