
    <div class="container">
        <nav class="row justify-content-center" >
            <div class="col-3">
                <div class="navbar-brand">
                    <a href="" class="navbar-item">
                        <img src="https://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
                    </a>
                </div>
                <div class="navbar-start">
                    <div class="navbar-item has-dropdown is-hoverable m-l-10">
                        <a href="#" class="navbar-link is-active">Link 1</a>
                        <div class="navbar-dropdown">
                            <a href="#" class="navbar-item is-active">Sub</a>
                            <a href="#" class="navbar-item is-active">Sub</a>
                            <a href="#" class="navbar-item is-active">Sub</a>
                        </div>
                    </div>
                    <a href="" class="navbar-item is_tab is-hidden-mobile"> Link 2</a>
                    <a href="" class="navbar-item is_tab is-hidden-mobile">Link 3</a>
                </div>
                <div class="navbar-end">
                    @guest
                    <a href="{{route('login')}}" class="navbar-item is-tab">
                        Login
                    </a>
                    <a href="{{route('register')}}" class="navbar-item is-tab">
                        Registrarse
                    </a>
                    @else
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a href="#" class="navbar-link is-active">
                            Mi Cuienta
                        </a>
                        <div class="navbar-dropdown">
                            <a href="#" class="navbar-item is-active">Perfil</a>
                            <a href="#" class="navbar-item is-active">Settings</a>
                            <a href="#" class="navbar-item is-active">Logout</a>
                        </div>
                    </div>
                    @endguest
                </div>  
            </div>
        </nav>
    </div>