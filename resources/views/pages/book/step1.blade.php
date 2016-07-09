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
        <div class="determinate" style="width: 0%"></div>
      </div>
    </div>
  </div>

  <div class="container">
     <div class="row">
       <form class="contact-form col s12">
         <div class="row">
           <div class="input-field col s12">
              <input id="appointmentdate" name="date" type="date" class="input-box datepicker" placeholder="Select Date" data-parsley-required="true" data-parsley-trigger="change">
           </div>
           <div class="input-field col s12">
            <select class="input-select-border" data-parsley-required="true" data-parsley-trigger="change">
              <option value="" disabled selected>Select Arrival Time</option>
              <option value="1">Option 1</option>
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
            </select>
           </div>
           <div class="input-field col s12">
            <select class="input-select-border" data-parsley-required="true" data-parsley-trigger="change">
              <option value="" disabled selected>Service Type</option>
              <option value="1">Option 1</option>
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
            </select>
           </div>
           <div class="input-field col s12 m6">
             <select class="input-select-border" data-parsley-required="true" data-parsley-trigger="change">
               <option value="" disabled selected>A/C Type</option>
               <option value="1">Option 1</option>
               <option value="2">Option 2</option>
               <option value="3">Option 3</option>
             </select>
           </div>
           <div class="input-field col s12 m6">
              <input name="email" class="input-box" type="text" placeholder="Qty" data-parsley-required="true" data-parsley-trigger="change">
           </div>
           <div class="input-field col s12">
              <textarea class="materialize-textarea" type="text" placeholder="Additional Notes" data-parsley-required="true" data-parsley-trigger="change"></textarea>
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
"use strict";
$(document).ready(function() {
  $.when($('select').material_select()).done(function(e) {
    $('.select-wrapper span.caret').html('<i class="icon-aieicons-downarrow grey-theme-text"></i>');
  });

/*  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    closeOnSelect: true
  });*/

  var sdatepicker = $('#appointmentdate').pickadate().pickadate('picker');
  sdatepicker.set('min', moment().add(3, 'days').toDate());
  sdatepicker.on('set', function(context) {
    if (context.select != undefined)
    {
      sdatepicker.close();
    }
  })

  $('select').on('change', function() {
    $(this).siblings(".select-dropdown").addClass("grey-theme-text");
  });
});
</script>
@stop
