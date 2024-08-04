<?php

session_start();
$_SESSION=array();
session_destroy();
header("Location: panelGiris.php");

?>


<!-- session_start();:

Bu fonksiyon yeni bir oturumu başlatır veya mevcut bir oturumu devam ettirir. Oturum değişkenlerini kullanmadan önce bu fonksiyonun çağrılması gereklidir.
$_SESSION = array();:

Bu satır, $_SESSION süper global dizisini temizler, yani tüm oturum değişkenlerini kaldırır. Ancak, bu işlem oturumu veya istemci tarafındaki oturum çerezini silmez.
session_destroy();:

Bu fonksiyon, sunucu tarafındaki oturum verilerini yok eder. Ancak, istemci tarafındaki oturum çerezini otomatik olarak kaldırmaz. Çoğu durumda, kullanıcı tarayıcısını kapattığında bu çerez de yok olur.
Bu üç satır, bir oturumu tamamen temizlemek ve sonlandırmak için kullanılır. -->