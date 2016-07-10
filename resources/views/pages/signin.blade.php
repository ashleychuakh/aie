@extends("layouts/default")

@section("head")
<title>AIE SG | Sign In</title>
<style>
.forgetpass-l{
  text-decoration: underline;
  position: absolute;
  top: 14px;
  right: 20px;
  color:#808aa3;
}
</style>
@endsection

@section("content")
<main>
	<div class="blank-hero">
    <div class="hero-text">
      <h4 class="lightblue-theme-text">ACCOUNT</h4>
    </div>
  </div>

    <div class="container">
	    <div class="row">
		    <div class="col offset-m3 m6 s12 signin-box">
		    	<form id="signin" class="signin-form" method="post">
		    		<div class="input-field center">
		    			<input id="email" name="username" class="input-box" type="text" placeholder="Email Address" data-parsley-required="true" data-parsley-trigger="change">
		    		</div>

		    		<div class="input-field center">
		    			<input id="password" name="password" class="input-box" type="password" placeholder="Password" data-parsley-required="true" data-parsley-trigger="change" data-parsley-minlength="8">
		    			<a href="#" class="forgetpass-l">Forget Password?</a>
		    		</div>

		    		<div class="input-field center">
		    		 	{!! csrf_field() !!}
		    			<button class="btn btn-theme btn-fat full-width" type="submit">SIGN IN</button>
		    		</div>

		    		<div class="input-field center divider-text" style="">
		    			Dont have an account? <a href="{{url('/signup')}}">Sign up</a>
		    			<p class="line"> OR </p>
		    		</div>

			    	<div class="input-field center login-social-box ">
			    		<a href="#" class="login-social-text ">
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
  $('#signin').parsley({
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