@extends("layouts/default")

@section("head")
<title>AIE SG | Email Confirmed</title>
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
</style>
@stop

@section("content")
<main>
  <div class="col l12 m12 s12 center-align">
    <div class="v-wrap">
      <div class="v-center">
        <h1>Woohoo!</h1>
        <h2>Your email has been successfully confirmed!</h2>
        <h3>Click <a href="{{ route("signin") }}">here</a> to sign in!</h3>
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