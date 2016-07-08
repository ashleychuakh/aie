@extends("layouts/default")

@section("head")
  <style>
  .modal{
  	border-radius: 0;
  }
	.modal-header{
		background-color: #3D9FF9;
		text-align: center;
		padding: 30px;
	}
  .modal-header img {
    max-width: 120px;
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
  .collapsible-header {
    min-height: 6rem;
    line-height: 6rem;
    padding: 0 3rem;
    border-bottom: 2px solid #808aa3;
  }
  .collapsible-body p {
    padding: 3rem;
  }
  .collapsible-header i {
    width: 2rem;
    font-size: 1.6rem;
    line-height: 6rem;
    display: block;
    float: right;
    text-align: center;
    margin-right: 1rem;
  }
  .totop-link {
    text-align: center;
    margin: 50px 0;
  }
  .totop-link i {
    border: 2px solid #808aa3;
    border-radius: 50%;
    font-size: 2.5em;
    padding: 15px;
  }
  #more-questions {
    width: 600px;
    max-width: 100%;
  }
  .modal-header #exit-modal {
    position: absolute;
    right: 0;
    font-size: 2em;
    margin-right: 40px;
    color: #fff;
  }
  .input-field {
    padding: 0px 25px;
  }
  .contact-ta{
    height:100px;
    padding:10px;
    width:102%;
    border: thin solid #808aa3;
  }
  .btn-theme.full-width {
    width: 102%;
    padding: 25px;
    line-height: 0;
    font-weight: 300;
    margin: 10px 0;
  }
  </style>
@stop 

@section("content")
<main>
  <div class="blank-hero">
    <div class="hero-text">
      <h4 class="lightblue-theme-text">FAQ</h4>
    </div>
  </div>
	<div class="container">
    <div class="row no-margin">
        <div class="col s12">
          <ul class="collapsible" data-collapsible="accordion">
              <li>
                <div class="collapsible-header">First<i class="icon-aieicons-downarrow grey-theme-text"></i></div>
                <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
              </li>
              <li>
                <div class="collapsible-header">Second<i class="icon-aieicons-downarrow grey-theme-text"></i></div>
                <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
              </li>
              <li>
                <div class="collapsible-header">Third<i class="icon-aieicons-downarrow grey-theme-text"></i></div>
                <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
              </li>
            </ul>
            <div class="totop-link"><a id="return-to-top" href="javascript:;"><i class="icon-aieicons-totop grey-theme-text"></i></a></div>
        </div>
	   </div>
  </div>
</main>
<div class="fixed-action-btn">
  <a class="waves-effect waves-dark btn-floating btn-large btn-floating-theme modal-trigger" href="#more-questions">
    <i class="icon-aieicons-question"></i>
  </a>
</div>
<!-- Modal Structure -->
<div id="more-questions" class="modal">
  <div class="modal-header">
    <img src="/assets/img/location.png">
    <a href="javascript:;" class="modal-action modal-close"><i id="exit-modal" class="fa fa-times" aria-hidden="true"></i></a>
  </div>
  <div class="modal-content center">
    <h5>MORE QUESTIONS?</h5>
    <p>Didn't find my answers to your questions? why not send it directly to us?</p>
    <div class="input-field center">
      <input class="contact-input input-box" type="text" placeholder="Name*">
    </div>
    <div class="input-field center">
      <input class="contact-input input-box" type="text" placeholder="Contact*">
    </div>
    <div class="input-field center">
      <input class="contact-input input-box" type="text" placeholder="Email*">
    </div>
    <div class="input-field center">
      <textarea class="form-textarea contact-ta"  type="text" placeholder="Leave a Message*"  rows="5" required></textarea>
    </div>
    <div class="input-field center">
      <a href="#!" class="btn btn-theme full-width">TALK TO US</a>
    </div>
  </div>
</div>
@stop

@section("scripts")
  <script>
    "use strict"
    $(function() {
      $('.modal-trigger').leanModal();

      $('.collapsible .collapsible-header').click(function(e) {
        console.log($(this).children('i').attr('class'));
        if ($(this).children('i').hasClass("vflip")) {
          $(this).children('i').removeClass("vflip");
        } else {
          $(this).children('i').addClass("vflip");
        }
      })
    });
  </script>
@stop