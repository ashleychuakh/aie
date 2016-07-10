@extends("layouts/default")

@section("head")
<title>AIE SG</title>
<style>
.top-bar {
  background-color: rgba(242, 242, 242, 0.71);
}
nav {
  background-color: rgba(242, 242, 242, 0.71);
}
.btn-large i {
  font-size: 1.8em;
  display: block;
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
        <p class="white-text">afasdfasfasfdasfdasfasdfasdfsfsafasdf</p>
      </div>
      <div id="owl-hero" class="owl-carousel owl-theme">
        <div class="item"><img src="/assets/img/main/01.jpg"></div>
        <div class="item"><img src="/assets/img/main/02.jpg"></div>
        <div class="item"><img src="/assets/img/main/03.jpg"></div>
      </div>
      <div class="hero-downwards">
        <a id="to-next" href="javascript:;" class="btn-floating btn-large btn-theme btn-downwards"><i class="icon-aieicons-downarrow"></i></a>
      </div>
    </div>
    <div id="services" class="hero-item-blank">
      <div class="container">
        <div class="item-text">
          <h3>Our Services</h3>
          <p>Only the Highest Quality of Services For You</p>
        </div>
        <div id="owl-services" class="owl-carousel owl-theme">
          <div class="item">
            <i class="icon-aieicons-snowflake lightblue-theme-text"></i>
            <h5>General Service</h5>
            <p>blahblahblah</p>
          </div>
          <div class="item">
            <i class="icon-aieicons-honeycomb lightblue-theme-text"></i>
            <h5>Chemical & Overhauling</h5>
            <p>blahblahblah</p>
          </div>
          <div class="item">
            <i class="icon-aieicons-spanner lightblue-theme-text"></i>
            <h5>Repairs & Replacement</h5>
            <p>blahblahblah</p>
          </div>
          <div class="item">
            <i class="icon-aieicons-snowflake lightblue-theme-text"></i>
            <h5>General Service</h5>
            <p>blahblahblah</p>
          </div>
          <div class="item">
            <i class="icon-aieicons-honeycomb lightblue-theme-text"></i>
            <h5>Chemical & Overhauling</h5>
            <p>blahblahblah</p>
          </div>
          <div class="item">
            <i class="icon-aieicons-spanner lightblue-theme-text"></i>
            <h5>Repairs & Replacement</h5>
            <p>blahblahblah</p>
          </div>
        </div>
        <a class="btn btn-theme btn-fat" href="{{ route('book/step1') }}">Make an Appointment</a>
      </div>
    </div>
    <div class="hero-item-1">
      <div class="parallax-container">
        <div class="parallax"><img src="/assets/img/main/hero-item-1.jpg"></div>
          <h3>The Facts</h3>
          <div class="container mtop70">
            <div class="row">
              <div class="item col s12 m6 l3">
                <img class="circle" src="http://placehold.it/150x150">
                <h4>300</h4>
                <hr>
                <p>Happy Customers</p>
              </div>
              <div class="item col s12 m6 l3">
                <img class="circle" src="http://placehold.it/150x150">
                <h4>300</h4>
                <hr>
                <p>Happy Customers</p>
              </div>
              <div class="item col s12 m6 l3">
                <img class="circle" src="http://placehold.it/150x150">
                <h4>300</h4>
                <hr>
                <p>Happy Customers</p>
              </div>
              <div class="item col s12 m6 l3">
                <img class="circle" src="http://placehold.it/150x150">
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
            <div class="item first col s12 m6 l3">
              <i class="icon-aieicons-snowflake black-text"></i>
              <h5>General Service</h5>
              <p>blahblahblah</p>
            </div>
            <div class="item second col s12 m6 l3">
              <i class="icon-aieicons-honeycomb black-text"></i>
              <h5>General Service</h5>
              <p>blahblahblah</p>
            </div>
            <div class="item third col s12 m6 l3">
              <i class="icon-aieicons-spanner black-text"></i>
              <h5>General Service</h5>
              <p>blahblahblah</p>
            </div>
            <div class="item last col s12 m6 l3">
              <i class="icon-aieicons-spanner black-text"></i>
              <h5>General Service</h5>
              <p>blahblahblah</p>
            </div>
          </div>
          <div class="hero-item-blank-signup">
            <a class="btn-border btn-link-fat" href="{{ route('signup') }}">Sign Up Now</a>
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
          <a class="btn-border btn-link-fat" href="{{ route('materials') }}">Learn More</a>
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
            <img src="http://placehold.it/420x150">
          </div>
          <div class="item">
            <img src="http://placehold.it/420x150">
          </div>
          <div class="item">
            <img src="http://placehold.it/420x150">
          </div>
          <div class="item">
            <img src="http://placehold.it/420x150">
          </div>
          <div class="item">
            <img src="http://placehold.it/420x150">
          </div>
          <div class="item">
            <img src="http://placehold.it/420x150">
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

      $('#owl-services').owlCarousel({
          items:3,
          margin:10,
          loop: true,
          dots: true,
          nav: true,
          navText: ['<i class="icon-aieicons-leftarrow"></i>', '<i class="icon-aieicons-rightarrow"></i>'],
          autoplay: false,
          slideBy: 1,
          responsive:{
            0:{
              items: 1,
              nav: false
            },
            600:{
              items: 3,
              nav: false
            },
            1000:{
              items: 3,
              nav: true,
              loop: false
            }
          }
      });

      $('#owl-clients').owlCarousel({
          items:4,
          margin:10,
          loop: true,
          dots: true,
          nav: true,
          navText: ['<i class="icon-aieicons-leftarrow"></i>', '<i class="icon-aieicons-rightarrow"></i>'],
          autoplay: false,
          slideBy: 1,
          responsive:{
            0:{
              items: 1,
              nav: false
            },
            600:{
              items: 3,
              nav: false
            },
            1000:{
              items: 3,
              nav: true,
              loop: false
            }
          }
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