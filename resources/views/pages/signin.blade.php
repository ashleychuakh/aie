@extends("layouts/default")

@section("head")
@endsection

@section("content")
<main>
	<div class="container" style="background: #fff;">
		<div class="row">
		    <h4 class="faq-header" style="font-weight:300">ACCOUNT</h4>
	  </div>
    </div>

    <div class="container">
	    <div class="row">
		    <div class="col offset-m3 m6 signin-box">
		    	<form class="signin-form">
		    		<div class="form-group">
		    			<input class="input-box" type="text" placeholder="Email Address" style="width:97%">
		    		</div>

		    		<div class="form-group">
		    			<input class="input-box" type="password" placeholder="Password" style="width:97%">
		    			<a href="#" class="right forgetpass-l">Forget Password?</a>
		    		</div>

		    		<div class="form-group">
		    			<button class="btn btn-submit contact-submit signin-submit" style="width:100%;">SIGN IN</button>
		    		</div>

		    		<div class="form-group center" style="padding: 15px 0 20px 0; font-weight: 300; font-size:14px;">
		    			Dont have an account? <a href="{{}}">Sign up</a>
		    			<p class="line"> OR </p>
		    		</div>

		    		<div class="form-group login-social-box">
			    		<a href="#" class="login-social-text">
			    			<div class="col s4" style="text-align:right"><img src="/assets/img/facebook.png" style="width:25px; height:25px;">
			    			</div>Log in with Facebook</a>
			    	</div>

		    		<div class="form-group login-social-box">
			    		<a href="#" class="login-social-text">
			    			<div class="col s4" style="text-align:right"><img src="/assets/img/google.png" style="width:25px; height:25px;">
			    			</div>Log in with Google</a>
			    	</div>
		    	</form>
		    </div>
		</div>
	</div>
</main>
@endsection