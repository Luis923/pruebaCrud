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
                    <p><a href="<?php echo urlsite ?>?page=categorias">Atras</a></p>
                    <h1 class="text-center mb-4">LISTA DE CATEGORIAS</h1> 
                    <br>
                    <TABLE class='table'>
                    <THEAD class='table-dark'>
                    <TR>
                    <TH>ID</TH>
                    <TH>CATEGORIA</TH>
                    </TR>
                    </THEAD>
                    <TBODY>
                    <?php foreach($datos as $v): ?>
                        <TR> 
                        <TD><?php echo $v->idcategoria?></TD>
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