@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bem vindo!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('voce ja esta logado! clique no botao a baixo para se redirecionar a pagina para anunciar um produto') }}
                    <br>
                    <br>
                    <a href="cadastraProduto"><input class='btn btn-primary' type="button" name="button" value="Redirecionar"></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
