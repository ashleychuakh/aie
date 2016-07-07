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
  <div class="container" style="background: #fff;">
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
        <div class="determinate" style="width: 50%"></div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col m8 offset-m2">
        <ul class="tabs">
          <li class="tab book-btn"><a class="active" href="#test1">RESIDENTIAL</a></li>
          <li class="tab book-btn"><a href="#test1">BUSINESS</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="contact-form">
      <form >
        <div class="input-field center">
          <input class="contact-input input-box" type="text" placeholder="Name">
        </div>
        <div class="input-field center">
          <div class="input-field col m6">
            <input class="contact-input input-box" type="text" placeholder="Contact No." style="margin-left:-10px">
          </div>
          <div class="input-field col m6">
            <input class="contact-input input-box" type="text" placeholder="Email" style="margin-left:10px">
          </div>
        </div>
        <div class="input-field center">
          <input class="contact-input input-box" type="text" placeholder="Address Line">
        </div>
        <div class="input-field center">
          <input class="contact-input input-box" type="text" placeholder="Postal Code">
        </div>
        <div class="input-field center">
          <select class="aieDropDownList">
            <option value="" disabled selected>Building Type</option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
          </select>
        </div>
        <p>
          <input type="checkbox" id="diffBillingAddress" />
          <label for="diffBillingAddress">Different Billing Address?</label>
        </p>
        <div class="input-field center">
          <button class="btn btn-submit contact-submit"> NEXT STEP </button>
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
