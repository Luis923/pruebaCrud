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
                <div class="formMain col-4 bg-white mt-3 p-4 rounded ">
                    <p><a href="<?php echo urlsite ?>?page=">Inicio</a></p>
                    <p><a href="<?php echo urlsite ?>?page=productos">Atras</a></p>
                    <h1 class="text-center mb-4">NUEVO PRODUCTO</h1> 
                    <form id="form_insertar"action="<?php echo urlsite ?>?page=productos&opcion=insertar" enctype="multipart/form-data" method="post">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">nombre</label>
                        <aside class="text-success">* solo letras</aside>
                        <input type="text" class="form-control" name="txtnombre" id="nombre"  pattern="[a-zA-Z]{2,20}" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="grado" class="form-label">grado</label>
                        <aside class="text-success">* a,b o c</aside>
                        <input type="text" class="form-control" name="txtgrado" id="grado" maxlength="1" pattern="a|b|c" required >
                    </div>
                    <div class="mb-3">
                        <label for="cantidad" class="form-label">cantidad</label>
                        <aside class="text-success">* solo numeros</aside>
                        <input type="number" class="form-control" name="txtcantidad" id="cantidad"  pattern="/^([0-9])*$/" required>
                    </div>
                    <div class="mb-3">
                        <label for="categoria" class="form-label">categoria</label>
                        <select class="form-select" aria-label="Default select example" name="txtcategoria">
                        <?php foreach($datos as $v): ?>
                        <option value="<?php echo $v->categoria?>"><?php echo $v->categoria?></option>
                        <?php endforeach?>
                        </select>
                    </div>
                    <button type="submit" name="agregar" class="btn btn-primary" value="Agregar">Agregar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>