@extends("layouts/default")

@section("head")
<title>AIE SG</title>
<style>

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

.blank-hero .hero-text {
  position: absolute;
  text-align: center;
  z-index: 2;
  width: 100%;
  margin-top: 250px;
}

.blank-hero {
  color: #fff;
  min-height: 380px;
  position: relative;
  bottom: 0%;
  left: 0%;
  height: 100%;
  width: 100%;
  overflow: hidden;
  background: #fff;
  margin-top: -190px;
}

.blank-hero .hero-text p {
  font-family: Arial, sans-serif;
  font-size: 1.2em;
}

.packages-item-container {
  background: #fff;
  width: 100%;
  border-top: 1px solid #828284;
}

.package-item {
  border: 1px solid #828284;
  padding: 40px 70px;
  cursor: pointer;
}

.package-item.pleft {
  margin-left: 0;
  float: left;
}

.package-item.pright {
  margin-right: 0;
  float: right;
}

.package-item.pcenter {
  margin: 0 100px;
}

.package-item:hover {
  background-color: #3d9ff9;
}

.package-item:hover p {
  color: #fff;
}

.package-item p {
  color: #828284;
  font-size: 1.5em;
}

.package-item .item-header {
  color: #3d9ff9;
  clear: both;
}
.packages-cta-container ul {
  margin: 30px;
}
.packages-cta-container ul li {
  list-style-type: disc;
  color: #828284;
}
.packages-cta-container .btn {
  margin: 0 auto;
  padding: 10px 80px;
  font-weight: 300;
  text-transform: uppercase;
}
</style>
<link type="text/css" rel="stylesheet" href="/assets/css/owl.carousel.css" />
<link type="text/css" rel="stylesheet" href="/assets/css/owl.theme.default.min.css" />
@stop

@section("content")
<main>
  <div class="blank-hero">
    <div class="hero-text purple-header">
      <h4>AIRCON CARE PACKAGES</h4>
      <p class="blue-text">MAINTENANCE FOR YOUR AIRCON</p>
    </div>
  </div>
    <div class="container">
      <div class="packages-item-container">
        <div class="row mtop30 mbtm30">
          <div class="col l6">
            <div class="package-item pright">
              <p class="item-header" style="clear: both;">3 times/year (every 4 months)</p>
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
              <p class="item-header" style="clear: both;">6 times/year (every 2 months)</p>
              <p>$35/unit (wall mounted unit)</p>
              <p>$45/unit (casette unit)</p>
            </div>
          </div>
          <div class="col l6">
            <div class="package-item pleft">
              <p class="item-header">12 times/year (every month)</p>
              <p>$35/unit (wall mounted unit)</p>
              <p>$45/unit (casette unit)</p>
            </div>
          </div>
        </div>
        <div class="row mtop30 mbtm30">
          <div class="col l6 offset-l3">
            <div class="package-item pcenter">
              <p class="item-header" style="clear: both;">Customise Your Own Package</p>
              <p>Contact Us to customise your own package</p>
            </div>
          </div>
        </div>
      </div>
      <div class="packages-cta-container">
        <div class="row">
          <div class="col l9 offset-l1">
            <ul>
              <li>$15 transportation charge will be waived for packages</li>
              <li>Free 2 year warranty extension upon signing up for an Aircon Care Package, only applicable if installation is done by our quality installation team. Terms & Conditions apply.</li>
              <li>Prices applicable for HDB and private residential only. For commercial clients please Contact Us</li>
            </ul>
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
