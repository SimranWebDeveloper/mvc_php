<!DOCTYPE html>
<html lang="az">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>

<!-- education -->
<style>

  #education {
    position: relative;
    height: 100%;
  }

  #education {
    background: #eee;
    font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
    font-size: 14px;
    color: #000;
    margin: 0;
    padding: 0;
  }

  .swiper {
    width: 100%;
    height: 100%;
  }

  .swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- team -->
<style>
  .team-section {
    background-color: #003366;
    color: #fff;
    padding: 50px 0;
    text-align: center;
  }

  .team-section .member {
    margin-bottom: 30px;
  }

  .team-section .member img {
    border-radius: 50%;
    width: 150px;
    height: 150px;
    object-fit: cover;
  }

  .team-section .social-icons {
    margin-top: 15px;
  }

  .team-section .social-icons a {
    color: #fff;
    margin: 0 5px;
    font-size: 20px;
    transition: color 0.3s;
  }

  .team-section .social-icons a:hover {
    color: #d4d4d4;
  }
</style>
<!-- Font Awesome for social media icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<!-- contact -->
<style>
  #contact {
    background: url('public/img/contactbg.webp') no-repeat top center fixed;
    /* Replace with your actual background image URL */
    background-size: cover;
    background-position: center;
    min-height: 100vh;
  }

  .contact-form {
    background: rgba(255, 255, 255, 0.8);
    padding: 20px;
    border-radius: 10px;
    margin: 50px;
    width: 600px;
  }
</style>


<body>
  <header class="fixed-top">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="public/img/logo.png" alt="Logo" width="60" height="30"
            class="d-inline-block align-text-top object-fit-cover">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#about" >About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#education">Education</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#team">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#contact">Contact</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button>
          </form>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <!-- home -->
    <section class="d-flex align-items-end justify-content-start p-5"
      style="height: 80vh;background: url(public/img/bg.jpg) no-repeat fixed top/cover;">

      <div style="width: 600px;" class="text-danger-emphasis">
        <h1 class="font-lg border-bottom border-primary pb-4 mb-3">Education</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus, autem reiciendis earum officia cum dicta.
          Explicabo doloremque alias, cupiditate atque quas velit. Ipsum sunt ratione animi ipsam rem obcaecati ab..</p>

      </div>


    </section>
    <!-- about -->
    <section id="about">
      <div class="container  my-5">
        <h1 class="text-center">Haqqimizda</h1>
        <div class="row my-5 ">
          <div class="col-lg-4 text-center  border-end ">
            <h3>Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit. Provident, Distinctio.</h3>
          </div>
          <div class="col-lg-8 ps-6 ">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet saepe eveniet ratione omnis reprehenderit
              officia quasi nostrum asperiores dolores quam aliquid voluptate eaque, excepturi ea quia laboriosam est
              officiis sapiente. Facere, fugiat. Eius expedita veniam qui dolorum reiciendis, est impedit, libero modi,
              error voluptatem eligendi. Voluptates nostrum iure porro repellendus dignissimos?
            </p>
          </div>
        </div>

        <div class="row my-5">
          <div class="col-12 text-center">
            <img src="public/img/about.png" class="img-fluid" alt="Sunset">
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque nobis, vero aperiam. Eius vitae ad
              distinctio nesciunt consequuntur, commodi minima doloremque aliquid vero quas sequi ipsa. Tenetur ut harum
              cupiditate!
            </p>
          </div>
        </div>


      </div>
    </section>
    <!-- education -->
    <section id="education">
      <div class="container  my-5">
        <h1 class="text-center">education</h1>
        <!-- Swiper -->
        <div class="swiper mySwiper">
          <div class="swiper-wrapper ">
            <div class="swiper-slide">
              <div class="card" style="width: 18rem;">
                <img src="public/img/keyboard.jpg" class="card-img-top" alt="...">
                <div class="card-body d-felx justify-content-between align-items-center">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card" style="width: 18rem;">
                <img src="public/img/keyboard.jpg" class="card-img-top" alt="...">
                <div class="card-body d-felx justify-content-between align-items-center">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card" style="width: 18rem;">
                <img src="public/img/keyboard.jpg" class="card-img-top" alt="...">
                <div class="card-body d-felx justify-content-between align-items-center">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card" style="width: 18rem;">
                <img src="public/img/keyboard.jpg" class="card-img-top" alt="...">
                <div class="card-body d-felx justify-content-between align-items-center">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card" style="width: 18rem;">
                <img src="public/img/keyboard.jpg" class="card-img-top" alt="...">
                <div class="card-body d-felx justify-content-between align-items-center">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card" style="width: 18rem;">
                <img src="public/img/keyboard.jpg" class="card-img-top" alt="...">
                <div class="card-body d-felx justify-content-between align-items-center">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card" style="width: 18rem;">
                <img src="public/img/keyboard.jpg" class="card-img-top" alt="...">
                <div class="card-body d-felx justify-content-between align-items-center">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card" style="width: 18rem;">
                <img src="public/img/keyboard.jpg" class="card-img-top" alt="...">
                <div class="card-body d-felx justify-content-between align-items-center">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>


          </div>
          <div class="swiper-pagination"></div>

        </div>
      </div>
    </section>
    <!-- team -->
    <section id="team">
      <div class="container team-section overflow-hidden">
        <h2 class="mb-5">Ekip</h2>
        <div class="row">
          <div class="col-md-4 member">
            <img src="https://via.placeholder.com/150" alt="Member 1">
            <h5 class="mt-3">Lorem Ipsum</h5>
            <p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit. Magnam, Cum!</p>
            <div class="social-icons">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-google"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
          </div>
          <div class="col-md-4 member">
            <img src="https://via.placeholder.com/150" alt="Member 2">
            <h5 class="mt-3">Lorem Ipsum</h5>
            <p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit. Magnam, Cum!</p>
            <div class="social-icons">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-google"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
          </div>
          <div class="col-md-4 member">
            <img src="https://via.placeholder.com/150" alt="Member 3">
            <h5 class="mt-3">Lorem Ipsum</h5>
            <p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit. Magnam, Cum!</p>
            <div class="social-icons">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-google"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- contact -->
    <section id="contact">
      <div class=" d-flex justify-content-start align-items-center h-100 ">
        <div class="contact-form" style="width: 800px">
          <h2 class="text-center">İletişim</h2>
          <div class="d-flex flex-column flex-md-row" style="gap:20px">
            <form action="index.php" method="post">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Ad Soyad</label>
                  <input type="text" class="form-control" id="name" placeholder="Ad Soyad" name="ad-soyad" >
                </div>
                <div class="form-group col-md-6">
                  <label for="email">Email Adresi</label>
                  <input type="email" class="form-control" id="email" placeholder="Email Adresi" name="email">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="phone">Telefon Numarası</label>
                  <input type="text" class="form-control" id="phone" placeholder="Telefon Numarası" name="telefon">
                </div>
                <div class="form-group col-md-6">
                  <label for="subject">Konu Başlığı</label>
                  <input type="text" class="form-control" id="subject" placeholder="Konu Başlığı" name="konu">
                </div>
              </div>
              <div class="form-group">
                <label for="message">Mesaj</label>
                <textarea class="form-control" id="message" rows="4" style="resize: none;"name="mesaj"
                  placeholder="Mesaj"></textarea>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
            <div class="mt-4">
              <h4>Adres:</h4>
              <p>
                <i class="fas fa-map-marker-alt"></i> 574. Sokak İstanbul, Türkiye<br>
                <i class="fas fa-phone"></i> Phone: +1 123 456 789<br>
                <i class="fas fa-phone"></i> Call Us At: +1 123 456 789<br>
                <i class="fas fa-envelope"></i> Email: info@dentalmail.com
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <footer></footer>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <!-- education -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 10,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 50,
        },
      },
    });
  </script>
</body>

</html>


<?php
include ("baglanti.php");

// isset -menasi yeniki data varsa
if (isset($_POST["ad-soyad"], $_POST["email"], $_POST["telefon"], $_POST["konu"], $_POST["mesaj"])) {
    $adsoyad = $_POST["ad-soyad"];
    $email = $_POST["email"];
    $telefon = $_POST["telefon"];
    $konu = $_POST["konu"];
    $mesaj = $_POST["mesaj"];

    $add="INSERT INTO sharetable ( adi_soyadi, telefon, mail, movzu, mesaj) VALUES ('".$adsoyad."','".$telefon."','".$email."','".$konu."','".$mesaj."')";

    // baglanti sehivesindeki yaratdigimiz connect-nin icerisindeki sorgu gonderirirk  
    // ve sorgu-nu add-e yazib gonderirrik. eger ugurlu gelerse true dondurur ve echo ile ikra yazdiririq
    if ($connect->query($add) === TRUE) {
      echo "<script>alert('Mesajınız ugurla gonderildi.')</script>";
    }
    else{
      echo "<script>alert('Mesajınız Gonderilerken xeta bas verdi.')</script>";
    }
}
?>