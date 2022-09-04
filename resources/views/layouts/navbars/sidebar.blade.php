<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="{{url('/')}}" class="simple-text logo-normal">
      {{ __('Admin') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <?php if(auth()->user()->user_type == 'admin'){?>
      <li class="nav-item {{ ($activePage == 'user' || $activePage == 'user-add') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <p>{{ __('User details') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'user' ? ' active' : '' }}">
              <a class="nav-link" href="{{url('/user')}}">
                <span class="sidebar-mini"> Ul </span>
                <span class="sidebar-normal">{{ __('User list') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-add' ? ' active' : '' }}">
              <a class="nav-link" href="{{url('/user/add')}}">
                <span class="sidebar-mini"> AU </span>
                <span class="sidebar-normal"> {{ __('Add User') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <?php }?>
      <li class="nav-item {{ ($activePage == 'vehicle' || $activePage == 'vehicle-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample1" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Vehicle') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample1">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'vehicle-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{url('/vehicle')}}">
                <span class="sidebar-mini"> VM </span>
                <span class="sidebar-normal">{{ __('Vehicle Management') }} </span>
              </a>
            </li>
            <?php if(auth()->user()->user_type == 'admin'){?>
            <li class="nav-item{{ $activePage == 'vehicle-add' ? ' active' : '' }}">
              <a class="nav-link" href="{{url('/vehicle/add')}}">
                <span class="sidebar-mini"> AV </span>
                <span class="sidebar-normal"> {{ __('Add Vehicle') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'vehicle' ? ' active' : '' }}">
              <a class="nav-link" href="{{url('/vehicle-file-import')}}">
                <span class="sidebar-mini"> VM </span>
                <span class="sidebar-normal">{{ __('Import Excel Sheet') }} </span>
              </a>
            </li>
            <?php }?>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</div>
