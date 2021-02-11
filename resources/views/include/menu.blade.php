<div class="collapse navbar-collapse" id="sidenav-collapse-main">
  <!-- Nav items -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="examples/dashboard.html">
        <i class="ni ni-tv-2 text-primary"></i>
        <span class="nav-link-text">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ (request()->is('user*')) ? 'active' : '' }}" href="{{ route('user.index') }}">
        <i class="ni ni-planet text-orange"></i>
        <span class="nav-link-text">Usuarios</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="examples/map.html">
        <i class="ni ni-pin-3 text-primary"></i>
        <span class="nav-link-text">Google</span>
      </a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
        aria-expanded="false">
        <i class="ni ni-pin-3 text-primary"></i>
        <span class="nav-link-text">U. Dropdown</span>
      </a>
      <div class="dropdown-menu">
        <a href="{{ route('user.create') }}" class="nav-link">
          <i class="ni ni-single-02 text-yellow"></i>
          <span class="nav-link-text">U. Create</span>
        </a>
        <a href="{{ route('user.index') }}" class="nav-link">
          <i class="ni ni-single-02 text-yellow"></i>
          <span class="nav-link-text">U. Index</span>
        </a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="examples/profile.html">
        <i class="ni ni-single-02 text-yellow"></i>
        <span class="nav-link-text">Profile</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="examples/tables.html">
        <i class="ni ni-bullet-list-67 text-default"></i>
        <span class="nav-link-text">Tables</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="examples/login.html">
        <i class="ni ni-key-25 text-info"></i>
        <span class="nav-link-text">Login</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="examples/register.html">
        <i class="ni ni-circle-08 text-pink"></i>
        <span class="nav-link-text">Register</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="examples/upgrade.html">
        <i class="ni ni-send text-dark"></i>
        <span class="nav-link-text">Upgrade</span>
      </a>
    </li>
  </ul>
  <!-- Divider -->
  <hr class="my-3">
  <!-- Heading -->
  <h6 class="navbar-heading p-0 text-muted">
    <span class="docs-normal">Documentation</span>
  </h6>
  <!-- Navigation -->
  <ul class="navbar-nav mb-md-3">
    <li class="nav-item">
      <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html"
        target="_blank">
        <i class="ni ni-spaceship"></i>
        <span class="nav-link-text">Getting started</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html"
        target="_blank">
        <i class="ni ni-palette"></i>
        <span class="nav-link-text">Foundation</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html"
        target="_blank">
        <i class="ni ni-ui-04"></i>
        <span class="nav-link-text">Components</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/plugins/charts.html"
        target="_blank">
        <i class="ni ni-chart-pie-35"></i>
        <span class="nav-link-text">Plugins</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link active active-pro" href="examples/upgrade.html">
        <i class="ni ni-send text-dark"></i>
        <span class="nav-link-text">Upgrade to PRO</span>
      </a>
    </li>
  </ul>
</div>