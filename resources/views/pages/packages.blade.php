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
  <div class="blank-hero">
    <div class="hero-text">
      <h4 class="grey-theme-text">AIRCON CARE PACKAGES</h4>
      <p class="lightblue-theme-text">MAINTENANCE FOR YOUR AIRCON</p>
    </div>
  </div>
    <div class="container">
      <div class="packages-item-container">
        <div class="row mtop30 mbtm30">
          <div class="col l6">
            <div class="package-item pright">
              <p class="item-header">3 times/year (every 4 months)</p>
              <p>$35/unit (wall mounted unit)</p>
              <p>$45/unit (casette unit)</p>
            </div>
          </div>
          <div class="col l6">
            <div class="package-item pleft">
              <p class="item-header">4 times/year (every 3 months)</p>
              <p>$35/unit (wall mounted unit)</p>
              <p>$45/unit (casette unit)</p>
            </div>
          </div>
        </div>
        <div class="row mtop30 mbtm30">
          <div class="col l6">
            <div class="package-item pright">
              <p class="item-header">6 times/year (every 2 months)</p>
              <p>$35/unit (wall mounted unit)</p>
              <p>$45/unit (casette unit)</p>
            </div>
          </div>
          <div class="col l6">
            <div class="package-item pleft">
              <p class="item-header">12 times/year (every 1 month)&nbsp;</p>
              <p>$35/unit (wall mounted unit)</p>
              <p>$45/unit (casette unit)</p>
            </div>
          </div>
        </div>
        <div class="row mtop30 mbtm30">
          <div class="col l6 offset-l3 s12">
            <div class="package-item pcenter">
              <p class="item-header" style="clear: both;">Customise Your Own Package</p>
              <p>Contact Us to customise your own package</p>
            </div>
          </div>
        </div>
      </div>
      <div class="packages-cta-container">
        <div class="row">
          <div class="col l9 offset-l1 s12">
            <ul>
              <li>$15 transportation charge will be waived for packages</li>
              <li>Free 2 year warranty extension upon signing up for an Aircon Care Package, only applicable if installation is done by our quality installation team. <a href="">Terms & Conditions</a> apply.</li>
              <li>Prices applicable for HDB and private residential only. For commercial clients please <a href="">Contact Us</a></li>
            </ul>
          </div>
          <div class="col s12">
            <a class="btn btn-theme btn-table-fat">Book Package</a>
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
  $('.owl-carousel').owlCarousel({
      items: 1,
      margin: 10,
      loop: true,
      dots: true,
      autoplay: false,
      slideBy: 3
  });
});
</script>
@stop
