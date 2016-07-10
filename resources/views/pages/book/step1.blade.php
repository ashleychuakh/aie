@extends("layouts/default")

@section("head")
<title>AIE SG | Book | Details</title>
<style>
.progress-bar {
  text-align: center;
}
.input-righticon{
  font-size: 1.9em;
  position: absolute;
  top: 15%;
  right: 20px;
}
</style>
@endsection

@section("content")
<main>
  <div class="blank-hero">
    <div class="hero-text">
      <h4 class="lightblue-theme-text">BOOK AN APPOINTMENT</h4>
    </div>
  </div>

  <div class="container stage-bar">
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
       <form id="booking-details" method="post">
         <div class="input-field col s12">
            <input id="appointmentdate" name="appointmentdate" type="date" class="input-box datepicker" placeholder="Select Date" data-parsley-required="true" data-parsley-trigger="change">
            <i class="icon-aieicons-calendar input-righticon"></i>
         </div>
         <div class="input-field col s12">
          <select id="arrivaltime" name="arrivaltime" class="input-select-border" data-parsley-required="true" data-parsley-trigger="change">
            <option value="" disabled selected>Select Arrival Time</option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
          </select>
         </div>
         <div class="input-field col s12">
          <select id="servicetype" name="servicetype" class="input-select-border" data-parsley-required="true" data-parsley-trigger="change">
            <option value="" disabled selected>Service Type</option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
          </select>
         </div>
         <div class="input-field col s12 m6">
           <select id="aircontype" name="aircontype" class="input-select-border" data-parsley-required="true" data-parsley-trigger="change">
             <option value="" disabled selected>A/C Type</option>
             <option value="1">Option 1</option>
             <option value="2">Option 2</option>
             <option value="3">Option 3</option>
           </select>
         </div>
         <div class="input-field col s12 m6">
            <input id="quantity" name="quantity" class="input-box" type="text" placeholder="Qty" data-parsley-required="true" data-parsley-trigger="change" data-parsley-type="digits">
         </div>
         <div class="input-field col s12">
            <textarea id="additionalnotes" name="additionalnotes" class="materialize-textarea" type="text" placeholder="Additional Notes" data-parsley-trigger="change"></textarea>
         </div>
         <div class="input-field col s12 center">
            {!! csrf_field() !!}
            <button class="btn btn-theme btn-fat" type="submit">NEXT STEP ></button>
         </div>
       </form>
     </div>
  </div>
</main>
@stop

@section("scripts")
<script>
"use strict";
$(function() {
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

  initParsley('booking-details');

  function initParsley(elementid)
  {
    $('#' + elementid).parsley({
      successClass: 'valid',
      errorClass: 'invalid',
      errorsContainer: function (velem) {
        var $errelem = velem.$element.siblings('label');
        $errelem.attr('data-error', window.Parsley.getErrorMessage(velem.validationResult[0].assert));
        return true;
      },
      errorsWrapper: '',
      errorTemplate: '',
      excluded: ':disabled'
    })
    .on('field:validated', function(velem) {
      
    })
    .on('field:success', function(velem) {
      if (velem.$element.is('select'))
      {
        velem.$element.parent().removeClass('invalid').addClass('valid');
      }
    })
    .on('field:error', function(velem) {
      if (velem.$element.is('select'))
      {
        velem.$element.parent().removeClass('valid').addClass('invalid');
      }
    });
  }

  @if(Session::has('flash_notification.message'))
    Materialize.toast('{{ Session::get('flash_notification.message')}}', 5000, '{{ Session::get('flash_notification.level')}}');
  @endif
});
</script>
@stop
