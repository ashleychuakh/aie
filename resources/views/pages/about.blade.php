@extends("layouts/default")

@section("head")
<title>Meggnify</title>
<style>
header {
  z-index: 1000;
}

.purple-header {
  color: #808aa3;
}

.blue-text {
  color: #3d99;
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
      <img id="about-header-img" src="/assets/img/about/about-banner.jpg">
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
    autoplay: false
  });
});
</script>
@stop
