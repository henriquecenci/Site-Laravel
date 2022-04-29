<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style3.css">
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
                <h1>Cadastrar Produto</h1>
                    <form method="POST" action="cadastraProduto" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="produto">Produto:</label><br>
                            <p align="center"><input type="text" class="form-control" id="produto" placeholder="Digite nome do produto" name="produto"></p>
                        </div>

                        <div class="form-group">
                            <label for="categoria">Categoria: </label><br>
                            <p align="center"><select name="categoria_id" class="custom-select mb-3" id="select">
                                @foreach($categorias as $categoria)
                                    <option value ={{$categoria->id}} selected>{{$categoria -> categoria}}</option>
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="preco">Preço: </label><br>
                            <p align="center"><input type="number" class="form-control" id="preco" placeholder="Digite preço do produto" name="preco"></p>
                        </div>

                        <div class="form-group">
                            <p align="center"><label for="foto">Foto:</label><br>
                            <input type="file" class="form-control" name="imagem"></p>
                        </div>
                        <input class='btn btn-primary' type="submit" name="submit" value="Enviar">
                    </form>
            </div>
        </div>
</body>

</html>