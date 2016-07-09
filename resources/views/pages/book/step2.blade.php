@extends("layouts/default")

@section("head")
<style>
.progress-bar {
  text-align: center;
}
</style>

@endsection

@section("content")
<main>
  <div class="container">
    <div class="row">
      <h4 class="faq-header">BOOK AN APPOINTMENT</h4>
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
      <div class="container" style="width: 80%">
        <div class="col s12 rbtn-toggle">
          <p>
            <input id="location-type-residential" name="location-type" type="radio" checked/>
            <label for="location-type-residential">Residential</label>
          </p>
          <p>
            <input id="location-type-business" name="location-type" type="radio" />
            <label for="location-type-business">Business</label>
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
     <div class="row">
       <form class="contact-form col s12">
         <div class="row">
           <div class="input-field col s12">
              <input class="input-box" type="text" placeholder="Name" data-parsley-required="true" data-parsley-trigger="change">
           </div>
           <div class="input-field col s12 m6">
             <input class="input-box" type="text" placeholder="Contact No." data-parsley-required="true" data-parsley-trigger="change" data-parsley-pattern="^[\d\+\-\.\(\)\/\s]*$">
           </div>
           <div class="input-field col s12 m6">
             <input class="input-box" type="email" placeholder="Email" data-parsley-required="true" data-parsley-trigger="change">
           </div>
           <div class="input-field col s12">
              <input class="input-box" type="text" placeholder="Address Line" data-parsley-required="true" data-parsley-trigger="change">
           </div>
           <div class="input-field col s12">
              <input class="input-box" type="text" placeholder="Postal Code" data-parsley-required="true" data-parsley-trigger="change">
           </div>
           <div class="input-field col s12">
            <select class="input-select-border" data-parsley-required="true" data-parsley-trigger="change">
              <option value="" disabled selected>Building Type</option>
              <option value="1">Option 1</option>
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
            </select>
           </div>
           <div class="input-field col s12">
             <input type="checkbox" id="diffBillingAddress" />
             <label for="diffBillingAddress">Different Billing Address?</label>
           </div>
           <div class="input-field col s12 center">
              <button class="btn btn-theme btn-fat" type="submit">NEXT STEP ></button>
           </div>
         </div>
       </form>
     </div>
  </div>
</main>
@stop

@section("scripts")
<script>
$(document).ready(function() {
  $.when($('select').material_select()).done(function(e) {
    $('.select-wrapper span.caret').html('<i class="icon-aieicons-downarrow grey-theme-text"></i>');
  });

  $('select').on('change', function() {
    $(this).siblings(".select-dropdown").addClass("grey-theme-text");
  });
});
</script>
@stop
