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
      <h1 class="grey-theme-text">ABOUT US</h1>
      <p class="lightblue-theme-text">afasdfasfasfdasfdasfasdfasdfsfsafasdf</p>
    </div>
    <div>
      <div id="about-header-img"></div>
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
            <p class="lightblue-theme-text"><i class="fa fa-1x margin-right-5 fa-check ticks grey-text" aria-hidden="true"></i> WE OFFER QUALITY WORK</p>
            <p class="lightblue-theme-text"><i class="fa fa-1x margin-right-5 fa-check ticks grey-text" aria-hidden="true"></i> TEST & INSPECT BEFORE START WORK</p>
            <p class="lightblue-theme-text"><i class="fa fa-1x margin-right-5 fa-check ticks grey-text" aria-hidden="true"></i> WE KEEP YOUR HOME COOL</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="hero-item-blank projects">
    <div class="container">
      <div id="owl-item-projects" class="owl-carousel">
        <div class="item">
          <div class="row valign-wrapper slider-projects">
            <div class="col s12 m5 valign">
              <div class="slider-projects-header">Project One</div>
              <br/>
              <div class="slider-projects-subs">Fat</div>
              <br/>
              <i class="icon-aieicons-leftarrow prev"></i>
              <i class="icon-aieicons-rightarrow next"></i>
            </div>
            <div class="col s12 m7">
              <img class="responsive-img" src="http://placehold.it/1280x720">
            </div>
          </div>
        </div>
        <div class="item">
          <div class="row valign-wrapper slider-projects">
            <div class="col s12 m5 valign">
              <div class="slider-projects-header">Project Two</div>
              <br/>
              <div class="slider-projects-subs">Fat</div>
              <br/>
              <i class="material-icons medium prev">chevron_left</i>
              <i class="material-icons medium next">chevron_right</i>
            </div>
            <div class="col s12 m7">
              <img class="responsive-img" src="http://placehold.it/1280x720">
            </div>
          </div>
        </div>
        <div class="item">
          <div class="row valign-wrapper slider-projects">
            <div class="col s12 m5 valign">
              <div class="slider-projects-header">Project Three</div>
              <br/>
              <div class="slider-projects-subs">Fat</div>
              <br/>
              <i class="material-icons medium prev">chevron_left</i>
              <i class="material-icons medium next">chevron_right</i>
            </div>
            <div class="col s12 m7">
              <img class="responsive-img" src="http://placehold.it/1280x720">
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
          <img src="http://placehold.it/320x150">
        </div>
        <div class="item">
          <img src="http://placehold.it/320x150">
        </div>
        <div class="item">
          <img src="http://placehold.it/320x150">
        </div>
        <div class="item">
          <img src="http://placehold.it/320x150">
        </div>
        <div class="item">
          <img src="http://placehold.it/320x150">
        </div>
        <div class="item">
          <img src="http://placehold.it/320x150">
        </div>
      </div>
    </div>
  </div>
  <div class="hero-item-1">
    <div class="parallax-container">
      <div class="parallax"><img src="/assets/img/main/hero-item-1.jpg"></div>
        <h3>The Facts</h3>
        <div class="container mtop70">
          <div class="row no-margin">
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
  $('#owl-hero').owlCarousel({
    items:1,
    margin:10,
    loop: true,
    dots: true,
    autoplay: true
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
          items:1,
          nav:false
        },
        600:{
          items:3,
          nav:false
        },
        1000:{
          items:5,
          nav:true,
          loop:false
        }
      }
  });

  $('#owl-item-projects').owlCarousel({
    items:1,
    margin:10,
    loop: true,
    dots: true,
    autoplay: false
  });

$('.parallax').parallax();

  var owl = $('#owl-item-projects');
  $(".next").click(function(){
    owl.trigger('next.owl.carousel');
  })
  $(".prev").click(function(){
    owl.trigger('prev.owl.carousel');
  })
});
</script>
@stop
