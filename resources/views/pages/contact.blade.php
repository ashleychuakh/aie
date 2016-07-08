@extends("layouts/default")

@section("head")
<style>
   .contact-details img {
      max-width: 80px;
      background-color: #000;
   }
	.contact-ta{
		height:100px;
		padding:10px;
		width:102%;
		border: thin solid #808aa3;
	}
	input.contact-input{
		border: thin solid #808aa3;
		padding:5px 10px;
		margin-bottom: 18px;
	}
   .contact-form .btn {
      padding: 25px 200px;
      line-height: 0px;
      margin: 20px 0;
   }
   .contact-map {
      width: 100%;
      height: 500px;
      background: linear-gradient(rgba(255,255,255,0.4),rgba(255,255,255,0.4)),url(/assets/img/gray-google-map.jpg);
   }
</style>

@endsection

@section("content")
<main>
    <div class="blank-hero">
      <div class="hero-text">
        <h4 class="lightblue-theme-text">CONTACT US</h4>
      </div>
    </div>
    <div class="container">
   		<div class="row">
   			<div class="contact-details center">
   				<div class="col m4">
   					<div class="row">
   						<img class="contact-img" src="/assets/img/location.png">
   					</div>
   					<div class="row contact-icon">
   						FIND US
   					</div>
   					<div class="row" style="color:#3d9ff9">
   						Blk 2 Defu Lane 10<br>#03-515 (S) 539183
   					</div>
   				</div>

   				<div class="col m4">
   					<div class="row">
   						<img class="contact-img" src="/assets/img/call.png">
   					</div>
   					<div class="row">
   						CALL US
   					</div>
   					<div class="row" style="color:#3d9ff9">
   						H: +65 8201 6606<br>F: +65 6288 0270
   					</div>
   				</div>

   				<div class="col m4">
   					<div class="row">
   						<img class="contact-img" src="/assets/img/email.png">
   					</div>
   					<div class="row">
   						ASK US
   					</div>
   					<div class="row" style="color:#3d9ff9">
   						enquiry@aiesg.com
   					</div>
   				</div>
   			</div>
   		</div>
   	</div>

   	<div class="container">
   		<div class="row">
   			<div class="contact-form">
   				<form class="">
   					<div class="input-field center">
   						<input class="contact-input input-box"type="text" placeholder="Name">
   					</div>
   					<div class="input-field center">
   						<input class="contact-input input-box" type="text" placeholder="Company Name">
   					</div>
   					<div class="input-field col m6">
   						<input class="contact-input input-box" type="text" placeholder="Contact No." style="margin-left:-10px">
   					</div>
   					<div class="input-field col m6">
   						<input class="contact-input input-box" type="text" placeholder="Email" style="margin-left:10px">
   					</div>
   					<div class="input-field center">
		    			   <textarea class="form-textarea contact-ta"  type="text" placeholder="Leave a Message"  rows="5" required></textarea>
   					</div>
   					<div class="input-field center">
   						<button class="btn btn-theme" type="submit"> Send Message </button>
   					</div>
   				</form>
   			</div>
   		</div>
   	</div>
   	<div class="container-fluid">
			<div class="contact-map"></div>
   	</div>
</main>
@endsection