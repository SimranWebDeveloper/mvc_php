<?php

    $db_server="localhost";
    $db_username="root";
    $db_password="";
    $db_name="sharedatabase";

        $connect=mysqli_connect($db_server,$db_username,$db_password,$db_name);

    if (!$connect) {
        die("Database baglantisi ugursuzdur".mysqli_connect_error());
    }

    else{

        echo "Database baglantisi ugurludur";
    }
?>



<!-- 
mysqli_connect fonksiyonu, PHP'de MySQL veritabanına bağlantı kurmak için kullanılır. 
 Bu fonksiyon, belirtilen sunucu, kullanıcı adı, şifre ve veritabanı adı ile veritabanına
  bir bağlantı kurar ve bağlantı başarılı olduğunda bir bağlantı nesnesi döndürür. 
  Bağlantı kurulamazsa false döndürür.
   -->