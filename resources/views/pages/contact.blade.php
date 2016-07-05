@extends("layouts/default")

@section("head")
<style>
.map-responsive{
    overflow: hidden;
    position: relative;
    height: 500px;
}
.map-responsive iframe{
    left: 0;
    top: 0;
    height: 500px;
    width: 100%;
}
</style>
@endsection

@section("content")
<main>
    <div class="blank-hero">
      <div class="hero-text">
        <h4 class="lightblue-theme-text">CONTACT US</h4>
      </div>
    </div>
    <div class="contact-details container center">
   		<div class="row">
   				<div class="col s4">
                  <i class="icon-aieicons-location"></i>
						<p>FIND US</p>
						<p class="no-margin lightblue-theme-text">Blk 2 Defu Lane 10</p>
                  <p class="no-margin lightblue-theme-text">#04-513 (S) 539183</p>
   				</div>
   				<div class="col s4">
                  <i class="icon-aieicons-phone"></i>
						<p>CALL US</p>
						<p class="no-margin lightblue-theme-text">H: +65 8201 6606</p>
                  <p class="no-margin lightblue-theme-text">F: +65 6288 0270</p>
   				</div>
   				<div class="col s4">
                  <i class="icon-aieicons-email"></i>
						<p>ASK US</p>
						<p class="no-margin lightblue-theme-text">contact@aiesg.com</p>
   				</div>
   		</div>
   	</div>

    <div class="container">
       <div class="row">
         <form class="contact-form col s12">
           <div class="row">
             <div class="input-field col s12">
               <input name="name" class="input-box" type="text" class="validate" placeholder="Name">
             </div>
             <div class="input-field col s12">
               <input name="companyname" class="input-box" type="text" class="validate" placeholder="Company Name">
             </div>
             <div class="input-field col s12 m6">
               <input name="contact" class="input-box" type="text" class="validate" placeholder="Contact No.">
             </div>
             <div class="input-field col s12 m6">
               <input name="email" class="input-box" type="text" class="validate" placeholder="Email">
             </div>
             <div class="input-field col s12">
                   <textarea class="materialize-textarea"  type="text" placeholder="Leave a Message"  rows="5" required></textarea>
                </div>
             <div class="input-field col s12 center">
                <button class="btn btn-theme" type="submit">Send Message</button>
             </div>
           </div>
         </form>
       </div>
    </div>
   	<div class="container-fluid">
      <div id="map"></div>
   	</div>
</main>
@stop

@section("scripts")
<script src="http://maps.google.cn/maps/api/js?key=AIzaSyARpGOa92NMTPq01qT6b7w8lnu5ZXhNLR8&libraries=places" type="text/javascript"></script>
<script>
"use strict"
$(function() {
  initMap();
  function initMap() {
    var map;
    var centerPosition = new google.maps.LatLng(1.3587374, 103.8916353);

    var options = {
        zoom: 16,
        center: centerPosition,
        scrollwheel: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    $('#map').css('width', '100%');
    $('#map').css('height', '450px');

    map = new google.maps.Map($('#map')[0], options);

    var image = {
        url: '/assets/img/marker.png',
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(12, 59)
    };
    var shadow = {
        url: '/assets/img/shadow.png',
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(-2, 36)
    };
    var marker = new google.maps.Marker({
        position: centerPosition,
        map: map,
        icon: image,
        shadow: shadow
    });
  }
});
</script>
@stop