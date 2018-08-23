<?php 

get_header(); ?>

<div class="container-fluid hero" style="background-image: url(<?php echo get_field('hero_image'); ?>);">
    <div class="container-fluid hero-overlay">
        <p><?php echo get_field('hero_intro'); ?></p>
    </div>
</div>

<div class="container-fluid slideshow">
    <h2>Your Weekend Getaway</h2>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo get_template_directory_uri();?>/dist/img/house_pic1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo get_template_directory_uri();?>/dist/img/house_pic2.jpg" alt="First slide">
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo get_template_directory_uri();?>/dist/img/house_pic3.jpg" alt="First slide">
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo get_template_directory_uri();?>/dist/img/house_pic4.jpg" alt="First slide">
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo get_template_directory_uri();?>/dist/img/house_pic5.jpg" alt="First slide">
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo get_template_directory_uri();?>/dist/img/house_pic6.jpg" alt="First slide">
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo get_template_directory_uri();?>/dist/img/house_pic7.jpg" alt="First slide">
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo get_template_directory_uri();?>/dist/img/house_pic8.jpg" alt="First slide">
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo get_template_directory_uri();?>/dist/img/house_pic9.jpg" alt="First slide">
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo get_template_directory_uri();?>/dist/img/house_pic10.jpg" alt="First slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<div class="container-fluid house-features blue-bck">
    <h2>House Features</h2>
    <div class="row">
        <div class="col-md boxprice">
            <p>$185 avg/night</p>
        </div>
        <div class="col-md boxfeatures">
            <ul>
                <li><img src="<?php echo get_template_directory_uri();?>/dist/img/bedroom-icon.svg"> <p>Bedrooms:<span>3</span></p></li>
                <li><img src="<?php echo get_template_directory_uri();?>/dist/img/sleeps-icon.svg"> <p>Sleeps:<span>9</span></p></li>
                <li><img src="<?php echo get_template_directory_uri();?>/dist/img/bathroom-icon.svg"> <p>Bathrooms:<span>1</span></p></li>
                <li><img src="<?php echo get_template_directory_uri();?>/dist/img/night-icon.svg"> <p>Min. Nights:<span>1-4</span></p></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 box amenities">
            <h3>Amenities:</h3>
            <ul>
                <li>Central-Air</li>
                <li>Fully equipped kitchen</li>
                <li>Three cable Tvs and Wifi</li>
                <li>Four complimentary beach passes</li>
                <li>Outdoor patio set and grill</li>
            </ul>
        </div>
        <div class="col-md-3 box rules">
            <h3>House Rules:</h3>
            <ul>
                <li>Minimum rental/occupancy age is 25</li>
                <li>NO smoking inside the house and NO pets</li>
                <li>NO loud parties or events</li>
            </ul>
        </div>
    </div>
    <div class="button-container">
        <button type="button" class="btn btn-dark">Find Out More</button>
    </div>
</div>
<div class="container-fluid things2do">
    <h2>Conviently located near these three fun boardwalks!</h2>
    <div class="row boardwalks">
        <div class="col">
          <img src="<?php echo get_template_directory_uri();?>/dist/img/atlantic-city-sq.png">
            <h3>Alantic City</h3>
        </div>
        <div class="col">
           <img src="<?php echo get_template_directory_uri();?>/dist/img/asbury-park-sq.png">
            <h3>Asbury Park</h3>
        </div>
        <div class="col">
          <img src="<?php echo get_template_directory_uri();?>/dist/img/ocean-city-sq.png">
            <h3>Ocean City</h3>
        </div>
  </div>
<div class="button-container">
  <button type="button" class="btn btn-dark">Find Out More</button>
    </div>
</div>


<?php get_footer(); ?>