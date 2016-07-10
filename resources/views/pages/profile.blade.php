@extends("layouts/default")

@section("head")
<title>AIE SG | Profile</title>
<style>
</style>
@stop 

@section("content")
<main>
  <div class="blank-hero">
    <div class="hero-text">
      <h4 class="lightblue-theme-text">UPDATE ACCOUNT</h4>
    </div>
  </div>

  <div class="container">
	<div class="row">
		<div class="col offset-m3 m6 s12 signup-box">
	    	<form id="profile" class="signin-form" method="post">
	    		<div class="row">
	    			<div class="input-field col s12">
	    				<input id="name" name="name" class="input-box" type="text" placeholder="{{ empty($account->name) ? 'Name' : $account->name }}" value="{{ $account->name }}" data-parsley-required="true" data-parsley-trigger="change">
	    			</div>
	    			<div class="input-field col s12">
	    				<input id="email" name="email" class="input-box" type="text" placeholder="{{ empty($account->email) ? 'Email' : $account->email }}" value="{{ $account->email }}" data-parsley-required="true" data-parsley-trigger="change">
	    			</div>
	    			<div class="input-field col s12">
						<input id="phone" name="phone" class="input-box" type="text" placeholder="{{ empty($account->phone) ? 'Phone' : $account->phone }}" value="{{ $account->phone }}" data-parsley-required="true" data-parsley-trigger="change" data-parsley-pattern="^[\d\+\-\.\(\)\/\s]*$">
					</div>
	    			<div class="input-field col s12">
	    				<input id="password" name="password" class="input-box" type="password" placeholder="Password" data-parsley-required="true" data-parsley-trigger="change" data-parsley-minlength="8">
	    			</div>
	    			<div class="input-field col s12">
	    				<input id="password_confirmation" name="password_confirmation" class="input-box" type="password" placeholder="Password Confirmation" data-parsley-required="true" data-parsley-trigger="change" data-parsley-equalto="#password">
	    			</div>
					<div class="col s12 rbtn-toggle">
					  <p>
					    <input id="location-type-residential" name="type" type="radio" value="residential" @if(isset($account->type)) @if(empty($account->type)) checked @else @if ($account->type == "residential") checked @endif @endif @endif data-parsley-required="true" data-parsley-trigger="change">
					    <label for="location-type-residential">Residential</label>
					  </p>
					  <p>
					    <input id="location-type-business" name="type" type="radio" value="business" @if(isset($account->type)) @if ($account->type == "business") checked @endif @endif data-parsley-required="true" data-parsley-trigger="change">
					    <label for="location-type-business">Business</label>
					  </p>
					</div>
					<div class="input-field col s12">
					   <input id="address-name" name="address-name" class="input-box" type="text" placeholder="{{ empty($defaultaddress->name) ? 'Name' : $defaultaddress->name }}" value="{{ $defaultaddress->name }}" data-parsley-required="true" data-parsley-trigger="change">
					</div>
					<div class="input-field col s12 m6">
					  <input id="address-phone" name="address-phone" class="input-box" type="text" placeholder="{{ empty($defaultaddress->phone) ? 'Contact No.' : $defaultaddress->phone }}" value="{{ $defaultaddress->phone }}" data-parsley-required="true" data-parsley-trigger="change" data-parsley-pattern="^[\d\+\-\.\(\)\/\s]*$">
					</div>
					<div class="input-field col s12 m6">
					  <input id="address-email" name="address-email" class="input-box" type="email" placeholder="{{ empty($defaultaddress->email) ? 'Email' : $defaultaddress->email }}" value="{{ $defaultaddress->email }}" data-parsley-required="true" data-parsley-trigger="change">
					</div>
					<div class="input-field col s12">
						<input id="address" name="address" class="input-box" type="text" placeholder="{{ empty($defaultaddress->address) ? 'Address' : $defaultaddress->address }}" value="{{ $defaultaddress->address }}" data-parsley-required="true" data-parsley-trigger="change">
					</div>
					<div class="input-field col s12">
						<input id="postalcode" name="postalcode" class="input-box" type="text" placeholder="{{ empty($defaultaddress->postalcode) ? 'Postal Code' : $defaultaddress->postalcode }}" value="{{ $defaultaddress->postalcode }}" data-parsley-required="true" data-parsley-trigger="change">
					</div>
					<div class="input-field col s12">
						<select id="buildingtype" name="buildingtype" class="input-select-border" data-parsley-required="true" data-parsley-trigger="change">
							<option value="" disabled selected>Building Type</option>
							<option value="1" @if(isset($defaultaddress->buildingtype)) @if($defaultaddress->buildingtype == "1") selected @endif @endif>Option 1</option>
							<option value="2" @if(isset($defaultaddress->buildingtype)) @if($defaultaddress->buildingtype == "2") selected @endif @endif>Option 2</option>
							<option value="3" @if(isset($defaultaddress->buildingtype)) @if($defaultaddress->buildingtype == "3") selected @endif @endif>Option 3</option>
						</select>
					</div>

					<div class="input-field col s12 mbtm20 mtop0">
						<input id="billing-check" name="billing-check" type="checkbox" value="yes">
						<label for="billing-check">Different Billing Address?</label>
					</div>

					<!-- Billing form -->
					<div id="billing" class="hidden hidden-billing full-width" >
						<h6 class="lightblue-theme-text center">BILLING ADDRESS</h6>
						<div class="input-field col s12">
						   <input id="billing-name" name="billing-name" class="input-box" type="text" placeholder="{{ empty($billingaddress->name) ? 'Name' : $billingaddress->name }}" value="{{ $billingaddress->name }}" data-parsley-required="true" data-parsley-trigger="change" disabled>
						</div>
						<div class="input-field col s12 m6">
						  <input id="billing-phone" name="billing-phone" class="input-box" type="text" placeholder="{{ empty($billingaddress->phone) ? 'Contact No.' : $billingaddress->phone }}" value="{{ $billingaddress->phone }}" data-parsley-required="true" data-parsley-trigger="change" data-parsley-pattern="^[\d\+\-\.\(\)\/\s]*$" disabled>
						</div>
						<div class="input-field col s12 m6">
						  <input id="billing-email" name="billing-email" class="input-box" type="email" placeholder="{{ empty($billingaddress->email) ? 'Email' : $billingaddress->email }}" value="{{ $billingaddress->email }}" data-parsley-required="true" data-parsley-trigger="change" disabled>
						</div>
						<div class="input-field col s12">
						   <input id="billing-address" name="billing-address" class="input-box" type="text" placeholder="{{ empty($billingaddress->address) ? 'Address' : $billingaddress->address }}" value="{{ $billingaddress->address }}" data-parsley-required="true" data-parsley-trigger="change" disabled>
						</div>
						<div class="input-field col s12">
						   <input id="billing-postalcode" name="billing-postalcode" class="input-box" type="text" placeholder="{{ empty($billingaddress->postalcode) ? 'Postal Code' : $billingaddress->postalcode }}" value="{{ $billingaddress->postalcode }}" data-parsley-required="true" data-parsley-trigger="change" disabled>
						</div>
						<div class="input-field col s12">
							<select id="billing-buildingtype" name="billing-buildingtype" class="input-select-border" data-parsley-required="true" data-parsley-trigger="change" disabled>
								<option value="" disabled selected>Building Type</option>
								<option value="1" @if(isset($billingaddress->buildingtype)) @if($billingaddress->buildingtype == "1") selected @endif @endif>Option 1</option>
								<option value="2" @if(isset($billingaddress->buildingtype)) @if($billingaddress->buildingtype == "2") selected @endif @endif>Option 2</option>
								<option value="3" @if(isset($billingaddress->buildingtype)) @if($billingaddress->buildingtype == "3") selected @endif @endif>Option 3</option>
							</select>
						</div>
					</div>
					<div class="input-field col s12 center">
	            		{!! csrf_field() !!}
						<button class="btn btn-theme btn-fat full-width" type="submit">UPDATE</button>
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
	  $(this).siblings('.select-dropdown').addClass('grey-theme-text');
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
	    $('#profile').parsley().destroy();
		initParsley('profile');
    });

	@if(isset($defaultaddress->buildingtype))
		$('select').siblings('.select-dropdown').addClass('grey-theme-text');
	@endif

	@if(isset($billingaddress) && !empty($billingaddress->name))
		$('#billing-check').prop('checked', true);
        $("#billing").toggleClass('hidden');
    	enableConditionalForm('billing');
    	$('#billing').find('select').siblings('.select-dropdown').addClass('grey-theme-text');
	@endif

	initParsley('profile');

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