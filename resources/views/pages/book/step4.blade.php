@extends("layouts/default")

@section("head")
<title>AIE SG | Book | Request Confirmed</title>
<style>
  .v-wrap {
    display: table !important;
    min-height: 65vh;
    width: 100%;
  }

  .v-center {
    display: table-cell;
    vertical-align: middle;
    text-align: center;
  }

  .booking-confirmed i {
    border: 4px solid #b2d355;
    border-radius: 50%;
    padding: 0.4em;
    font-size: 1.5em;
  }
  .booking-confirmed h4 {
    padding: 50px 0;
  }
  .booking-confirmed p {
    font-family: proxima-nova, sans-serif;
    font-size: 1.25em;
  }
</style>
@stop

@section("content")
<main>
  <div class="col l12 m12 s12 center-align booking-confirmed">
    <div class="v-wrap">
      <div class="v-center">
        <h1><i class="icon-aieicons-done green-theme-text"></i></h1>
        <h4 class="green-theme-text">DONE!</h4>
        <p>Thank You for Choosing Us.</p>
        <p>Your booking confirmation will be sent to your email once approved.</p>
      </div>
    </div>
  </div>
</main>
@stop

@section("scripts")
<script>
  $(function() {

  });
</script>
@stop