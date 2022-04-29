<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style4.css">
    <title>Pagina Inicial</title>
</head>
<body>
    @include('nav')

    <div class="container" style="margin-top: 100px;">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th> Nome </th>
                    <th> preço </th>
                    <th> categoria </th>
                    <th> imagem </th>
                    <th> editar </th>
                    <th> remover anuncio </th>
                </tr>
            </thead>
                    @foreach($produtos as $produto)
                <tr>
                    <td> {{$produto->produto}} </td>
                    <td> {{$produto->preco}} </td>
                    <td> {{$produto->categoria_id}} </td><br>
                    <td> <img src="{{ asset("storage/{$produto->imagem}") }}" alt="{{$produto->imagem}}" style="height = "53" width="53""></td>
                    <td><a href="editarProduto/{{$produto -> id}}"> editar <a></td>
                    <td><a href="deletar/{{$produto -> id}}"> remover <a></td>
                </tr> 
                @endforeach

        </table>
        {!! $produtos ->links()!!}
    </div>
</body>
</html>