@extends("layouts/default")

@section("head")
<style>
.forgetpass-l{
  display:block;
  margin-top:-50px;
  margin-right: 10px;
  text-align: left;
  color:#808aa3;
  text-decoration: underline;
  cursor: pointer;
  z-index: 100;
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
		    	<form class="signin-form">
		    		<!-- {!! csrf_field() !!} -->
		    		<div class="input-field center">
		    			<input class="input-box" type="text" placeholder="Email Address" style="width:97%">
		    		</div>

		    		<div class="input-field center">
		    			<input class="input-box" type="password" placeholder="Password" style="width:97%">
		    			<a href="#" class="right forgetpass-l">Forget Password?</a>
		    		</div>

		    		<div class="input-field center">
		    			<button class="btn btn-theme btn-fat full-width">SIGN IN</button>
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