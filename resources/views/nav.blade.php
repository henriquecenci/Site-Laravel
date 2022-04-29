@if(Auth::check())
   <a style="font-size:20px; margin-left: 10px;"><strong> bem vindo, {{ Auth::user()->name }}!!<strong></a>
@else
    

@endif
<div class="container-fluid">
    <div class="topo">
        <h4 class="display-4" id="box1">
            <p align="center" class="text-white"> &#128054; Ben Store</p>
        </h4>

        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="index">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="home">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cadastraProduto">Anunciar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="listarProdutos">Ver produtos</a>
            </li>
        </ul>
    </div>
</div>


