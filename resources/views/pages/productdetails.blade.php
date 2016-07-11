@extends("layouts/default")

@section("head")

<style>
.breadcrumbs{
  box-shadow: none;
}
.breadcrumb, .breadcrumb:before{
  color:#808aa3;

}
.breadcrumb:before {
  content: '\2215';
  margin: -3px 0 0;
}
.breadcrumb:last-child{
  color:#03a9f4;
}
hr{
 margin: 20px 0;
}
.tabs .tab a, .tabs .tab a:hover{
  color:#808aa3;
  font-size: 18px;
  text-transform: none;
}
.tabs .indicator{
  height:4px;
  background-color: #808aa3; 
}
.tabs .tab{
  line-height: 31px;
  text-align: left;
}
</style>

@endsection

@section("content")
<main>
  <div class="container mtop50 mbtm50">
   <div class="row"> 
    <nav class="breadcrumbs">
      <div class="nav-wrapper">
        <a href="#!" class="breadcrumb">FIRST</a>
        <a href="#!" class="breadcrumb">SECOND</a>
        <a href="#!" class="breadcrumb">THIRD</a>
      </div>
    </nav>
  </div>
  <div class="row">
    <div class="col m7">
      <div class="row">
        <img src="http://placehold.it/500x200" class="responsive-img">
      </div>
      <div class="row">
        <img src="http://placehold.it/100x100">
        <img src="http://placehold.it/100x100">
      </div>
    </div>
    <div class="col m5">
      <label class="productd-header-price lightblue-theme-text">LG - WINDOW AIRCON + XX</label><br>
      <label class="productd-id">UWC23123123 #2312323</label>
      <hr>
      <label class="productd-header-price lightblue-theme-text">SGD 1293.22</label>
      <div class="input-field center">
        <a href="#!" class="btn btn-theme full-width" style="padding: 10px 0; height: 50px">MAKE AN APPOINTMENT</a>
      </div>
      <p>Prices for HDB and private residential only.<br>For commercial clients, please <a href="{{url('/signup')}}">Contact us.</a> </p>
    </div>
  </div>
  <hr>

  <div class="row" style="margin:0">
    <div class="col s8" style="padding:0">
      <ul class="tabs">
        <li class="tab col s4"><a href="#prod-desc">Product Description</a></li>
        <li class="tab col s4 "><a href="#prod-spec">Product Specifications</a></li>
      </ul>
    </div>
  </div>
  <hr style="margin-top:0">
  <div id="prod-desc" class="col s8">
    <p class="prod-desc-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam turpis nibh, 
      vestibulum non tempor nec, lobortis eu justo. Proin gravida eu augue sit amet gravida. Integer hendrerit 
      suscipit augue.  </p> 
      <div class="col s12 l6 center" style="margin-top:35px;">
        <img src="http://placehold.it/900x500" class="responsive-img">
      </div>
  </div>

  <div id="prod-spec" class="col s12">Product Spec</div>


  </main>
  @stop

  @section("scripts")

  @stop
