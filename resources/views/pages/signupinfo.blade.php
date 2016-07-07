@extends("layouts/default")

@section("head")
<style>
.select-wrapper input.select-dropdown{
	border-bottom: none;
}
.select-wrapper span.caret{
	padding-right:10px;
}
.tabs .tab a{
	color: #9e9e9e;
}

ul.tabs, li.tab {
    border: thin solid #9e9e9e;
}
.tabs .tab a.active{
	color:#fff;
}
.tabs .tab a:hover, .tabs .tab a:active, .tabs .tab a:focus, .active{
	background-color: #03a9f4;
	color: #fff;
}
.tabs .indicator {
    height: 1px;
    background-color: #fff;
}
.hidden{
	display: none;
}
.hidden-billing{
	margin-top:35px;
}
</style>
@stop 

@section("content")
<main>
	<div class="blank-hero">
		<div class="hero-text">
			<h4 class="lightblue-theme-text">YOUR INFO</h4>
		</div>
	</div>

	<div class="container" style="margin-bottom:30px">
		<div class="row">
			<div class="col offset-m3 m6">
				<ul class="tabs">
				<li class="tab col s6"><a href="#residential" class="active">RESIDENTAL</a></li>
				<li class="tab col s6"><a href="#business">BUSINESS</a></li>
				</ul>
			</div>
			<div class="col offset-m2 m8">
				<form class="signin-form" method="POST" id="residential">
					<div class="input-field center">
						<input class="input-box" type="text" placeholder="Name">
					</div>

					<div class="input-field col m6">
						<input class="contact-input input-box" type="text" placeholder="Contact No." style="margin-left:-11px">
					</div>

					<div class="input-field col m6">
						<input class="contact-input input-box" type="text" placeholder="Email" style="margin-left:11px">
					</div>

					<div class="input-field center">
						<input class="input-box" type="text" placeholder="Address" style="margin-top:15px">
					</div>

					<div class="input-field center">
						<input class="input-box" type="number" placeholder="Postal Code">
					</div>

					<div class="input-field center">
						<select class="select-box" >
							<option value="" disabled selected>Building Type</option>
							<option value="hdb">HDB</option>
							<option value="ec">Executive Condominium</option>
							<option value="condo">Condominium</option>
							<option value="terrace">Terrace</option>
							<option value="bungalow">Bungalow</option>
						</select>
					</div>

					<div class="input-field">
						<input type="checkbox" id="billing-check" />
				      <label for="billing-check">Different Billing Address?</label>
					</div>


				<!-- Billing form -->

				
				<div class="hidden hidden-billing" id="billing">
					<h6 class="lightblue-theme-text center">BILLING ADDRESS</h6>
					<div class="input-field center">
						<input class="input-box" type="text" placeholder="Name">
					</div>

					<div class="input-field col m6">
						<input class="contact-input input-box" type="text" placeholder="Contact No." style="margin-left:-11px">
					</div>

					<div class="input-field col m6">
						<input class="contact-input input-box" type="text" placeholder="Email" style="margin-left:11px">
					</div>

					<div class="input-field center">
						<input class="input-box" type="text" placeholder="Address" style="margin-top:15px">
					</div>

					<div class="input-field center">
						<input class="input-box" type="number" placeholder="Postal Code">
					</div>

					<div class="input-field center">
						<select class="select-box" >
							<option value="" disabled selected>Building Type</option>
							<option value="hdb">HDB</option>
							<option value="ec">Executive Condominium</option>
							<option value="condo">Condominium</option>
							<option value="terrace">Terrace</option>
							<option value="bungalow">Bungalow</option>
						</select>
					</div>

				</div>

					<div class="input-field center">
						<button class="btn signin-submit btn-theme" style="width:25%; margin-top:15px;">CREATE</button>
					</div>
				</form>


				<!-- business form --> 

			<form class="signin-form" method="POST" id="business">
					<div class="input-field center">
						<input class="input-box" type="text" placeholder="Name">
					</div>

					<div class="input-field col m6">
						<input class="contact-input input-box" type="text" placeholder="Contact No." style="margin-left:-11px">
					</div>

					<div class="input-field col m6">
						<input class="contact-input input-box" type="text" placeholder="Email" style="margin-left:11px">
					</div>

					<div class="input-field center">
						<input class="input-box" type="text" placeholder="Address" style="margin-top:15px">
					</div>

					<div class="input-field center">
						<input class="input-box" type="number" placeholder="Postal Code">
					</div>


					<div class="input-field">
						<input type="checkbox" id="biz-billing-check" />
				      <label for="biz-billing-check">Different Billing Address?</label>
					</div>


				<!-- Billing form -->

				
				<div class="hidden hidden-billing" id="biz-billing">
					<h6 class="lightblue-theme-text center">BILLING ADDRESS</h6>
					<div class="input-field center">
						<input class="input-box" type="text" placeholder="Name">
					</div>

					<div class="input-field col m6">
						<input class="contact-input input-box" type="text" placeholder="Contact No." style="margin-left:-11px">
					</div>

					<div class="input-field col m6">
						<input class="contact-input input-box" type="text" placeholder="Email" style="margin-left:11px">
					</div>

					<div class="input-field center">
						<input class="input-box" type="text" placeholder="Address" style="margin-top:15px">
					</div>

					<div class="input-field center">
						<input class="input-box" type="number" placeholder="Postal Code">
					</div>
				</div>

					<div class="input-field center">
						<button class="btn signin-submit btn-theme" style="width:25%; margin-top:15px">CREATE</button>
					</div>
				</form>


			</div>
		</div>
	</div>
</main>
@stop

@section("scripts")
<script>
$(document).ready(function() {
	$('select').material_select();

	$('#billing-check').click(function(){
        $("#billing").toggle();
    });

    $('#biz-billing-check').click(function(){
        $("#biz-billing").toggle();
    });
});
</script>

@stop