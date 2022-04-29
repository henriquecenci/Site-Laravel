<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="{{ asset('style3.css') }}" rel="stylesheet">
    <title>Cadastrar Produto</title>
</head>

<body>
    @include('nav')

    @if(isset($errors) && count($errors) > 0)
        <div class='alert alert-danger'>
            @foreach($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        </div>
    @endif
    <div class="container">
            <div class="form">
                <h1>Editar Produto</h1>
                    <form method="POST" action="../editarProduto/{{$produto->id}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="produto">Produto:</label><br>
                            <p align="center"><input type="text" class="form-control" id="produto" placeholder="Digite nome do produto" name="produto" value = "{{$produto -> produto}}"></p>
                        </div>

                        <div class="form-group">
                            <label for="categoria">Categoria: </label><br>
                            <p align="center"><select name="categoria_id" class="custom-select mb-3" id="select">
                                @foreach($categorias as $categoria)
                                    @if($categoria -> id == $produto -> categoria_id)
                                        <option value = "{{$categoria ->id}}" selected>{{$categoria -> categoria}}</option>
                                    @else
                                        <option value = "{{$categoria ->id}}">{{$categoria -> categoria}}</option>
                                    @endif        
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="preco">Preço: </label><br>
                            <p align="center"><input type="number" class="form-control" id="preco" placeholder="Digite preço do produto" name="preco" value = "{{$produto -> preco}}"></p>
                        </div>
                        
                        <div class="form-group">
                            <p align="center"><label for="foto">Foto (nao esta funcionando :/):</label><br>
                            <input type="file" class="form-control" name="imagem"></p>
                        </div>
                        <input class='btn btn-primary' type="submit" name="submit" value="Enviar">
                    </form>
            </div>
        </div>
</body>

</html>