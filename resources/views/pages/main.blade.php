@extends("layouts/default")

@section("head")
<title>AIE SG</title>
<style>
header {
  z-index: 1000;
}
.grey-section {
  background-color: #bdbdbd;
  min-height: 400px;
  padding-top: 20px;
  padding-bottom: 20px
}
.darkgrey-section {
  background-color: #757575;
  min-height: 400px;
  padding-bottom: 20px
}
.hero {
  color: #fff;
  min-height: 720px;
  position: relative;
  bottom: 0%;
  left: 0%;
  height: 100%;
  width: 100%;
  overflow: hidden;
  background: #000;
  margin-top: -190px;
}

.hero p {
  color: #fff;
  font-size: 1.5em;
}

.hero-text {
  position: absolute;
  text-align: center;
  z-index: 2;
  width: 100%;
  margin-top: 450px;
}

.hero-text h1 {
  font-weight: 700;
}

.hero-text p {
  font-family: Arial, sans-serif;
}

.hero-downwards {
  position: absolute;
  bottom: 0;
  width: 100%;
  text-align:center;
  margin-bottom: 20px;
}

.btn-downwards {
}

.hero .owl-stage-outer {
  z-index: -1;
}
.hero .owl-dots {
    position: absolute;
    z-index: 1;
    right: 0;
    margin-right: 50px;
    bottom: 0;
    margin-bottom: 30px;
}

.hero .owl-theme .owl-dots .owl-dot span {
  background: #676767;
  margin: 5px 2.5px;
}

.hero .owl-theme .owl-dots .owl-dot.active span, .hero .owl-theme .owl-dots .owl-dot:hover span {
  background: #3D9FF9;
}

.hero-item-blank {
  background: #fff;
  background-position: center;
  text-align: center;
  padding: 30px;
}

.hero-item-blank .item-text h3{
  color: #828284;
  text-transform: uppercase;
}

.hero-item-blank .item-text p {
  color: #3D9FF9;
  text-transform: uppercase;
  font-size: 1.2em;
}

.hero-item-blank .owl-carousel .owl-item img {
  width: 72px;
  height: 72px;
  margin: 0 auto;
}

.hero-item-blank .item h5 {
    color: #828284;
    font-weight: 300;
}

.hero-item-blank .item p {
    color: #3D9FF9;
    font-family: Arial, sans-serif;
}

.hero-item-blank .item.line {
  border-right: 1px solid #bdbdbd;
}

.hero-item-blank .btn-border {
  border: 2px solid #bdbdbd;
  color: #757575;
}

.hero-item-blank-signup {
  padding: 20px;
}

.hero-item-blank .owl-stage-outer {
  z-index: -1;
}
.hero-item-blank .owl-dots {
  margin: 30px 0;
}

.hero-item-blank .owl-theme .owl-dots .owl-dot span {
  background: transparent;
  border: 2px solid #676767;
  margin: 5px 2.5px;
}

.hero-item-blank .owl-theme .owl-dots .owl-dot.active span, .hero-item-blank .owl-theme .owl-dots .owl-dot:hover span {
  background: #3D9FF9;
  border: none;
}

.hero-item-blank .owl-carousel .owl-nav .owl-prev {
  position: absolute;
  top: 0;
  margin-top: 60px;
}

.hero-item-blank .owl-carousel .owl-nav .owl-next {
  position: absolute;
  top: 0;
  right: 0;
  margin-top: 60px;
}

#owl-item {
  padding-top: 30px;
}

#owl-clients {
  padding-top: 30px;
}

.hero-item-1 {
  position: relative;
  background-position: center;
  text-align: center;
}

.hero-item-1 .parallax-content-container {
  position: absolute;
  top: 0;
  width: 100%;
}

.hero-item-1 h3 {
  margin: 0;
  padding-top: 50px;
  text-transform: uppercase;
  color: #fff;
}

.hero-item-1 .item h4 {
  color: #fff;
}
.hero-item-1 .item hr {
  border: 3px solid #fff;
  width: 60px;
  margin: 0 auto;
}
.hero-item-1 .item p {
  color: #fff;
  font-size: 1.1em;
  font-weight: 300;
  margin-top: 15px;
}

.hero-item-2 {
  position: relative;
  background-position: center;
  text-align: center;
}

.hero-item-2 .parallax-content-container {
  position: absolute;
  top: 0;
  width: 100%;
  margin-top: 80px;
}

.hero-item-2 h1 {
  margin: 0;
  padding-top: 50px;
  text-transform: uppercase;
  color: #fff;
  font-weight: 700;
}

.hero-item-2 h4 {
  margin: 0;
  color: #fff;
  padding-top: 10px;
  font-family: Arial, sans-serif;
}

.hero-item-2-learnmore {
  margin-top: 70px;
}

.hero-item-2-learnmore .btn-border {
  border: 2px solid #fff;
  color: #fff;
}
</style>
<link type="text/css" rel="stylesheet" href="/assets/css/owl.carousel.css" />
<link type="text/css" rel="stylesheet" href="/assets/css/owl.theme.default.min.css" />
@stop

@section("content")
  <main>
    <div class="hero">
      <div class="hero-text">
        <h1>Lorem ipsum dolor</h1>
        <p>afasdfasfasfdasfdasfasdfasdfsfsafasdf</p>
      </div>
      <div id="owl-hero" class="owl-carousel owl-theme">
        <div class="item"><img src="/assets/img/main/01.jpg"></div>
        <div class="item"><img src="/assets/img/main/02.jpg"></div>
        <div class="item"><img src="/assets/img/main/03.jpg"></div>
      </div>
      <div class="hero-downwards">
        <button id="to-next" href="javascript:;" class="btn-floating btn-large btn-theme btn-downwards">wee</button>
      </div>
    </div>
    <div id="services" class="hero-item-blank">
      <div class="container">
        <div class="item-text">
          <h3>Our Services</h3>
          <p>Only the Highest Quality of Services For You</p>
        </div>
        <div id="owl-item" class="owl-carousel owl-theme">
          <div class="item">
            <img alt="General Service" src="/assets/img/main/snowflake.png">
            <h5>General Service</h5>
            <p>blahblahblah</p>
          </div>
          <div class="item">
            <img alt="General Service" src="/assets/img/main/honeycomb.png">
            <h5>Chemical & Overhauling</h5>
            <p>blahblahblah</p>
          </div>
          <div class="item">
            <img alt="General Service" src="/assets/img/main/spanner.png">
            <h5>Repairs & Replacement</h5>
            <p>blahblahblah</p>
          </div>
          <div class="item">
            <img alt="General Service" src="/assets/img/main/snowflake.png">
            <h5>General Service</h5>
            <p>blahblahblah</p>
          </div>
          <div class="item">
            <img alt="General Service" src="/assets/img/main/honeycomb.png">
            <h5>Chemical & Overhauling</h5>
            <p>blahblahblah</p>
          </div>
          <div class="item">
            <img alt="General Service" src="/assets/img/main/spanner.png">
            <h5>Repairs & Replacement</h5>
            <p>blahblahblah</p>
          </div>
        </div>
        <button class="btn btn-theme btn-fat">Make an Appointment</button>
      </div>
    </div>
    <div class="hero-item-1">
      <div class="parallax-container">
        <div class="parallax"><img src="/assets/img/main/hero-item-1.jpg"></div>
      </div>
      <div class="parallax-content-container">
        <h3>The Facts</h3>
        <div class="container mtop100">
          <div class="row no-margin">
            <div class="item col s3">
              <img alt="General Service" src="/assets/img/main/snowflake.png">
              <h4>300</h4>
              <hr>
              <p>Happy Customers</p>
            </div>
            <div class="item col s3">
              <img alt="General Service" src="/assets/img/main/snowflake.png">
              <h4>300</h4>
              <hr>
              <p>Happy Customers</p>
            </div>
            <div class="item col s3">
              <img alt="General Service" src="/assets/img/main/snowflake.png">
              <h4>300</h4>
              <hr>
              <p>Happy Customers</p>
            </div>
            <div class="item col s3">
              <img alt="General Service" src="/assets/img/main/snowflake.png">
              <h4>300</h4>
              <hr>
              <p>Happy Customers</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="hero-item-blank">
        <div class="item-text">
          <h3>Account Features</h3>
        </div>
        <div class="container mtop100">
          <div class="row">
            <div class="item line col s3">
              <img alt="General Service" src="/assets/img/main/snowflake.png">
              <h5>General Service</h5>
              <p>blahblahblah</p>
            </div>
            <div class="item line col s3">
              <img alt="General Service" src="/assets/img/main/snowflake.png">
              <h5>General Service</h5>
              <p>blahblahblah</p>
            </div>
            <div class="item line col s3">
              <img alt="General Service" src="/assets/img/main/snowflake.png">
              <h5>General Service</h5>
              <p>blahblahblah</p>
            </div>
            <div class="item last col s3">
              <img alt="General Service" src="/assets/img/main/snowflake.png">
              <h5>General Service</h5>
              <p>blahblahblah</p>
            </div>
          </div>
          <div class="hero-item-blank-signup">
            <a href="" class="btn-border btn-link-fat">Sign Up Now</a>
          </div>
        </div>
    </div>
    <div class="hero-item-2">
      <div class="parallax-container">
        <div class="parallax"><img src="/assets/img/main/hero-item-2.jpg"></div>
      </div>
      <div class="parallax-content-container">
        <h1>Built to Last</h1>
        <h4>Singapore Certified Installation Materials that outlast time</h4>
        <div class="hero-item-2-learnmore">
          <a href="" class="btn-border btn-link-fat">Learn More</a>
        </div>
      </div>
    </div>
    <div class="hero-item-blank">
      <div class="container">
        <div class="item-text">
          <h3>Our Clients</h3>
        </div>
        <div id="owl-clients" class="owl-carousel owl-theme">
          <div class="item">
            <img alt="General Service" src="/assets/img/main/snowflake.png">
            <h5>General Service</h5>
            <p>blahblahblah</p>
          </div>
          <div class="item">
            <img alt="General Service" src="/assets/img/main/honeycomb.png">
            <h5>Chemical & Overhauling</h5>
            <p>blahblahblah</p>
          </div>
          <div class="item">
            <img alt="General Service" src="/assets/img/main/spanner.png">
            <h5>Repairs & Replacement</h5>
            <p>blahblahblah</p>
          </div>
          <div class="item">
            <img alt="General Service" src="/assets/img/main/snowflake.png">
            <h5>General Service</h5>
            <p>blahblahblah</p>
          </div>
          <div class="item">
            <img alt="General Service" src="/assets/img/main/honeycomb.png">
            <h5>Chemical & Overhauling</h5>
            <p>blahblahblah</p>
          </div>
          <div class="item">
            <img alt="General Service" src="/assets/img/main/spanner.png">
            <h5>Repairs & Replacement</h5>
            <p>blahblahblah</p>
          </div>
        </div>
      </div>
    </div>
  </main>
@stop

@section("scripts")
  <script src="/assets/js/owl.carousel.js"></script>
  <script>
    $(function() {
      $('#owl-hero').owlCarousel({
          items:1,
          margin:10,
          loop: true,
          dots: true,
          autoplay: true
      });

      $('#owl-item').owlCarousel({
          items:3,
          margin:10,
          loop: true,
          dots: true,
          nav: true,
          autoplay: false,
          slideBy: 3
      });

      $('#owl-clients').owlCarousel({
          items:4,
          margin:10,
          loop: true,
          dots: true,
          nav: true,
          autoplay: false,
          slideBy: 3
      });

      $('#to-next').click(function() {      // When arrow is clicked
          $('body,html').animate({
              scrollTop: $("#services").offset().top
          }, 800);
      });

      $('.parallax').parallax();
    });
  </script>
@stop