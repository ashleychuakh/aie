@section("header")
<div class="navbar">
  <nav>
    <div class="row">
      <div class="col l12">
        <div class="nav-wrapper">
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <a href="{{ route('main') }}" class="logo"><img src="/assets/img/logo.png" alt="Meggnify"></a>
          <ul class="left">
          </ul>
          
          <ul class="right hide-on-med-and-down">
            @if(Auth::check())
              <li><a href="#">ASSIGNMENT</a></li>
              <li><a class="waves-effect waves-dark btn-link btn dropdown-button" href="javascript:;" data-activates="dropdown1">My Account<i class="material-icons right" style="line-height: 35px;">arrow_drop_down</i></a></li>
              <ul id="dropdown1" class="dropdown-content" style="margin-left: 15px;">
                 @if(Auth::user()->type == 0)<li><a href="{{ route('admin/dashboard') }}">Administrative Dashboard</a></li>@endif
                <li><a href="{{ route('signout') }}">Sign Out</a></li>
              </ul>
            @else
              <li><a href="{{ route('signin') }}">Sign In</a></li>
              <li><a href="{{ route('signup') }}">Sign Up</a></li>
            @endif
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
  </nav>
</div>
@show