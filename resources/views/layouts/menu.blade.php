<li class="{!! Request::is('home*') ? 'active' : '' !!}">
    <a href="{!! url('/home') !!}" class="nav-link nav-toggle">
        <i class="icon-home"></i>
        <span class="title">Home</span>
    </a>
</li>
<li class="{!! Request::is('transactions*') ? 'active' : '' !!}">
    <a class="nav-link nav-toggle" href="{!! route('admin.transactions.index') !!}">
    <i class="fa fa-edit"></i>
    <span  class="title">Transactions</span></a>
</li>

<li class="{!! Request::is('accounts*') ? 'active' : '' !!}">
    <a class="nav-link nav-toggle" href="{!! route('admin.accounts.index') !!}">
    <i class="fa fa-edit"></i>
    <span  class="title">Accounts</span></a>
</li>

<li class="{!! Request::is('aircons*') ? 'active' : '' !!}">
    <a class="nav-link nav-toggle" href="{!! route('admin.aircons.index') !!}">
    <i class="fa fa-edit"></i>
    <span  class="title">Aircons</span></a>
</li>

<li class="{!! Request::is('appointments*') ? 'active' : '' !!}">
    <a class="nav-link nav-toggle" href="{!! route('admin.appointments.index') !!}">
    <i class="fa fa-edit"></i>
    <span  class="title">Appointments</span></a>
</li>

<li class="{!! Request::is('companies*') ? 'active' : '' !!}">
    <a class="nav-link nav-toggle" href="{!! route('admin.companies.index') !!}">
    <i class="fa fa-edit"></i>
    <span  class="title">Companies</span></a>
</li>

<li class="{!! Request::is('locations*') ? 'active' : '' !!}">
    <a class="nav-link nav-toggle" href="{!! route('admin.locations.index') !!}">
    <i class="fa fa-edit"></i>
    <span  class="title">Locations</span></a>
</li>

<li class="{!! Request::is('roles*') ? 'active' : '' !!}">
    <a class="nav-link nav-toggle" href="{!! route('admin.roles.index') !!}">
    <i class="fa fa-edit"></i>
    <span  class="title">Roles</span></a>
</li>

<li class="{!! Request::is('accountaddresses*') ? 'active' : '' !!}">
    <a class="nav-link nav-toggle" href="{!! route('admin.accountaddresses.index') !!}">
    <i class="fa fa-edit"></i>
    <span  class="title">accountaddresses</span></a>
</li>

