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
.select-wrapper input.select-dropdown{
  border-bottom: none;
  text-align: center;
}
.select-wrapper span.caret{
  display: none;
}
.product-item{
  position: relative;
  display: inline-block;
}

.product-item:hover .over {
  display: block;
}
.over{
  display: none;
  position: absolute;
  left: 0;
  bottom:0;
  right: 0;
  background-color:  #fff;
  opacity:0.8;
  height:100%;
}
.prod-search a{
  color:#808aa3;
}
</style>

@endsection

@section("content")
<main>
  <div class="container mtop50 mbtm50">
   <div class="row"> 
    <div class="col m4">
      @include("partials/product-sidebar")
    </div>

    <div class="col m8"><div class="row">
      <div class="prod-search right" >
        <a href="" class="prod-search-btn"><i class="fa fa-search" aria-hidden="true"></i></a>
        <select class="prod-sort right ">
          <option value="" disabled selected>Sort by &or;</option>
          <option value="1">Option 1</option>
          <option value="2">Option 2</option>
          <option value="3">Option 3</option>
        </select>
      </div>
    </div>
    <hr>
    <div class="products">
      <div class="col m4 s6 center product-item">
        <div class="row"><img src="http://placehold.it/180x180"></div>
        <p class="prod-model lightblue-theme-text">Model</p>
        <p>#Model No<br>Product Name</p>
        <div class="over valign-wrapper"><a href="{{url('/productdetails')}}"> 
          <i class="fa fa-eye lightblue-theme-text" aria-hidden="true" style="font-size:50px; padding-top:50px"></i><br>
          Quick View</a>
        </div>
      </div>

      <div class="col m4 s6 center product-item">
        <div class="row"><img src="http://placehold.it/180x180"></div>
        <p class="prod-model lightblue-theme-text">Model</p>
        <p>#Model No<br>Product Name</p>
        <div class="over valign-wrapper"><a href="{{url('/productdetails')}}"> 
          <i class="fa fa-eye lightblue-theme-text" aria-hidden="true" style="font-size:50px; padding-top:50px"></i><br>
          Quick View</a>
        </div>
      </div>

      <div class="col m4 s6 center product-item">
        <div class="row"><img src="http://placehold.it/180x180"></div>
        <p class="prod-model lightblue-theme-text">Model</p>
        <p>#Model No<br>Product Name</p>
        <div class="over valign-wrapper"><a href="{{url('/productdetails')}}"> 
          <i class="fa fa-eye lightblue-theme-text" aria-hidden="true" style="font-size:50px; padding-top:50px"></i><br>
          Quick View</a>
        </div>
      </div>

      <div class="col m4 s6 center product-item">
        <div class="row"><img src="http://placehold.it/180x180"></div>
        <p class="prod-model lightblue-theme-text">Model</p>
        <p>#Model No<br>Product Name</p>
        <div class="over valign-wrapper"><a href="{{url('/productdetails')}}"> 
          <i class="fa fa-eye lightblue-theme-text" aria-hidden="true" style="font-size:50px; padding-top:50px"></i><br>
          Quick View</a>
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

</script>
<script>
$(document).ready(function() {
  $('select').material_select();
});

</script>

@stop
