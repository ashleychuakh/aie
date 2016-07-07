@extends("layouts/default")

@section("head")
<link href="/assets/css/nouislider.min.css" rel="stylesheet">
<link href="/assets/css/nouislider.css" rel="stylesheet">
<style>
.products-sidebar-box{
  border: thin solid #9e9e9e;
}
.products-sidebar{
  padding: 10px 20px;
}
a.reset.right{
  margin-top: -30px;
  font-size:0.8rem;
}
ul.sidenav-items li{
  padding: 4px 0;
}
hr{
margin: 15px 0;
}
.sidebar-headings{
  line-height:3rem; 
  font-size: 1rem;
}
[type="checkbox"].filled-in+label:before, [type="checkbox"].filled-in+label:after{
  border-radius: 30px;
}
[type="checkbox"].filled-in:checked+label:before{
  border-radius: 0px;
}
[type="checkbox"].filled-in:checked+label:after{
    border: 2px solid #03a9f4;
    background-color: #03a9f4;
}
</style>

@endsection

@section("content")
<main>
  <div class="container">
   <div class="row"> 
    <div class="col m4">
      <div class="products-sidebar-box">
        <div class="products-sidebar">
          <h5>FILTER</h5>
          <a class="reset right lightblue-theme-text">Reset filter</a>
          <hr> 

          <label class="lightblue-theme-text sidebar-headings">AIR CONDITIONING TYPE</label>
          <ul class="sidenav-items">
            <li><i class="fa fa-angle-right" aria-hidden="true"></i> Casement Air-conditioners</li>
            <li><i class="fa fa-angle-right" aria-hidden="true"></i> Single-spilt Air-conditioners</li>
            <li><i class="fa fa-angle-right" aria-hidden="true"></i> Casement Air-conditioners</li>
            <li><i class="fa fa-angle-right" aria-hidden="true"></i> Single-spilt Air-conditioners</li>
          </ul>

          <hr>
          
          <label class="lightblue-theme-text sidebar-headings">BRANDS</label>
          <ul class="sidenav-items">
            <li><input type="checkbox" class="filled-in" id="filled-in-box" /><label for="filled-in-box">Filled in</label></li>
            <li><input type="checkbox" class="filled-in" id="filled-in-box"  /><label for="filled-in-box">Filled in</label></li>
          </ul>

          <hr>

          <label class="lightblue-theme-text sidebar-headings">PRICE</label>
<!-- 
        <div id="range-input" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
          <div class="noUi-base">
            <div class="noUi-origin noUi-connect">
              <div class="noUi-handle noUi-handle-lower">
                <div class="range-label">
                  <span></span>
                </div>
              </div>
            </div>
            <div class="noUi-origin noUi-background">
              <div class="noUi-handle noUi-handle-upper">
                <div class="range-label">
                  <span></span>
                </div>
              </div>
            </div>
          </div>
        </div> -->

    <div class="range-field">
      <input type="range" id="test5" min="0" max="100" />
    </div>

        

        </div>
      </div>
    </div>
  </div>
</div>
</main>
@stop

@section("scripts")
<script src="/assets/js/nouislider.min.js"></script>
<script src="/assets/js/nouislider.js"></script>
<script>
  var slider = document.getElementById('#test5');
  noUiSlider.create(slider, {
   start: [20, 80],
   connect: true,
   step: 1,
   range: {
     'min': 0,
     'max': 100
   },
   format: wNumb({
     decimals: 0
   })
  });

  $("#slider-connect").noUiSlider({
  start: 40,
  connect: "lower",
  range: {
    'min': 0,
    'max': 100
  }
});
</script>
@stop
