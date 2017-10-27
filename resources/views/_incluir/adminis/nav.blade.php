<nav class="navbar" role="navigation" aria-label="dropdown navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      
        <img src="https://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
      
    </a>
    <div class="navbar-burger burger" data-target="menu_barra_ad">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div id='menu_barra_ad' class="navbar-menu">
    <div class="navbar-start">
    </div>
    <div class="navbar-end">
        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link">
            Docs
          </a>

          <div class="navbar-dropdown">
            <a  class="navbar-item">
              Overview
            </a>
            <a class="navbar-item is-active">
              Elements
            </a>
            <a class="navbar-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
              Salir
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
            <hr class="navbar-divider">
            <div class="navbar-item">
              Version 0.6.0
            </div>
          </div>
      </div>
    </div>
  </div>
</nav>