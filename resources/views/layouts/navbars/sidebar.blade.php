<div class="sidebar collapse" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://rewhys.com/" class="simple-text logo-normal">
      {{ __('Rewhys') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
          <a class="nav-link" href="{{ route('home') }}">
            <i class="material-icons">dashboard</i>
              <p>{{ __('DASHBOARD') }}</p>
          </a>
        </li>
        <li class="nav-item{{ $activePage == 'admin' ? ' active' : '' }}">
          {{-- <a class="nav-link"  href="{{ route('admin') }}"> --}}
            <a class="nav-link" href="{{ route('admin') }}">
            <i class="material-icons">admin_panel_settings</i>
              <p>{{ __('ADMIN') }}</p>
          </a>
        </li>
        <div class="collapse show">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <i class="material-icons">person</i>
                <p>{{ __('PROFILE') }} </p>
              </a>
            </li>
          </ul>
          <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
              <i class="material-icons">exit_to_app</i>
              <p>{{ __('LOG OUT') }}</p>
            </a>
        </div>
    </ul>
  </div>
</div>
