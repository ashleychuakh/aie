@extends("layouts/default")

@section("head")
<style>
   .contact-details {
    margin-top: 40px;
   }
   .contact-details img {
    max-width: 80px;
    background-color: #000;
   }
	.contact-ta{
		height:100px;
		padding:10px;
		border: thin solid #808aa3;
	}
   .contact-form .btn {
    padding: 25px 100px;
    line-height: 0px;
    margin: 20px 0;
   }
   .contact-map {
    width: 100%;
    height: 500px;
    background: linear-gradient(rgba(255,255,255,0.4),rgba(255,255,255,0.4)),url(/assets/img/gray-google-map.jpg);
   }

   .contact-details i {
    display: inline-block;
    border: 2px solid #808aa3;
    border-radius: 50%;
    padding: .25em;
    font-size: 2em;
    margin-bottom: 15px;
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
    <div class="contact-details container center">
   		<div class="row">
   				<div class="col s4">
                  <i class="icon-aieicons-location"></i>
						<p>FIND US</p>
						<p class="no-margin lightblue-theme-text">Blk 2 Defu Lane 10</p>
                  <p class="no-margin lightblue-theme-text">#03-515 (S) 539183</p>
   				</div>
   				<div class="col s4">
                  <i class="icon-aieicons-phone"></i>
						<p>CALL US</p>
						<p class="no-margin lightblue-theme-text">H: +65 8201 6606</p>
                  <p class="no-margin lightblue-theme-text">F: +65 6288 0270</p>
   				</div>
   				<div class="col s4">
                  <i class="icon-aieicons-email"></i>
						<p>ASK US</p>
						<p class="no-margin lightblue-theme-text">enquiry@aiesg.com</p>
   				</div>
   		</div>
   	</div>

    <div class="container">
       <div class="row">
         <form class="contact-form col s12">
           <div class="row">
             <div class="input-field col s12">
               <input name="name" class="input-box" type="text" class="validate" placeholder="Name">
             </div>
             <div class="input-field col s12">
               <input name="companyname" class="input-box" type="text" class="validate" placeholder="Company Name">
             </div>
             <div class="input-field col s12 m6">
               <input name="contact" class="input-box" type="text" class="validate" placeholder="Contact No.">
             </div>
             <div class="input-field col s12 m6">
               <input name="email" class="input-box" type="text" class="validate" placeholder="Email">
             </div>
             <div class="input-field col s12">
                   <textarea class="form-textarea contact-ta"  type="text" placeholder="Leave a Message"  rows="5" required></textarea>
                </div>
             <div class="input-field col s12 center">
                <button class="btn btn-theme" type="submit">Send Message</button>
             </div>
           </div>
         </form>
       </div>
    </div>
   	<div class="container-fluid">
			<div class="contact-map"></div>
   	</div>
</main>
@endsection