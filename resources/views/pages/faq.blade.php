@extends("layouts/default")

@section("head")
<title>AIE SG | FAQ</title>

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
    <i class="icon-aieicons-question"></i>
    <a href="javascript:;" class="modal-action modal-close"><i id="exit-modal" class="fa fa-times" aria-hidden="true"></i></a>
  </div>
  <div class="modal-content center">
    <h5>MORE QUESTIONS?</h5>
    <p>Didn't find my answers to your questions? why not send it directly to us?</p>
    <form id="faq-contact" method="post">
      <div class="input-field center">
        <input id="name" name="name" class="input-box" type="text" placeholder="Name*" data-parsley-required="true" data-parsley-trigger="change">
      </div>
      <div class="input-field center">
        <input id="phone" name="phone" class="input-box" type="text" placeholder="Contact No.*" data-parsley-required="true" data-parsley-trigger="change" data-parsley-pattern="^[\d\+\-\.\(\)\/\s]*$">
      </div>
      <div class="input-field center">
        <input id="email" name="email" class="input-box" type="email" placeholder="Email*" data-parsley-required="true" data-parsley-trigger="change">
      </div>
      <div class="input-field center">
        <textarea id="message" name="message" class="materialize-textarea"  type="text" placeholder="Leave a Message*" rows="5" data-parsley-required="true" data-parsley-trigger="change"></textarea>
      </div>
      <div class="input-field center">
        {!! csrf_field() !!}
        <button href="#!" class="btn btn-theme full-width" type="submit">TALK TO US</button>
      </div>
    </form>
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

  $('#faq-contact').parsley({
      successClass: 'valid',
      errorClass: 'invalid',
      errorsContainer: function (velem) {
        var $errelem = velem.$element.siblings('label');
        $errelem.attr('data-error', window.Parsley.getErrorMessage(velem.validationResult[0].assert));
        return true;
      },
      errorsWrapper: '',
      errorTemplate: ''
    });

  @if(Session::has('flash_notification.message'))
    Materialize.toast('{{ Session::get('flash_notification.message')}}', 5000, '{{ Session::get('flash_notification.level')}}');
  @endif
});
</script>
@stop