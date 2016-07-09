@extends("layouts/default")

@section("head")
<style>
.section {
  position: relative;
  margin-bottom: 20px;
}
.edit-section {
  position: absolute;
  top: 20px;
  right: 0;
  font-size: 2.1em;
}
.booking-subheader {
  font-size: 1.2em;
  display: block;
  margin-top: 30px;
}
.divider {
  background-color: #808aa3;
  height: 2px;
  margin: 20px 0;
}
.dinline-block {
  display: inline-block;
}
</style>

@endsection

@section("content")
<main>
  <div class="container">
    <div class="row">
      <h4 class="faq-header" style="font-weight:300">BOOK AN APPOINTMENT</h4>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col s4 m4 l4 progress-bar">
        STEP 1: BOOKING
      </div>
      <div class="col s4 m4 l4 progress-bar">
        STEP 2: YOUR INFO
      </div>
      <div class="col s4 m4 l4 progress-bar">
        STEP 3: CONFIRMATION
      </div>
      <br/>
      <div class="progress">
        <div class="determinate" style="width: 100%"></div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="contact-form">
        <form >
          <h5>1. BOOKING</h5>
          <div class="section">
            <div class="booking-details">
              <p class="lightblue-theme-text">DATE AND TIME: Tuesday, 2 June At 14:00</p>
              <p class="lightblue-theme-text">SERVICE TYPE: Cleaning</p>
            </div>
            <a class="edit-section" href=""><i class="icon-aieicons-editbutton grey-theme-text"></i></a>
          </div>
          <div class="divider"></div>
          <h5>2. YOUR INFO</h5>
          <div class="section">
            <span class="booking-subheader">BILLING ADDRESS</span>
            <div class="booking-billingaddress">
              <p class="lightblue-theme-text">NAME: Mr Ryan Hu</p>
              <p class="dinline-block lightblue-theme-text">CONTACT NUMBER: 8100 455</p>
              <p class="dinline-block mleft30 lightblue-theme-text">EMAIL: ryan213@gmail.com</p>
              <p class="lightblue-theme-text">ADDRESS: 450 HilView Rise</p>
              <p class="lightblue-theme-text">BUILDING TYPE: Residential</p>
            </div>
            <a class="edit-section" href=""><i class="icon-aieicons-editbutton grey-theme-text"></i></a>
          </div>
          <div class="section">
            <span class="booking-subheader">SERVICE ADDRESS</span>
            <div class="booking-serviceaddress">
              <p class="lightblue-theme-text">NAME: Mr Ryan Hu</p>
              <p class="dinline-block lightblue-theme-text">CONTACT NUMBER: 8100 455</p>
              <p class="dinline-block mleft30 lightblue-theme-text">EMAIL: ryan213@gmail.com</p>
              <p class="lightblue-theme-text">ADDRESS: 450 HilView Rise</p>
              <p class="lightblue-theme-text">BUILDING TYPE: Residential</p>
            </div>
            <a class="edit-section" href=""><i class="icon-aieicons-editbutton grey-theme-text"></i></a>
          </div>
          <div class="container-fluid">
            <div class="row">
              <div class="contact-map">
                <img src="/assets/img/gray-google-map.jpg" style="width:100%">
              </div>
            </div>
          </div>

          <div class="form-group center">
            <button class="btn btn-theme contact-submit"> CONFIRM BOOKING </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>
@stop

@section("scripts")
<script>
$(document).ready(function() {
  $('select').material_select();


});
</script>
@stop
