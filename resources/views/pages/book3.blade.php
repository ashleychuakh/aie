@extends("layouts/default")

@section("head")
<style>
.contact-ta{
  height:100px;
  padding:10px;
  width:102%;
  border: thin solid #808aa3;
}
input.contact-input{
  border: thin solid #808aa3;
  padding:5px 10px;
  margin-bottom: 18px;
}

.aieDropDownList{
  border: thin solid #808aa3;
  padding:0px 10px;
  margin-bottom: 18px;
}

.progress-bar {
  text-align: center;
}

.select-wrapper input.select-dropdown {
  border-bottom: none;
  margin: 5px 0;
}

.tabs .tab a {
  color: #3d9ff9;
}
.tabs .tab a:hover {
  color: #bdc3c7;
}

.book-btn {
  margin-bottom: 50px;
  background-color: #fff;
  border-style: solid;
  border-width: 2px;
  border-radius: 0px;
  box-shadow: none;
  color: #3d9ff9;
  border-color: #3d9ff9;
}

.book-btn a.active {
  margin-bottom: 50px;
  background-color: #3d9ff9;
  color: #fff;
}

.tabs .indicator {
  display: none;
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
          <div class="section">
            <h5>1. BOOKING</h5>
            <br/><br/>
            <div class="lightblue-theme-text">
              DATE AND TIME: Tuesday, 2 June At 14:00
              <br/><br/>
              SERVICE TYPE: Cleaning
            </div>
          </div>
          <div class="divider"></div>
          <div class="section">
            <h5>2. YOUR INFO</h5>
            <br/><br/>
            <div style="font-size: 1.2rem">BILLING ADDRESS</div>
            <div class="lightblue-theme-text">
              NAME: Mr Ryan Hu
              <br/><br/>
              CONTACT NUMBER: 8100 455
              <br/><br/>
              EMAIL: ryan213@gmail.com
              <br/><br/>
              ADDRESS: 450 HilView Rise
              <br/><br/>
              BUILDING TYPE: Residential
            </div>
            <br/><br/>
            <div class="section">
              <div style="font-size: 1.2rem">SERVICE ADDRESS</div>
              <div class="lightblue-theme-text">
                NAME: Mr Ryan Hu
                <br/><br/>
                CONTACT NUMBER: 8100 455
                <br/><br/>
                EMAIL: ryan213@gmail.com
                <br/><br/>
                ADDRESS: 450 HilView Rise
                <br/><br/>
                BUILDING TYPE: Residential
              </div>
            </div>
          </div>
          <div class="container-fluid">
            <div class="row">
              <div class="contact-map">
                <img src="/assets/img/gray-google-map.jpg" style="width:100%">
              </div>
            </div>
          </div>

          <div class="form-group center">
            <button class="btn btn-submit contact-submit"> CONFIRM BOOKING </button>
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
