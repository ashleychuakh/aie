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
      <h1 class="grey-theme-text">OUR SERVICES</h1>
      <p class="lightblue-theme-text">ONLY THE HIGHEST QUALITY OF SERVICES FOR YOU</p>
    </div>
    <div>
      <div id="services-header-img"></div>
    </div>
  </div>
  <div class="container mtop50 mbtm50">
    <div class="row">
      <div class="col s12 m5 l4 xl3 service-sidebar">
        <a href="#services" data-toggle="tab">
          <div class="service-single active">
            <img class="grayscale" src="/assets/img/services/general.png">
            <p>General Services &gt;</p>
          </div>
        </a>
        <a href="#chemical" data-toggle="tab">
          <div class="service-single">
            <img class="grayscale" src="/assets/img/services/chemical.png">
            <p>Chemical and Overhauling &gt;</p>
          </div>
        </a>
        <a href="#repairs" data-toggle="tab">
          <div class="service-single">
            <img class="grayscale" src="/assets/img/services/repairs.png">
            <p>Repairs and Replacement &gt;</p>
          </div>
        </a>
        <a href="#troubles" data-toggle="tab">
          <div class="service-single">
            <img class="grayscale" src="/assets/img/services/troubleshooting.png">
            <p>Troubleshooting &gt;</p>
          </div>
        </a>
        <a href="#install" data-toggle="tab">
          <div class="service-single">
            <img class="grayscale" src="/assets/img/services/installation.png"><p>
            <p>Installation &gt;</p>
          </div>
        </a>
        <div class="appointment-cta mtop50">
          <div class="cta-container">
            <p class="cta-header mtop50">ONLINE APPOINTMENT</p>
            <i class="icon-aieicons-ctabookappointment lightblue-theme-text"></i>
            <p class="cta-book">Book your appointment now!</p>
            <a class="btn btn-theme" href="{{ route('book/step1') }}">MAKE APPOINTMENT</a>
          </div>
        </div>
      </div>
      <div class="col s12 m7 l8 xl9 service-content">
        <div class="wrapper">
          <div class="header">
            <img src="/assets/img/services/general.png">
            <h4 class="blue-text">General Service</h4>
          </div>
          <div class="body">
            <img src="http://placehold.it/400x300">
            <p class="mtop30">
              blah balh blah
            </p>
            <div class="table mtop30">
              <div class="row no-margin">
                <div class="col s4 full-border border-bottom-none border-right-none border-left-none border-top-none">
                  <span class="blue-text">Wall mounted-unit:</span>
                </div>
                <div class="col s4 full-border border-bottom-none">
                  <span>9,000bt - 15,000btu ($35/unit)</span>
                </div>
                <div class="col s4 full-border border-left-none border-bottom-none">
                  <span>18,000bt - 26,000btu ($45/unit)</span>
                </div>
              </div>
              <div class="row">
                <div class="col s4 full-border border-right-none border-left-none border-bottom-none">
                  <span class="blue-text">Casette unit:</span>
                </div>
                <div class="col s4 full-border">
                  <span>18,000bt - 26,000btu ($50/unit)</span>
                </div>
                <div class="col s4 full-border border-left-none">
                  <span>36,000bt - 50,000btu ($80/unit)</span>
                </div>
              </div>
            </div>
            <h5 class="mtop30">
              Workmanship warranty: 90 Days
            </h5>
            <p>
              *Prices applicable for HDB and private residential only. For commercial clients please <a href="{{ route('contact') }}">contact us.</a>
            </p>
            <div class="scope mtop30">
              <h5 class="blue-text">Scope of Work</h5>
              <ul>
                <li><i class="icon-aieicons-check"></i>Cleaning of Casing</li>
                <li><i class="icon-aieicons-check"></i>Cleaning of Filters</li>
                <li><i class="icon-aieicons-check"></i>Vaccum Cooling Coil</li>
                <li><i class="icon-aieicons-check"></i>Vaccum Drainage Pipes</li>
                <li><i class="icon-aieicons-check"></i>Cleaning of Blower Wheel</li>
                <li><i class="icon-aieicons-check"></i>Lubricate Moving Parts</li>
                <li><i class="icon-aieicons-check"></i>Vaccum Floor Trap Drainage</li>
                <li><i class="icon-aieicons-check"></i>Transporation Charge ($15/Trip)</li>
              </ul>
            </div>
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
      navText: ['<i class="material-icons medium grey-text text-darken-1">chevron_left</i>', '<i class="material-icons medium grey-text text-darken-1">chevron_right</i>'],
      autoplay: false,
      slideBy: 3
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
