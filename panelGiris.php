<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>

<form action="panelGiris.php" method="post" style="max-width:500px;margin:auto">
  <h2>Register Form</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="usrnm">
  </div>

  <!-- <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email">
  </div> -->
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="psw">
  </div>

  <button type="submit" class="btn">Sign in (daxil ol)</button>
</form>

</body>
</html>

<?php
// giris ve cixis datalarini saxlamaq ucun bir hisse 
session_start(); // Oturumu başlatır veya devam ettirir

// eger name usrnm olan ve psw olan datalar varsa(yeni yazilibsa true olacaq ve if-e girecek)
if (isset($_POST['usrnm'], $_POST['psw'])) {
    
  // burda bu deyerler admine ve 1234 deyerlerine eyni olacaq
  if ($_POST['usrnm'] == 'admin' && $_POST['psw'] == '1234') {

    // session yaradacaq ve deyerine admin yazacaq bunu yazdiqimiza gore basqa sehivede bunun icerisindeki datanin olub olmamasina goee yoxlayiriq kiher hansi bir sehiveden gelib yoxsa panelGiris sehivesinden gelib. Eger varsa panelGiris sehivesinden gelib
    $_SESSION['user'] = $_POST['usrnm'];

    // sessioni yeniden yaradacaq

    header("Location:panel.php");
    exit(); // header() kullanıldığında çıkış yapılması iyi bir uygulamadır

  }

  else{

    echo "<script>alert('Istifadeci adi ve ya parol sehvdir.')</script>";
  }
}
?>
