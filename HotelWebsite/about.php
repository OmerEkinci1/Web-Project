<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekinci Hotel</title>
    <link rel="stylesheet" href="about.css">
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
                <a class="nav-link" href="index.php">Home </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="history.php">History</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="about.php">About Us <span class="sr-only">(current)</span></a>
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
        <div class="team-section">
            <h1 style=>Our Team</h1>
            <span class="border"></span>
            <div class="ps">
                <a href="#p1"><img src="img/engin.png" alt="resim"></a>
                <a href="#p2"><img src="img/omer.JPG" alt="resim"></a>
                <a href="#p3"><img src="img/ramo.jpeg" alt="resim"></a>
            </div>

            <div class="section" id="p1">
                <span class="name">Engin Cindoruk</span>
                <span class="border"></span>
                <p>Engin Cindoruk memleketi Bitlis olup İstanbulda yaşamaktadır.İstanbul Sabahattin Zaim Üniversitesinde Yazılım Mühendisliği okumuş olup otelimizin yönetiminde yer almaktadır.</p>
            </div>

            <div class="section" id="p2">
                <span class="name">Ömer Faruk Ekinci</span>
                <span class="border"></span>
                <p>Ömer Faruk Ekinci memleketi Siirt olup İstanbulda yaşamaktadır.İstanbul Sabahattin Zaim Üniversitesinde Yazılım Mühendisliği okumuş olup otelimizin yönetim kurulıu başkanıdır.Otele ismini veren kişidir aynı zamanda..</p>
            </div>

            <div class="section" id="p3">
                <span class="name">Ramazan MailMail</span>
                <span class="border"></span>
                <p>Ramazan Mailmail memleketi Kayseri olup İstanbulda yaşamaktadır.İstanbul Sabahattin Zaim Üniversitesinde İşletme okumuş olup otelimizin yönetiminde yer almaktadır.</p>
            </div>

            <section id="sectionFooter">
                <a href="#"><img src="img/facebook.png" style="width: 6rem; height: 6rem; float: left; margin-right: 2rem;"></a>
                <a href="https://www.instagram.com/omrekinci/?hl=tr"><img src="img/insta.webp" style="width: 6rem; height: 6rem; float: left; margin-right: 2rem;"></a>
                <a href="https://twitter.com/OFEkinci"><img src="img/twitter.webp" style="width: 6rem; height: 6rem; float: left;"></a>
            </section>
    
        </div>

      
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