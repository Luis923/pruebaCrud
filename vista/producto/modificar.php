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
                    <p><a href="<?php echo urlsite ?>?page=">Inicio</a></p>
                    <p><a href="<?php echo urlsite ?>?page=productos&opcion=form_buscarProducto">Atras</a></p>
                    <h1 class="text-center mb-4">MODIFICAR PRODUCTO</h1>
                    
                    <form action="<?php echo urlsite ?>?page=productos&opcion=modificar" enctype="multipart/form-data" method="post">
                    <?php foreach($data as $v): ?>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">nombre</label>
                        <aside class="text-success">* solo letras</aside>
                        <input type="text" class="form-control" name="txtnombre" placeholder="<?php echo $v->nombre ?>" pattern="[a-zA-Z]{2,20}" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="grado" class="form-label">grado</label>
                        <aside class="text-success">* a,b o c</aside>
                        <input type="text" class="form-control" name="txtgrado" placeholder="<?php echo $v->grado ?>" pattern="a|b|c" required>
                    </div>
                    <div class="mb-3">
                        <label for="cantidad" class="form-label">cantidad</label>
                        <aside class="text-success">* solo numeros</aside>
                        <input type="number" class="form-control" name="txtcantidad" placeholder="<?php echo $v->cantidad ?>" pattern="/^([0-9])*$/" required>
                    </div>
                    <div class="mb-3">
                        <label for="categoria" class="form-label">categoria</label>
                        <select class="form-select" aria-label="Default select example" name="txtcategoria">
                        <?php foreach($datos2 as $v2): ?>
                        <option value="<?php echo $v2->categoria?>"><?php echo $v2->categoria?></option>
                        <?php endforeach?>
                        </select>
                    </div>
                    <div class="mb-3 d-none">
                        <label for="idproducto" class="form-label"></label>
                        <input type="text" class="form-control" name="txtidproducto" placeholder="" value="<?php echo $v->idproducto ?>">
                    </div>
                    <?php endforeach?>
                    <button type="submit" name="agregar" class="btn btn-primary" value="Agregar">Modificar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>