<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <title>Ekinci Hotel</title>
</head>
<body>
  <?php
    session_start();
    $db = mysqli_connect("localhost","root","","otelsite");

    if (isset($_POST['email'])){
      $error;

       $email = $_POST['email'];
       $password = $_POST['password'];

       $sql="select * from tbl_person where Email='".$email."' and Password='".$password."'";

       $result = mysqli_query($db,$sql);

       if (mysqli_num_rows($result)==1) {
         $error= "You have succesfully logged in";
         header("Location:index.php");
       }
        else{
        $error= "Wrong email and password!";
       }
    }
    
  ?>
    <h4 style="margin-top: 40px; margin-bottom: 0px; text-align: center; color: red;"><?php echo @$error; ?></h4>
    <div id="lgn" class="loginbox" >     
    <img src="img/yenilogo.png" class="avatar">
        <h1>Login</h1>       
        <form action="login.php" method="post">
            <p>E-Mail</p>
            <input id="info" type="text" name="email" placeholder="Enter E-Mail">
            <p>Password</p>
            <input id="infopassword" type="password" name="password" placeholder="Enter Password">
            <input type="submit"name="" onclick="" value="Login">
            <a href="#">Lost your password</a><br>
            <a href="register.php">Don't have an acoount?</a>
        </form>
    </div>
    
</body>
<script>
    function ControlFunc() {

        var x, text;

        x = document.getElementById('info').value;
        y = document.getElementById('infopassword').value;

        if (isNaN(x) || x > 30 || isNaN(y)|| y>8) {
           swal("Ooopss","Input not valid","Error");
        } else {
           swal("Good Job","Login Success!!!","Success");
        }
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

</script>
</html>