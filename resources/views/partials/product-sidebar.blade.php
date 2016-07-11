@section("product-sidebar")
<style>
.sidenav-type [type="checkbox"]+label {
  padding-left: 0;
}
.sidenav-type [type="checkbox"]+label:before, [type="checkbox"]:not(.filled-in)+label:after{
  content: none;
}
label{
  color:#808aa3;
}
input[type="checkbox"]:checked + label {
  color: #03a9f4;
}
.type-arrow, .brand-arrow{
  margin-top: -50px;
  font-size: 20px;
}
</style>

<div class="products-sidebar-box">
  <div class="products-sidebar">
    <h5>FILTER</h5>
    <a class="reset right lightblue-theme-text" href="#">Reset filter</a>
    <hr> 

    <form class="filterproducts">
      <label class="lightblue-theme-text sidebar-headings">AIR CONDITIONING TYPE</label>
      <ul class="sidenav-type">
        <li> <input type="checkbox" id="type1"/> 
          <label for="type1"><i class="fa fa-angle-right" aria-hidden="true"></i> Casement Air-Conditioners</label>
        </li>
        <li> <input type="checkbox" id="type2"/> 
          <label for="type2"><i class="fa fa-angle-right" aria-hidden="true"></i> Single-Spilt Air-Conditioners</label>
        </li>
        <li> <input type="checkbox" id="type3"/> 
          <label for="type3"><i class="fa fa-angle-right" aria-hidden="true"></i> System 2 Air-Conditioners</label>
        </li>
      </ul>
      <a id="return-to-top" href="javascript:;"><span class="right type-arrow"><i class="fa fa-angle-up" aria-hidden="true"></i></span></a>
      <hr>

      <label class="lightblue-theme-text sidebar-headings">BRANDS</label>
      <ul class="sidenav-brand">
        <li><input type="checkbox" class="filled-in" id="brand1" /><label for="brand1">brand1 (xx)</label></li>
        <li><input type="checkbox" class="filled-in" id="brand2" /><label for="brand2">brand2 (xx)</label></li>
      </ul>
      <a id="return-to-top" href="javascript:;"><span class="right brand-arrow"><i class="fa fa-angle-up" aria-hidden="true"></i></span></a>
      <hr>

      <label class="lightblue-theme-text sidebar-headings">PRICE</label>
      <div id="test5"></div>
      <hr> 

      <div class="input-field center">
        <a href="#!" class="btn btn-theme full-width">SEARCH</a>
      </div>
    </form>
  </div>
</div>

<div class="adspace center">
  <p>Ad space</p>
</div>
@show
