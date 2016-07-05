@extends("layouts/default")

@section("head")
  <style>
  </style>
@stop 

@section("content")
<main>
  <div class="blank-hero">
    <div class="hero-text">
      <h4 class="lightblue-theme-text">FAQ</h4>
    </div>
  </div>
	<div class="faq-container container">
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
    <i class="icon-aieicons-location"></i>
    <a href="javascript:;" class="modal-action modal-close"><i id="exit-modal" class="fa fa-times" aria-hidden="true"></i></a>
  </div>
  <div class="modal-content center">
    <h5>MORE QUESTIONS?</h5>
    <p>Didn't find my answers to your questions? why not send it directly to us?</p>
    <div class="input-field center">
      <input class="input-box" type="text" placeholder="Name*">
    </div>
    <div class="input-field center">
      <input class="input-box" type="text" placeholder="Contact*">
    </div>
    <div class="input-field center">
      <input class="input-box" type="text" placeholder="Email*">
    </div>
    <div class="input-field center">
      <textarea class="materialize-textarea"  type="text" placeholder="Leave a Message*"  rows="5" required></textarea>
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