@section("header")
<header>
  <div class="top-bar no-shadow desktop-only">
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
            <li><a href="{{ route('book/step1') }}" class="btn-border">BOOK NOW</a></li>
            <li><a href="{{ route('signin') }}">Login</a></li>
            <li><div class="verticalline"></div></li>
            <li><a href="{{ route('signup') }}">Signup</a></li>
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
              <a href="#" data-activates="mobile-nav" class="button-collapse"><i class="material-icons">menu</i></a>
              <a href="{{ route('main') }}" class="logo"><img src="/assets/img/logo.png" alt="AIESG"></a>
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
              <ul class="side-nav" id="mobile-nav">
                @if(Auth::check())
                @else
                  <li class="{{ Ekko::isActiveRoute('main') }}"><a href="{{ route('main') }}">Home</a></li>
                  <li class="{{ Ekko::isActiveRoute('about') }}"><a href="{{ route('about') }}">About Us</a></li>
                  <li class="{{ Ekko::isActiveRoute('services') }}"><a href="{{ route('services') }}">Services</a></li>
                  <li class="{{ Ekko::isActiveRoute('packages') }}"><a href="{{ route('packages') }}">Packages</a></li>
                  <li class="{{ Ekko::isActiveRoute('materials') }}"><a href="{{ route('materials') }}">Materials</a></li>
                  <li class="{{ Ekko::isActiveRoute('products') }}"><a href="{{ route('products') }}">Products</a></li>
                  <li class="{{ Ekko::isActiveRoute('faq') }}"><a href="{{ route('faq') }}">FAQ</a></li>
                  <li class="{{ Ekko::isActiveRoute('contact') }}"><a href="{{ route('contact') }}">Contact</a></li>
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