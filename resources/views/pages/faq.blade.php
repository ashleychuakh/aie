@extends("layouts/default")

@section("head")
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

  <style>
  .modal{
  	border-radius: 0;
  }
  	.modal-header{
  		background-color: #3D9FF9;
  		text-align: center;
  		padding-top: 20px;
  	}
  	.enq-header{
  		    font-size: 30px;
    font-weight: 100;
    color: #fff;
    border: thin solid white;
    /* padding: 15px; */
    width: 50px;
    height: 50px;
    padding-top: 3px;
    border-radius: 30px;
  	}
  	.modal-content{
  		position: static;
  		border: none;
  		box-shadow: none;
  	}
  	.enq-subheadings{
	  font-weight: 100;
	  font-size: 12px;
	  line-height: 17px;
	  margin-bottom:22px;
	}
	input.enq-input{
		border: 1px solid #9e9e9e;
		padding-left:10px;
		width:95%;
		margin:0px;
	}
	textarea.eng-textarea{
	    width: 99%;
	    height: 100px;
	    padding: 10px;
	    font-size: 1rem;
	}
	button.eng-submit{
	    width: 99%;
	    border-radius: 0px;
	    background-color: #F46463;
	    color: #fff;
	    font-weight: 100;
	    font-size: 12px;
	}
	.modal-header .close {
    margin-top: -12px;
    color: #fff;
    text-shadow: none;
    opacity: 1;
    font-weight: 100;
    font-size: 28px;
}
  </style>
  <script>
  	$(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });    
        $('#back-to-top').tooltip('show');
	});
  </script>
  <script>
	$(document).on('load',function() { 
		$("#modal1").openModal();
		$("#modal1").closeModal();
	});
  </script>

@endsection 

@section("content")
<main>
	<div class="container" style="background: #fff;">
	    <div class="row">
	      <h2 class="faq-header" style="font-weight:300">FAQ</h2>
      		<a href="#"><i class="fa fa-search faq-search-btn right" aria-hidden="true"></i></a>

	  </div>
    </div>

    <div class="container">
    	<div class="row">
    		<div class="col m10 offset-m1">
    			<div class="faq">
    			<div class="faq-qn-box">
    				<div class="faq-q1"  data-toggle="collapse" data-target="#faq1">
    				<label class="faq-qn-label"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
    					Cras imperdiet lorem a ultrices iaculis.</label>
    				<span class="right" style="font-size: 40px; color:#808aa3;"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
    				</div>
    				<div id="faq1" class="collapse faq-qn-ans">
    					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non fermentum arcu. Sed laoreet at ligula ac auctor. 
    					Sed ac elementum orci. In volutpat elementum tellus, nec ullamcorper magna consequat consectetur. 
    					Nulla sollicitudin velit at erat fermentum lobortis. Morbi ut arcu et sem placerat viverra. Suspendisse elit dolor, 
    					iaculis eu dignissim aliquet, vulputate vel ante.
    				</div>
    			</div>

    			<div class="faq-qn-box">
    				<div class="faq-q2"  data-toggle="collapse" data-target="#faq2">
    				<label class="faq-qn-label"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
    					Cras imperdiet lorem a ultrices iaculis.</label>
					<span class="right" style="font-size: 40px; color:#808aa3;"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
    				</div>
    				<div id="faq2" class="collapse faq-qn-ans">
    					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non fermentum arcu. Sed laoreet at ligula ac auctor. 
    					Sed ac elementum orci. In volutpat elementum tellus, nec ullamcorper magna consequat consectetur. 
    					Nulla sollicitudin velit at erat fermentum lobortis. Morbi ut arcu et sem placerat viverra. Suspendisse elit dolor, 
    					iaculis eu dignissim aliquet, vulputate vel ante.
    				</div>
    			</div>

    			<div class="faq-qn-box">
    				<div class="faq-q3"  data-toggle="collapse" data-target="#faq3">
    				<label class="faq-qn-label"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
    					Cras imperdiet lorem a ultrices iaculis.</label>
    				<span class="right" style="font-size: 40px; color:#808aa3;"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
    				</div>
    				<div id="faq3" class="collapse faq-qn-ans">
    					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non fermentum arcu. Sed laoreet at ligula ac auctor. 
    					Sed ac elementum orci. In volutpat elementum tellus, nec ullamcorper magna consequat consectetur. 
    					Nulla sollicitudin velit at erat fermentum lobortis. Morbi ut arcu et sem placerat viverra. Suspendisse elit dolor, 
    					iaculis eu dignissim aliquet, vulputate vel ante.
    				</div>
    			</div>

    			<div class="faq-qn-box">
    				<div class="faq-q4"  data-toggle="collapse" data-target="#faq4">
    				<label class="faq-qn-label"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
    					Cras imperdiet lorem a ultrices iaculis.</label>
    				<span class="right" style="font-size: 40px; color:#808aa3;"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
    				</div>
    				<div id="faq4" class="collapse faq-qn-ans">
    					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non fermentum arcu. Sed laoreet at ligula ac auctor. 
    					Sed ac elementum orci. In volutpat elementum tellus, nec ullamcorper magna consequat consectetur. 
    					Nulla sollicitudin velit at erat fermentum lobortis. Morbi ut arcu et sem placerat viverra. Suspendisse elit dolor, 
    					iaculis eu dignissim aliquet, vulputate vel ante.
    				</div>
    			</div>

    			<div class="faq-qn-box">
    				<div class="faq-q5"  data-toggle="collapse" data-target="#faq5">
    				<label class="faq-qn-label"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
    					Cras imperdiet lorem a ultrices iaculis.</label>
    				<span class="right" style="font-size: 40px; color:#808aa3;"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
    				</div>
    				<div id="faq5" class="collapse faq-qn-ans">
    					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non fermentum arcu. Sed laoreet at ligula ac auctor. 
    					Sed ac elementum orci. In volutpat elementum tellus, nec ullamcorper magna consequat consectetur. 
    					Nulla sollicitudin velit at erat fermentum lobortis. Morbi ut arcu et sem placerat viverra. Suspendisse elit dolor, 
    					iaculis eu dignissim aliquet, vulputate vel ante.
    				</div>
    			</div>

    			<div class="faq-qn-box">
    				<div class="faq-q6"  data-toggle="collapse" data-target="#faq6">
    				<label class="faq-qn-label"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
    					Cras imperdiet lorem a ultrices iaculis.</label>
    				<span class="right" style="font-size: 40px; color:#808aa3;"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
    				</div>
    				<div id="faq6" class="collapse faq-qn-ans">
    					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non fermentum arcu. Sed laoreet at ligula ac auctor. 
    					Sed ac elementum orci. In volutpat elementum tellus, nec ullamcorper magna consequat consectetur. 
    					Nulla sollicitudin velit at erat fermentum lobortis. Morbi ut arcu et sem placerat viverra. Suspendisse elit dolor, 
    					iaculis eu dignissim aliquet, vulputate vel ante.
    				</div>
    			</div>
    			</div>
    		</div>
<!-- waves-effect waves-light -->
    		 <button class="faq-enq-btn btn-circle  modal-trigger" data-toggle="modal" data-target="#modal1"> ? </button> 

    	</div>
    </div>

    			     <!-- Modal Structure -->
			  <div id="modal1" class="modal enq-modal">
			  	<div class="modal-header">
			  		<label class="enq-header"> ? </label>
			  		<button type="button" class="close" data-dismiss="modal">&times;</button>
			  	</div>
			    <div class="modal-content mod-enq-content center">
			      <h4 style="color:#808aa3; font-weight:300">MORE QUESTIONS?</h4>
			      <p class="enq-subheadings">Didn't find any answers to your questions,<br>why not send it directly to us?</p>
			    	<form class="">
			    		<div class="form-group">
			    			<input class="enq-input" type="text" placeholder="Name*" required>
			    		</div>
			    		<div class="form-group">
			    			<input class="enq-input" type="text" placeholder="Contact*" required>
			    		</div>
			    		<div class="form-group">
			    			<input class="enq-input" type="text" placeholder="Email" >
			    		</div>
			    		<div class="form-group">
			    			<textarea class="enq-input eng-textarea"  type="text" placeholder="Leave a Message*"  rows="5" required></textarea>
			    		</div>
			    		<div class="form-group">
				    		<button class="btn btn-submit eng-submit">TALK TO US</button>
				    	</div>
			    	</form>
			    </div>
			  </div>
 
    <div class="container">
    	<div class="row center">
    		<a id="back-to-top" href="#"><button class="faq-top-btn btn-circle"> <i class="fa fa-angle-up" aria-hidden="true" style="font-size:35px"></i> <br> Top
    		</button></a>
    	</div>
    </div>


</main>
@endsection