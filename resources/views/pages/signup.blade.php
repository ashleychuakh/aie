@extends("layouts/default")

@section("head")
<title>AIE SG | Sign Up</title>
<style>
.signup-subtext{
	width:80%;
	text-align: center;
	margin: 0 auto;
}
</style>
@stop 

@section("content")
<main>
  <div class="blank-hero">
    <div class="hero-text">
      <h4 class="lightblue-theme-text">LET'S CREATE YOUR ACCOUNT</h4>
    </div>
  </div>

  <div class="container">
	<div class="row">
		<div class="col offset-m3 m6 s12 signup-box">
	    	<form id="signup" class="signin-form" method="post">

	    		<div class="input-field center">
	    			<input id="email" name="email" class="input-box" type="email" placeholder="Email Address" data-parsley-required="true" data-parsley-trigger="change">
	    		</div>

	    		<div class="input-field center">
	    			<input id="password" name="password" class="input-box" type="password" placeholder="Password" data-parsley-required="true" data-parsley-trigger="change" data-parsley-minlength="8">
	    		</div>

	    		<div class="input-field center">
	    			<input id="password_confirmation" name="password_confirmation" class="input-box" type="password" placeholder="Confirm Password" data-parsley-required="true" data-parsley-trigger="change" data-parsley-equalto="#password">
	    		</div>

	    		<div class="input-field center">
	            	{!! csrf_field() !!}
	    			<button class="btn btn-theme btn-fat full-width" type="submit">SIGN UP</button>
	    		</div>

	    		<div class="input-field center divider-text" style="">
	    			<p class="signup-subtext">By continuing, you agree to the <a href="#">T&C</a> and <a href="#">Privacy Policy</a>. Already have an account? <a href="{{url('/signin')}}">Log in.</a> </p>
	    			<p class="line"> OR </p>
	    		</div>

		    	<div class="input-field center login-social-box ">
		    		<a href="#" class="login-social-text">
		    			<img src="/assets/img/facebook.png" class="login-img">
		    			Log in with Facebook
		    		</a>
		    	</div>

		    	<div class="input-field center login-social-box ">
		    		<a href="#" class="login-social-text ">
		    			<img src="/assets/img/google.png" class="login-img">
		    			Log in with Google
		    		</a>
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
  $('#signup').parsley({
      successClass: 'valid',
      errorClass: 'invalid',
      errorsContainer: function (velem) {
        var $errelem = velem.$element.siblings('label');
        $errelem.attr('data-error', window.Parsley.getErrorMessage(velem.validationResult[0].assert));
        return true;
      },
      errorsWrapper: '',
      errorTemplate: ''
    });
});
</script>
@stop