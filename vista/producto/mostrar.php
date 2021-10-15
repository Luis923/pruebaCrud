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
                <div class="formMain col-6 bg-white mt-5 p-4 rounded">
                    <p><a href="<?php echo urlsite ?>?page=">Inicio</a></p>
                    <p><a href="<?php echo urlsite ?>?page=productos">Atras</a></p>
                    <h1 class="text-center mb-4">LISTA DE PRODUCTOS</h1> 
                    <br>
                    <TABLE class='table'>
                    <THEAD class='table-dark'>
                    <TR>
                    <TH>N°</TH>
                    <TH>PRODUCTO</TH>
                    <TH>GRADO</TH>
                    <TH>CANTIDAD</TH>
                    <TH>CATEGORIA</TH>
                    </TR>
                    </THEAD>
                    <TBODY>
                    <?php foreach($datos as $v): ?>
                        <TR> 
                        <TD><?php echo $v->idproducto?></TD>
                        <TD><?php echo $v->nombre ?></TD>
                        <TD><?php echo $v->grado ?></TD>
                        <TD><?php echo $v->cantidad ?></TD>
                        <TD><?php echo $v->categoria ?></TD>
                        </TR>
                    <?php endforeach?>
                    </TBODY>
                    </TABLE>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>