<div class="row">
    <div class="col-md-2 logo">
        <img src="{{ asset('img/logo.png') }}" alt="">
    </div>
    <div class="col-md-8 title">
        <h1>Sistema de control de notas</h1>
    </div>
    <div class="col-md-2 link-logout">
        <form action="{{ route('logout') }}" id="logout-form" method="POST">
            @method('POST')
            @csrf
        </form>
        <a href="#" id="logout">Cerrar Sesion</a>
    </div>
</div>