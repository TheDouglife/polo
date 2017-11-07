<?php
// Define variables for SEO
$pageTitle = 'The Villages Polo Club';
$pageDescription = 'Come experience the exciting world of polo at The Villages Polo Club, in the heart of Floridas Friendliest Hometown';
$pageCanonical = 'http://thevillagespoloclub.com';
$page = "home" ;
// Include header file
include('header.php');
?>

<section class="header home-header"><h2><img src="img/unique-experience.png"></h2></section>

<section class="main">
    <div class="container">
    <div class="row">
        <div class="col-sm-8"><h1 class="text-center">The Villages Polo Club</h1>
        <p>For over 20 years The Villages Polo Club has provided an unforgettable polo experience for thousands of spectators and hundreds of polo players from around the world. Located in the heart of Florida’s Friendliest Hometown®, one hour north of Orlando and thirty minutes south of Ocala. Our 115 acre polo facility offers you a chance to experience the amazing world of polo.</p>
        <p>The Villages Polo Club offers first-class facilities and the largest crowds in the U.S., with over 30,000 spectators each year. Our competitive, 6-12 goal polo spans over two full seasons: the spring, running March through May, and fall, running October through December. The Villages Polo Club’s three level stadium resides on an elevated berm, giving you breathtaking views from any seat.</p>
    </div>
        <div class="col-sm-offset-0 col-sm-4 no-padding">

        <div class="row">
      <div class="carousel slide" data-ride="carousel" id="quote-carousel">
        <!-- Bottom Carousel Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#quote-carousel" data-slide-to="1"></li>
          <li data-target="#quote-carousel" data-slide-to="2"></li>
        </ol>
        
        <!-- Carousel Slides / Quotes -->
        <div class="carousel-inner">
        
          <!-- Quote 1 -->
          <div class="item active">
            <blockquote>
              <div class="row">
                <div class="col-sm-12 text-center">
                  <img src="img/donna-testimonial.jpg">
                </div>
                <div class="col-sm-offset-1 col-sm-10">
                <p class="test-title text-center">Donna, Village of Orange Blossom Gardens</p>
                  <p class="testimonial">We have a beautiful grandstand, provided by The Villages. And not only the grandstand, but you can bring your own lawn chairs, you can drive your golf cart up and you can tailgate. It’s just a wonderful experience.”</p>
                </div>
              </div>
            </blockquote>
          </div>
          <!-- Quote 2 -->
          <div class="item">
            <blockquote>
              <div class="row">
              <div class="col-sm-12 text-center">
              <img src="img/donna-testimonial.jpg">
            </div>
            <div class="col-sm-offset-1 col-sm-10">
            <p class="test-title text-center">Donna, Village of Orange Blossom Gardens</p>
              <p class="testimonial">We have a beautiful grandstand, provided by The Villages. And not only the grandstand, but you can bring your own lawn chairs, you can drive your golf cart up and you can tailgate. It’s just a wonderful experience.”</p>
            </div>
              </div>
            </blockquote>
          </div>
          <!-- Quote 3 -->
          <div class="item">
            <blockquote>
              <div class="row">
              <div class="col-sm-12 text-center">
              <img src="img/donna-testimonial.jpg">
            </div>
            <div class="col-sm-offset-1 col-sm-10">
            <p class="test-title text-center">Donna, Village of Orange Blossom Gardens</p>
              <p class="testimonial">We have a beautiful grandstand, provided by The Villages. And not only the grandstand, but you can bring your own lawn chairs, you can drive your golf cart up and you can tailgate. It’s just a wonderful experience.”</p>
            </div>
              </div>
            </blockquote>
          </div>
        </div>
        
        <!-- Carousel Buttons Next/Prev -->
        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>                        
    </div>
  </div>
  </div>
    </div>
    </div>

<div class="container section-margin">
<div class="col-sm-6 get-started text-center"><h2>Get Started</h2><p>Experience the exciting world of The Villages Polo Club. Interested in learning more? Use these helpful pages to start you on your way!</p>
    <p><a href="/learn.php" class="btn btn-primary btn-lg">Learn</a><a href="/faqs.php" class="btn btn-primary btn-lg">F.A.Q.'s</a></p></div>
<div class="col-sm-6 no-padding"><iframe width="100%" height="300" src="https://www.youtube.com/embed/uuFJdgTT5kE?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
</div>
</div>
<?php include("footer.php");?>