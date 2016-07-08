@extends("layouts/default")

@section("head")
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
      <h4 class="lightblue-theme-text">LET'S CREATE YOUR ACCOUNT.</h4>
    </div>
  </div>

  <div class="container">
	<div class="row">
		<div class="col offset-m3 m6 s12 signup-box">
		    	<form class="signin-form" method="POST" action="{{url('/signup')}}">
                    {!! csrf_field() !!}

		    		<div class="input-field center">
		    			<input class="input-box" type="text" placeholder="Email Address" style="width:97%">
		    		</div>

		    		<div class="input-field center">
		    			<input class="input-box" type="password" placeholder="Password" style="width:97%">
		    		</div>

		    		<div class="input-field center">
		    			<input class="input-box" type="password" placeholder="Confirm Password" style="width:97%">
		    		</div>

		    		<div class="input-field center">
		    			<button class="btn btn-theme btn-fat full-width">SIGN UP</button>
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