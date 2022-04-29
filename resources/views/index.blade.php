<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Pagina Inicial</title>
</head>
<body>
    @include('nav')
<div class="container">
    <div class="row">
        <div class="col">
            <p><h3>O melhor e-commerce para comprar barato e anunciar seus produtos!</h3></p>
        </div>
        <div class="col">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <p align="center"><lottie-player src="https://assets4.lottiefiles.com/private_files/lf30_4qsllxdc.json"  background="transparent"  speed="0.8"  style="width: 400px; height: 400px; margin-top: 20px;"  loop autoplay></lottie-player></p>
        </div>
        <div class="col">  
                <p align="right" class="ben"><img src="Ben.png" alt="logo" style="width: 223px; height: 331px; margin-top: 80px;"></p>
        </div>
    </div>
<div class="container">
    <p align="center" style="margin-left: 55px;">Clique em <strong>anunciar</strong> para começar a vender agora!</p>
    <p align="center" style="margin-left: 40px;"><a href="cadastraProduto"><button type="button" class="btn">anunciar</button></a></p>
</div>
</div>
</body>
</html>