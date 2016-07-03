@extends("layouts/default")

@section("head")
<title>AIE SG</title>
<style>
header {
  z-index: 1000;
}

.purple-header {
  color: #808aa3;
}

.blue-text {
  color: #3d9ff9;
}

.grey-text {
  color: #7f8c8d;
  text-align: left;
}

#about-header-img {
  width: 100%;
  height: 720px;
  background-size: cover;
  background-image: url('/assets/img/about/about-banner.jpg');
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

.hero-item-blank .item-text-small p{
  color: #3D9FF9;
  text-transform: uppercase;
  font-size: 1.2em;
  text-align: left;
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

.hero-item-blank .owl-carousel .owl-item .about img {
  width: 150px;
  height: 80px;
  margin: 0 auto;
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

.hero-item-blank .owl-carousel .owl-item img {
  margin: 0 auto;
}

.hero-item-blank .owl-carousel .owl-item h5 {
  color: #828284;
  font-weight: 300;
}

.hero-item-blank .owl-carousel .owl-item p {
  color: #3D9FF9;
  font-family: Arial, sans-serif;
}

.slider-projects {
  background-color: #676767;
}

.slider-projects-header {
  color: #fff;
  font-size: 1.4em;
  text-transform: uppercase;
}

.slider-projects-subs {
  color: #fff;
  font-size: 1.0em;
  text-transform: uppercase;
}

.prev {
  color: white;
  cursor: pointer;
}
.next {
  color: white;
  cursor: pointer;
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

</style>
<link type="text/css" rel="stylesheet" href="/assets/css/owl.carousel.css" />
<link type="text/css" rel="stylesheet" href="/assets/css/owl.theme.default.min.css" />
@stop

@section("content")
<main>
  <div class="hero" style="background: #fff;">
    <div class="hero-text purple-header">
      <h1>ABOUT US</h1>
      <p class="blue-text">afasdfasfasfdasfdasfasdfasdfsfsafasdf</p>
    </div>
    <div>
      <div id="about-header-img"></div>
    </div>
  </div>
  <div class="hero-item-blank">
    <div class="container">
      <div class="item-text-small">
        <div class="row" style="text-align: left">
          <div class="col s12">
            <p style="font-size: 1.3em;">OUR MISSION & VISION</p>
          </div>
          <div class="col s12 m5">
            <img class="responsive-img service-img-2" src="http://placehold.it/400x250">
          </div>
          <div class="col s12 m7">
            <div class="grey-text" style="font-size: 1.1em">Lorem ipsum dolor sit amet, an phaedrum dissentiet per, ad viris dolore denique ius. Sea dicant assueverit id, mel eruditi labores cu. Ea commodo corpora intellegebat cum. Nec te mazim euismod sapientem, vide illud id est.</div>
            <br/>
            <p><i class="fa fa-1x margin-right-5 fa-check ticks grey-text" aria-hidden="true"></i> WE OFFER QULITY WORK</p>
            <p><i class="fa fa-1x margin-right-5 fa-check ticks grey-text" aria-hidden="true"></i> TEST & INSPECT BEFORE START WORK</p>
            <p><i class="fa fa-1x margin-right-5 fa-check ticks grey-text" aria-hidden="true"></i> WE KEEP YOUR HOME COOL</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="hero-item-blank">
    <div class="container">
      <div id="owl-item-projects" class="owl-carousel">
        <div class="item">
          <div class="row valign-wrapper slider-projects">
            <div class="col s12 m5 valign">
              <div class="slider-projects-header">Project One</div>
              <br/>
              <div class="slider-projects-subs">Fat</div>
              <br/>
              <i class="material-icons medium prev">chevron_left</i>
              <i class="material-icons medium next">chevron_right</i>
            </div>
            <div class="col s12 m7">
              <img class="responsive-img" src="http://placehold.it/270x150">
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
              <img class="responsive-img" src="http://placehold.it/270x150">
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
              <img class="responsive-img" src="http://placehold.it/270x150">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="hero-item-blank">
    <div class="container">
      <div class="item-text">
        <p class="grey-text" style="text-align:center; font-size: 1.3em;">OUR CLIENTS</p><br/>
      </div>
      <div id="owl-item" class="owl-carousel owl-theme">
        <div class="item about">
          <img alt="Client Name" src="http://placehold.it/250x150">
        </div>
        <div class="item about">
          <img alt="Client Name" src="http://placehold.it/250x150">
        </div>
        <div class="item about">
          <img alt="Client Name" src="http://placehold.it/250x150">
        </div>
        <div class="item about">
          <img alt="Client Name" src="http://placehold.it/250x150">
        </div>
        <div class="item about">
          <img alt="Client Name" src="http://placehold.it/250x150">
        </div>
        <div class="item about">
          <img alt="Client Name" src="http://placehold.it/250x150">
        </div>
      </div>
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
    items:4,
    margin:10,
    loop: true,
    dots: true,
    autoplay: false
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
