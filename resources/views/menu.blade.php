
 <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
     <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name', 'Laravel') }}
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                <a class="nav-link active" href="/">Início</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/sobre">Sobre</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/salas">Salas</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/contato">Contato</a>
                </li>
                <li class="nav-item">
            <a class="nav-link disabled" href="#" aria-disabled="true">Desabilitado</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
