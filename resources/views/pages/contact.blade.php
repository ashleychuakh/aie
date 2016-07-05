@extends("layouts/default")

@section("head")
<style>
@font-face {
    font-family: 'fonttella'; /*a name to be used later*/
    src: href="/assets/css/style.css";/*URL to font*/
}
	.contact-icon{
		font-family: 'fonttella';
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
</style>

@endsection

@section("content")
<main>
	<div class="container" style="background: #fff;">
		 <div class="row">
		      <h4 class="faq-header" style="font-weight:300">CONTACT US</h4>
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
   					<div class="form-group center">
   						<input class="contact-input input-box"type="text" placeholder="Name">
   					</div>
   					<div class="form-group center">
   						<input class="contact-input input-box" type="text" placeholder="Company Name">
   					</div>
   					<div class="form-group col m6">
   						<input class="contact-input input-box" type="text" placeholder="Contact No." style="margin-left:-10px">
   					</div>
   					<div class="form-group col m6">
   						<input class="contact-input input-box" type="text" placeholder="Email" style="margin-left:10px">
   					</div>
   					<div class="form-group center">
		    			<textarea class="form-textarea contact-ta"  type="text" placeholder="Leave a Message"  rows="5" required></textarea>
   					</div>
   					<div class="form-group center">
   						<button class="btn btn-submit contact-submit"> Send Message </button>
   					</div>
   				</form>
   			</div>
   		</div>
   	</div>
   	<div class="container-fluid">
   		<div class="row">
   			<div class="contact-map">
   				<img src="/assets/img/gray-google-map.jpg" style="width:100%">
   			</div>
   		</div>
   	</div>
</main>
@endsection