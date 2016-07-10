@extends("layouts/default")

@section("head")
<title>AIE SG | Book | Address</title>
<style>
.progress-bar {
  text-align: center;
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
      <div class="col s12">
        <form id="book-address" class="contact-form" method="post">
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

            <div class="input-field col s12 mbtm20 mtop0">
             <input id="billing-check" name="billing-check" type="checkbox" value="yes">
             <label for="billing-check">Different Billing Address?</label>
            </div>

            <div id="billing" class="hidden hidden-billing full-width">
             <h6 class="lightblue-theme-text center">BILLING ADDRESS</h6>
             <div class="input-field col s12">
                <input id="billing-name" name="billing-name" class="input-box" type="text" placeholder="Name" data-parsley-required="true" data-parsley-trigger="change" disabled>
             </div>
             <div class="input-field col s12 m6">
               <input id="billing-phone" name="billing-phone" class="input-box" type="text" placeholder="Contact No." data-parsley-required="true" data-parsley-trigger="change" data-parsley-pattern="^[\d\+\-\.\(\)\/\s]*$" disabled>
             </div>
             <div class="input-field col s12 m6">
               <input id="billing-email" name="billing-email" class="input-box" type="email" placeholder="Email" data-parsley-required="true" data-parsley-trigger="change" disabled>
             </div>
             <div class="input-field col s12">
                <input id="billing-address" name="billing-address" class="input-box" type="text" placeholder="Address Line" data-parsley-required="true" data-parsley-trigger="change" disabled>
             </div>
             <div class="input-field col s12">
                <input id="billing-postalcode" name="billing-postalcode" class="input-box" type="text" placeholder="Postal Code" data-parsley-required="true" data-parsley-trigger="change" disabled>
             </div>
             <div class="input-field col s12">
               <select id="billing-buildingtype" name="billing-buildingtype" class="input-select-border" data-parsley-required="true" data-parsley-trigger="change" disabled>
                 <option value="" disabled selected>Building Type</option>
                 <option value="1">Option 1</option>
                 <option value="2">Option 2</option>
                 <option value="3">Option 3</option>
               </select>
             </div>
            </div>

            <div class="input-field col s12 center">
               <button class="btn btn-theme btn-fat" type="submit">NEXT STEP ></button>
            </div>
          </div>
        </form>
      </div>
     </div>
  </div>
</main>
@stop

@section("scripts")
<script>
$(function() {
  $.when($('select').material_select()).done(function(e) {
    $('.select-wrapper span.caret').html('<i class="icon-aieicons-downarrow grey-theme-text"></i>');
  });

  $('select').on('change', function() {
    $(this).siblings(".select-dropdown").addClass("grey-theme-text");
  });

  $('#billing-check').click(function(){
    $('#billing').toggleClass("hidden");
    if($(this).prop('checked') == true)
    {
      enableConditionalForm('billing');
    }
    else
    {
      $('#billing').find('input,select').prop('disabled', true);
    }
    $('#book-address').parsley().destroy();
    initParsley('book-address');
  });

  initParsley('book-address');

  function enableConditionalForm(elementid)
  {
    $('#' + elementid).find('input,select').prop('disabled', false);
    $.when($('#' + elementid).find('select').material_select()).done(function(e) {
      $('#' + elementid).find('.select-wrapper span.caret').html('<i class="icon-aieicons-downarrow grey-theme-text"></i>');
    });
  }

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
});
</script>
@stop
