@extends("layouts/default")

@section("head")
<style>
.contact-ta{
  height:100px;
  padding:10px;
  border: thin solid #808aa3;
}

.select-wrapper.input-select-border input {
  border: thin solid #808aa3;
  padding: 0px 10px;
  max-width: calc(100% - 20px);
  color: rgba(0, 0, 0, 0.26);
}

.select-wrapper i {
  font-size: 1.6em;
}

.select-wrapper span {
  color: #808aa3;
}

.progress-bar {
  text-align: center;
}

.select-wrapper span.caret {
  right: 10px;
}
input:not([type]):focus:not([readonly]), input[type=text]:focus:not([readonly]), input[type=password]:focus:not([readonly]), input[type=email]:focus:not([readonly]), input[type=url]:focus:not([readonly]), input[type=time]:focus:not([readonly]), input[type=date]:focus:not([readonly]), input[type=datetime]:focus:not([readonly]), input[type=datetime-local]:focus:not([readonly]), input[type=tel]:focus:not([readonly]), input[type=number]:focus:not([readonly]), input[type=search]:focus:not([readonly]), textarea.materialize-textarea:focus:not([readonly]) {
    border-bottom: thin solid #808aa3;
    box-shadow: none;
    background-color: #f7f7f7;
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
        <div class="determinate" style="width: 0%"></div>
      </div>
    </div>
  </div>

  <div class="container">
     <div class="row">
       <form class="contact-form col s12">
         <div class="row">
           <div class="input-field col s12">
              <input id="appointmentdate" name="date" type="date" class="input-box datepicker" placeholder="Select Date">
           </div>
           <div class="input-field col s12">
            <select class="input-select-border">
              <option value="" disabled selected>Select Arrival Time</option>
              <option value="1">Option 1</option>
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
            </select>
           </div>
           <div class="input-field col s12">
            <select class="input-select-border">
              <option value="" disabled selected>Service Type</option>
              <option value="1">Option 1</option>
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
            </select>
           </div>
           <div class="input-field col s12 m6">
             <select class="input-select-border">
               <option value="" disabled selected>A/C Type</option>
               <option value="1">Option 1</option>
               <option value="2">Option 2</option>
               <option value="3">Option 3</option>
             </select>
           </div>
           <div class="input-field col s12 m6">
             <input name="email" class="input-box" type="text" placeholder="Qty">
           </div>
           <div class="input-field col s12">
                 <textarea class="form-textarea contact-ta" type="text" placeholder="Additional Notes" rows="5" required></textarea>
              </div>
           <div class="input-field col s12 center">
              <button class="btn btn-theme" type="submit">NEXT STEP ></button>
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
