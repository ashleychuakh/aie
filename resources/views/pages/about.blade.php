@extends("layouts/default")

@section("head")
<title>AIE SG | About Us</title>
<style>
.hero-item-blank #owl-item-projects .owl-nav .owl-prev {
  bottom: 15%;
  left: 15%;
}
.hero-item-blank #owl-item-projects .owl-nav .owl-next {
  bottom: 15%;
  left: 22%;
}
</style>
<link type="text/css" rel="stylesheet" href="/assets/css/owl.carousel.css" />
<link type="text/css" rel="stylesheet" href="/assets/css/owl.theme.default.min.css" />
@stop

@section("content")
<main>
  <div class="hero">
    <div class="hero-text">
      <h1 class="grey-theme-text">ABOUT US</h1>
      <p class="lightblue-theme-text">afasdfasfasfdasfdasfasdfasdfsfsafasdf</p>
    </div>
    <div>
      <div class="header-img about-header-img"></div>
    </div>
  </div>
  <div class="hero-item-blank special">
    <div class="container">
      <div class="item-text-small">
        <div class="row tleft">
          <div class="col s12">
            <h5 class="lightblue-theme-text">OUR MISSION & VISION</h5>
          </div>
          <div class="col s12 m5">
            <img class="responsive-img service-img-2" src="http://placehold.it/400x250">
          </div>
          <div class="col s12 m7">
            <div class="description" >Lorem ipsum dolor sit amet, an phaedrum dissentiet per, ad viris dolore denique ius. Sea dicant assueverit id, mel eruditi labores cu. Ea commodo corpora intellegebat cum. Nec te mazim euismod sapientem, vide illud id est.</div>
            <p class="lightblue-theme-text"><i class="icon-aieicons-check tobelightedup-1 grey-theme-text"></i> WE OFFER QUALITY WORK</p>
            <p class="lightblue-theme-text"><i class="icon-aieicons-check tobelightedup-2 grey-theme-text"></i> TEST & INSPECT BEFORE START WORK</p>
            <p class="lightblue-theme-text"><i class="icon-aieicons-check tobelightedup-3 grey-theme-text"></i> WE KEEP YOUR HOME COOL</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="hero-item-blank projects">
    <div class="container">
      <div id="owl-item-projects" class="owl-carousel">
        <div class="item">
          <div class="row no-margin">
            <div class="col s12 l5">
              <div class="project-text">
                <h4 class="project-title white-text">Our Projects</h4>
                <p class="item-subtext white-text">Project One</p>
                <p class="item-subtext white-text">Fat</p>
              </div>
            </div>
            <div class="col s12 l7">
              <img src="http://placehold.it/1280x720">
            </div>
          </div>
        </div>
        <div class="item">
          <div class="row">
            <div class="col s12 m5">
              <p class="slider-projects-header white-text">Project Two</p>
              <p class="slider-projects-subs white-text">Fat</p>
            </div>
            <div class="col s12 m7">
              <img src="http://placehold.it/1280x720">
            </div>
          </div>
        </div>
        <div class="item">
          <div class="row">
            <div class="col s12 m5">
              <p class="slider-projects-header white-text">Project Three</p>
              <p class="slider-projects-subs white-text">Fat</p>
            </div>
            <div class="col s12 m7">
              <img src="http://placehold.it/1280x720">
            </div>
          </div>
        </div>
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
</main>
@stop

@section("scripts")
<script src="/assets/js/owl.carousel.js"></script>
<script>
$(function() {
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

  $('#owl-item-projects').owlCarousel({
    items:1,
    margin:10,
    loop: true,
    dots: false,
    autoplay: false,
    navText: ['<i class="icon-aieicons-leftarrow white-text"></i>', '<i class="icon-aieicons-rightarrow white-text"></i>'],
    nav: false,
    responsive:{
      0:{
        nav: false
      },
      600:{
        nav: false
      },
      1250:{
        nav: true
      }
    }
  });

$('.parallax').parallax();

function lightUpArrowsPlz(count) {
  $('.tobelightedup-' + count).removeClass('grey-theme-text').addClass('lightblue-theme-text');
}

var options = [
  {selector: '.hero-item-blank.projects', offset: 250, callback: function() {
    lightUpArrowsPlz(1);
  } },
  {selector: '.hero-item-blank.projects', offset: 350, callback: function() {
    lightUpArrowsPlz(2);
  } },
  {selector: '.hero-item-blank.projects', offset: 450, callback: function() {
    lightUpArrowsPlz(3);
  } }
];
Materialize.scrollFire(options);

});
</script>
@stop
