<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./src/index.css">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <img class="imageMain" src="images/tienda.jpg" class="img-fluid" alt="tienda">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="formMain col-4 bg-white mt-5 p-4 rounded">
                    <h1 class="text-center mb-4">OPCIONES</h1> 
                    <div class="mb-3 d-flex justify-content-center">
                        <a class="btn btn-primary" href="<?php echo urlsite ?>?page=productos" role="button">
                        Productos</a>
                    </div>
                    <div class="mb-3 d-flex justify-content-center">
                        <a class="btn btn-primary" href="<?php echo urlsite ?>?page=categorias" role="button">
                        Categorias</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>