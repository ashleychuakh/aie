@section("header")
<header>
  <div class="top-bar no-shadow">
    <div class="container">
      <div class="row no-margin">
        <div class="col s6">
          <ul>
            <li><a href="">(65) 6592 6887</a></li>
            <li><a href="">Operating Hours: Mon-Sat 11am-6pm</a></li>
          </ul>
        </div>
        <div class="col s6 right">
          <ul>
            <li><a href="" class="btn-border">BOOK NOW</a></li>
            <li><a href="{{ route('signin') }}">Login</a></li>
            <li><div class="verticalline"></div></li>
            <li><a href="">Signup</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar">
    <nav class="no-shadow">
      <div class="container">
        <div class="row">
          <div class="col l12">
            <div class="nav-wrapper">
              <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
              <a href="{{ route('main') }}" class="logo"><img src="/assets/img/logo.png" alt="Meggnify"></a>
              <ul class="left">
              </ul>
              
              <ul class="right hide-on-med-and-down">
                  <li class="{{ Ekko::isActiveRoute('main') }}"><a href="{{ route('main') }}">Home</a></li>
                  <li class="{{ Ekko::isActiveRoute('about') }}"><a href="{{ route('about') }}">About Us</a></li>
                  <li class="{{ Ekko::isActiveRoute('services') }}"><a href="{{ route('services') }}">Services</a></li>
                  <li class="{{ Ekko::isActiveRoute('packages') }}"><a href="{{ route('packages') }}">Packages</a></li>
                  <li class="{{ Ekko::isActiveRoute('materials') }}"><a href="{{ route('materials') }}">Materials</a></li>
                  <li class="{{ Ekko::isActiveRoute('products') }}"><a href="{{ route('products') }}">Products</a></li>
                  <li class="{{ Ekko::isActiveRoute('faq') }}"><a href="{{ route('faq') }}">FAQ</a></li>
                  <li class="{{ Ekko::isActiveRoute('contact') }}"><a href="{{ route('contact') }}">Contact</a></li>
              </ul>
              <ul class="side-nav" id="mobile-demo">
                @if(Auth::check())
                  <li><a href="#">ASSIGNMENT</a></li>
                  <li><a class="waves-effect waves-dark btn-link btn dropdown-button" href="javascript:;" data-activates="dropdown2">My Account<i class="material-icons right" style="line-height: 64px;">arrow_drop_down</i></a></li>
                  <ul id="dropdown2" class="dropdown-content" style="margin-left: 10px; margin-top: 15px;">
                     @if(Auth::user()->type == 0)<li><a href="{{ route('admin/dashboard') }}">Administrative Dashboard</a></li>@endif
                    <li><a href="{{ route('signout') }}">Sign Out</a></li>
                  </ul>
                @else
                  <li><a href="{{ route('signin') }}">Sign In</a></li>
                  <li><a href="{{ route('signup') }}">Sign Up</a></li>
                @endif
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </div>
</header>
@show