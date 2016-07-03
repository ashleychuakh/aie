@extends("layouts/default")

@section("head")
<title>AIE SG</title>
<style>
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