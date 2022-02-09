<?php

session_start();
    $username=$_SESSION["username"];

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Filma-tix</title>
    
    <link rel="stylesheet" href="SeriesStyle.css">
</head>
<body>
    <header>
        <a class="logo-box" href="Home Page.php">
            <img src="Img/logo.png" class="logo">
            <h1>Filma-tix</h1>
        </a>
        <nav>
        <a  href="Home Page.php">
                <li>Home</li>
            </a>
            <a href="About Us.php">
                <li style="margin-right:20px;">About Us</li>
            </a>
            <div>
                <?php
                    echo"<p> <font color=aqua font-size: 150%;> $username </font></p>"
                ?>
            </div>
            <a href="../Login2.php">
                <li style="color:red;">Log Out</li>
            </a>
        </nav>
    </header>
    

        <div class="search">
            <video autoplay muted loop id="myVideo">
                <source src="Img/video.mp4" type="video/mp4">
            </video>
          
            <div class="search-container">
                <form action="#">
                  <input type="text" placeholder="Search">
       
                </form>
                <div class="search-logo">
                  <button type="submit"><img src="img/search.png" alt=""></button>
                 
                </div>
              </div>
        </div>

        <div class="body-content-box">
            <div class="body-content">
                <h1 class="latest">Latest Series</h1>
                <a href="ActionPage.php"><p>Action</p></a>
                <a href="HorrorPage.php"><p>Horror</p></a>
                <p>Comedy</p>
                <p>Drama</p>
                <a href="SeriesPage.php"><p>Series</p></a>
            </div>
        </div>
        <div class="pic-box">
<a href="Serialet.php">
    <div class="pics">
        <div class="four">
            <div class="four-pic">
                <div class="pic-square">
                    <img src="Img/Series/img-1.png" class="pic-img">
                    <div class="pic-info">
                        <p id="demo1">How I met your mother</p>
                        <p>24 Oct 2020</p>
                    </div>
                </div>
                <div class="pic-square border">
                    <img src="Img/Series/img-2.png"class="pic-img">
                    <div class="pic-info">
                        <p>Mandalorian</p>
                        <p>24 Oct 2020</p>
                    </div>
                </div>
                <div class="pic-square border">
                    <img src="Img/Series/img-3.png"class="pic-img">
                    <div class="pic-info">
                        <p>Watchmen</p>
                        <p>24 Oct 2020</p>
                    </div>
                </div>
                <div class="pic-square border">
                    <img src="Img/Series/img-4.png"class="pic-img">
                    <div class="pic-info">
                        <p>Westworld</p>
                        <p>24 Oct 2020</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="four">
            <div class="four-pic">
                <div class="pic-square">
                    <img src="Img/Series/img-5.png"class="pic-img">
                    <div class="pic-info">
                        <p>The Witcher</p>
                        <p>24 Oct 2020</p>
                    </div>
                </div>
                <div class="pic-square border">
                    <img src="Img/Series/img-6.png"class="pic-img">
                    <div class="pic-info">
                        <p>Game Of Throne</p>
                        <p>24 Oct 2020</p>
                    </div>
                </div>
                <div class="pic-square border">
                    <img src="Img/Series/img-7.png"class="pic-img">
                    <div class="pic-info">
                        <p>Morbius</p>
                        <p>24 Oct 2020</p>
                    </div>
                </div>
                <div class="pic-square border">
                    <img src="Img/Series/img-8.png"class="pic-img">
                    <div class="pic-info">
                        <p>Stranger Things</p>
                        <p>24 Oct 2020</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="four">
            <div class="four-pic">
                <div class="pic-square">
                    <img src="Img/Series/img-9.png"class="pic-img">
                    <div class="pic-info">
                        <p>Peaky Blinders</p>
                        <p>24 Oct 2020</p>
                    </div>
                </div>
                <div class="pic-square border">
                    <img src="Img/Series/img-10.png"class="pic-img">
                    <div class="pic-info">
                        <p>Altered Carbon</p>
                        <p>24 Oct 2020</p>
                    </div>
                </div>
                <div class="pic-square border">
                    <img src="Img/Series/img-11.png"class="pic-img">
                    <div class="pic-info">
                        <p>Arcane</p>
                        <p>24 Oct 2020</p>
                    </div>
                </div>
                <div class="pic-square border">
                    <img src="Img/Series/img-12.png"class="pic-img">
                    <div class="pic-info">
                        <p>Breaking Bad</p>
                        <p>24 Oct 2020</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</a>

<div align="center">
    <button class="button-1">Previus Page</button>
    <button class="button-1">1</button>
    <button class="button-1">Next Page</button>
</div>



<h1 align="center" style="margin-top: 50px;">Top 3 Most Watched Series Last Month</h1>

<a href="Serialet.php">
<div class="slideshow-container">

    <div class="mySlides fade">
      <img src="Img/Series/1.png" style="width:100%">
    </div>
    
    <div class="mySlides fade">
      <img src="Img/Series/2.png" style="width:100%">
    </div>
    
    <div class="mySlides fade">
      <img src="Img/Series/3.png" style="width:100%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    
    </div>
    <br>
    
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
    </div>
</div> 
</a>

<div class="footer">
    <div class="footer-content">
        <div class="left">
            <h1>About Filma-tix</h1>
            <p>At Filma-tix, we want to entertain the world. Whatever your taste, and no matter where you live, we give you access to best-in-class TV shows, movies and documentaries.</p>

        </div>
        <div class="right">
            <div class="our-links">
                <h1>Our Links</h1>
                <div class="socials">
                    <div class="ico-box ico">
                        <img src="Img/facebook.png">
                    </div>
                    <div class="ico-box ico">
                        <img src="img/twitter.png">
                    </div>
                    <div class="ico-box ico">
                        <img src="img/instagram.png">
                    </div>
                </div>
            </div>

            <div class="about">
                <div class="l-about">
                    <p>Advertise</p>
                    <p>Support</p>
                    <p>Freelancer</p>
                    <p>Contact</p>
                </div>
                <div class="designby">

                    <p>Designed by: Ardi Osmani & Endrit Kryeziu</p> 
                </div>
            </div>
        </div>
    </div>
</div>

<script>


        var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {

  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
</body>
</html>