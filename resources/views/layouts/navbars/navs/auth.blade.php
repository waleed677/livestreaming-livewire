<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-secondary navbar-absolute fixed-top text-white">
  <div class="container-fluid">
    <div class="navbar-wrapper">
      <div class="nav-bar-icon float-right">
        {{-- <img src="{{ asset('images/nav-icon50_transparent.png') }}" /> --}}
        {{-- <img src="{{ asset('images/nav-logo50.png') }}" /> --}}
      </div>
      <a class="navbar-brand" href="#">{{ $titlePage }}</a>
    </div>
    <div class="nav">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <i class="material-icons">notes</i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
            <a class="dropdown-item {{ $activePage == 'dashboard' ? ' active' : '' }}" href="{{ route('home') }}" >{{ __('DASHBOARD') }}</a>
            <a class="dropdown-item {{ $activePage == 'custom-dashboard' ? ' active' : '' }}" href="{{ route('custom-dashboard') }}" >{{ __('CUSTOM DASHBOARD') }}</a>
            {{-- <a class="dropdown-item {{ $activePage == 'admin' ? ' active' : '' }}" href="{{ route('admin') }}" >{{ __('ADMIN') }}</a>
            <a class="dropdown-item {{ $activePage == 'setting.edit' ? ' active' : '' }}" href="{{ route('setting.edit') }}">{{ __('SETTING') }}</a> --}}
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
              {{ __('LOG OUT') }}</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>




{{-- 
<nav class="navbar navbar-expand-lg bg-secondary navbar-absolute fixed-top text-white">
  <div class="container">
    <div class="navbar-wrapper">
      <div class="nav-bar-icon float-right">
        <img src="{{ asset('images/traceone50.jpg') }}" />
      </div>
      <a class="navbar-brand" href="{{ route('home') }}">{{ $titlePage }}</a>
    </div>
    <div class="collapse navbar-collapse justify-content-end">
      <ul class="navbar-nav">
        <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
          <a href="{{ route('home') }}" class="nav-link">
            <i class="material-icons">dashboard</i> {{ __('DASHBOARD') }}
          </a>
        </li>
        <li class="nav-item{{ $activePage == 'admin' ? ' active' : '' }}">
          <a href="{{ route('admin') }}" class="nav-link">
            <i class="material-icons">admin_panel_settings</i> {{ __('ADMIN') }}
          </a>
        </li>
        <li class="nav-item{{ $activePage == 'profile.edit' ? ' active' : '' }}">
          <a href="{{ route('profile.edit') }}" class="nav-link">
            <i class="material-icons">person</i> {{ __('PROFILE') }}
          </a>
        </li>
        <li class="nav-item{{ $activePage == 'profile.edit' ? ' active' : '' }}">
          <a href="{{ route('logout') }}" class="nav-link">
            <i class="material-icons">exit_to_app</i> {{ __('EXIT') }}
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav> --}}