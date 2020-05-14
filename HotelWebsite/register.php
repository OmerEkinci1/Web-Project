<!DOCTYPE html>
<html>
<head>
	<title>Ekinci Hotel</title>
	<link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
<?php
session_start();

$db = mysqli_connect("localhost","root","","otelsite");

if (isset($_POST['register_btn'])) {
    $error;
	$name = mysqli_real_escape_string($db, $_POST['firstname']);
	$surname = mysqli_real_escape_string($db, $_POST['lastname']);
	$phone = mysqli_real_escape_string($db, $_POST['phonenumber']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
	$password2 = mysqli_real_escape_string($db, $_POST['password2']);

	if ($_POST['password'] != $_POST['password2']) {
        $error= "Your passwords doesn't match each other!!"; 
	}else{
		$password = md5($password);
		$sql = "INSERT INTO tbl_person(Name,Surname,Phone,Email,Password,Password2) VALUES ('$name','$surname','$phone',  '$email',       '$password','$password2')";
		mysqli_query($db,$sql);
		$_SESSION['message']="You are now logged in";

        require("class.phpmailer.php");
        $code=rand(1000,100000);
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPDebug = 1; // Hata ayıklama değişkeni: 1 = hata ve mesaj gösterir, 2 = sadece mesaj gösterir
        $mail->SMTPAuth = true; //SMTP doğrulama olmalı ve bu değer değişmemeli
        $mail->SMTPSecure = 'tls'; // Normal bağlantı için tls , güvenli bağlantı için ssl yazın
        $mail->Host = "smtp.gmail.com"; // Mail sunucusunun adresi (IP de olabilir)
        $mail->Port = 587; // Normal bağlantı için 587, güvenli bağlantı için 465 yazın
        $mail->IsHTML(true);
        $mail->SetLanguage("tr", "phpmailer/language");
        $mail->CharSet  ="utf-8";
        $mail->Username = "ekinciproducts@gmail.com"; // Gönderici adresinizin sunucudaki kullanıcı adı (e-posta adresiniz)
        $mail->Password = "ekinciotel1"; // Mail adresimizin sifresi
        $mail->SetFrom("ekinciproducts@gmail.com", "Ömer Ekinci"); // Mail atıldığında gorulecek isim ve email (genelde yukarıdaki username kullanılır)
        $mail->AddAddress("$email"); // Mailin gönderileceği alıcı adres
        $mail->Subject = " The Ekinci Hotel"; // Email konu başlığı
        $mail->Body = "Welcome to The Ekinci Hotel"; // Mailin içeriği
        if(!$mail->Send()){
            echo "Email Gönderim Hatasi: ".$mail->ErrorInfo;
        } else {
            echo "Email Gonderildi";
        }
		header("location:index.php");
	}
}
?>
    <h4 style="margin-top: 40px; margin-bottom: 0px; text-align: center; color: red;"><?php echo @$error; ?></h4>
	<div class="sign-up-form">
        <img src="img/yenilogo.png" alt="resim">
        <h1>Ekinci Hotel Register</h1>
        <form  action="register.php" method="post">
            <input id="demo" type="text" class="input-box"  name="firstname"placeholder="Name" required="">
            <input id="demo" type="text" class="input-box"  name="lastname" placeholder="Surname" required="">
            <input id="demo"type="text"class="input-box"name="phonenumber" placeholder="Phone" required="">
            <input id="demo" type="email" class="input-box" name="email" placeholder="Email" required="">
            <input id="demo" type="password" class="input-box" name="password"  placeholder="Password" required="">
            <input id="demo" type="password" class="input-box" name="password2"  placeholder="Password" required="">
            <br>
            <input type="submit" class="signup-button" name="register_btn" value="Sign In">
            <hr style="margin-top: 20px;width: 80%;">
            <p class="or">OR</p>
            <button id="buton" type="button" class="signup-button"><a href="index.html" style="color: white;"> Login without account</a></button>
            <p style="color: white;">Do you have account ? <a name="create" href="login.php">Sign In</a></p>
        </form>
    </div>   
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script type="text/javascript">
        $(function(){
            Swal.fire({
                'imageUrl' : 'img/yenilogo.png',
                'imageHeight' : 150,
                'imageWeight' : 300,
                'title' : 'Welcome The Register Page',
                'text' : 'For registeration fill in the blanks and submit.',
                'type' : 'success'
            })
        });
    </script>
    

    <script type="text/javascript">
    	function ControlFunc() {

	      var x;

	      x = document.getElementById('demo').value;

	      if (isNaN(x)) {
	          alert("Input not valid");
	      } else {
	          alert("Your message have been sent in our system");
	      }
  		}

    </script>

</html>