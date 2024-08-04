<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .table{
        width: 100%;
        border-collapse: collapse;

    }
    .table th {
      background-color: #28a745;
      color: white;
     
    }
    .table td, .table th {
      vertical-align: middle;
      padding: 10px;
      border: 2px solid black;
    }
    .table tbody tr:nth-child(even) {
        background-color: #dddddd;    }
  </style>
</head>

<body>
<div class="container mt-5">
  <div class="mb-3">
  </div>
  <table class="table table-bordered ">
    <thead>
      <tr>
        <th>Ad Soyad</th>
        <th>Telefon</th>
        <th>Email</th>
        <th>Konu</th>
        <th>Mesaj</th>
      </tr>
    </thead>
    <tbody>


      
      <?php

      session_start();
      
      // eger session deki user yoxdursa
      if (!isset($_SESSION['user']) || $_SESSION['user']=="") {
        header("Location: exit.php");
        // echo "<script>window.location.href = 'exit.php'</script>";

      }

      // eger istifadeci dogru bir sekilde girdiyse
      else{
        //panelGisis sehivesinde sessiona elave edile user adini burda cekib istifade edirik
        echo "<p>Kullanıcı adınız : <span>".$_SESSION['user']."</span></p>";

        // istifadeci cikis etmek ucun
        echo"<a href='exit.php'>Cıkış</a> </br></br></br>";

        include("baglanti.php");
        
        // butun sharetable tabdaki datalari cekme emrini yaziriq
        $see = "SELECT * FROM sharetable";
        
        //// butun sharetable tabdaki datalari cekme emrini surguda gonderirirk
        $result = $connect->query($see);
        
        // gelen neticenin datatlari 0 da boyuk olarsa If islesin
        if ($result->num_rows > 0) {
        
          //her setrin datasini tr-sinin (yeni ki gelen arrayin icerisindeki obyekti gotururuk) datasinin setre yazdirirriq
            while ($cek = $result->fetch_assoc()) {
                echo "
                <tr>
                  <td>" . $cek['adi_soyadi'] . "</td>
                  <td>" . $cek['telefon'] . "</td>
                  <td>" . $cek['mail'] . "</td>
                  <td>" . $cek['movzu'] . "</td>
                  <td>" . $cek['mesaj'] . "</td>
                </tr>
              ";
            }
        } else {
            echo "Hec bir tabledaki datanin yoxdur";
        }
      }

?>

    </tbody>
  </table>
</div>
</body>
</html>


        



