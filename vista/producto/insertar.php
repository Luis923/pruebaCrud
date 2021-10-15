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
        <img class="imageMain" src="images/login.jpg" class="img-fluid" alt="login">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="formMain col-4 bg-white mt-5 p-4 rounded">
                    <p><a href="<?php echo urlsite ?>?page=">Inicio</a></p>
                    <p><a href="<?php echo urlsite ?>?page=productos">Atras</a></p>
                    <h1 class="text-center mb-4">NUEVO PRODUCTO</h1> 
                    <form action="<?php echo urlsite ?>?page=productos&opcion=insertar" enctype="multipart/form-data" method="post">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">nombre</label>
                        <input type="text" class="form-control" name="txtnombre">
                    </div>
                    <div class="mb-3">
                        <label for="grado" class="form-label">grado</label>
                        <input type="text" class="form-control" name="txtgrado">
                    </div>
                    <div class="mb-3">
                        <label for="cantidad" class="form-label">cantidad</label>
                        <input type="number" class="form-control" name="txtcantidad">
                    </div>
                    <div class="mb-3">
                        <label for="categoria" class="form-label">categoria</label>
                        <input type="text" class="form-control" name="txtcategoria">
                    </div>
                    <button type="submit" name="agregar" class="btn btn-primary" value="Agregar">Agregar</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>