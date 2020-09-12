<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Prueba de empresa</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="../scripts/fancyTable.js"></script>
    <script src="../scripts/peliculas.js"></script>

</head>

<body>
    <div class="container" id="vista">
        <header class="text-center">
            <h1>Listado de películas</h1><button class="btn btn-success" name="añadir" id="masPeli">Añadir película</button>
   

            Día : <?php echo date("d-m-Y"); ?>
        </header>
        <div class="ext-center">
            <hr>
            <table id="taulaPelis" class="table table-responsive table-bordered table-striped">
                <thead>
                    <th><strong>nombre Pelicula</strong></th>
                    <th><strong>director</strong></th>
                    <th><strong>Año</strong></th>
                    <th><strong>Synopsis</strong></th>
                    <th><strong>Poster</strong></th>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < count($datos); $i++) {
                        ?>
                    <tr>
                        <td style="width:20%"><a href="https://es.wikipedia.org/wiki/<?php echo $datos[$i]["nomPeli"]; ?>"><?php echo $datos[$i]["nomPeli"]; ?></a>
                            <hr>
                            <form method="post" action="../">
                                <input value="<?php echo $datos[$i]["id"]; ?>" type="hidden" name="id" />
                                <input value="<?php echo $datos[$i]["nomPeli"]; ?>" type="hidden" name="pelidel" />
                                <input value="<?php echo $datos[$i]["ano"]; ?>" type="hidden" name="ano" />
                                <input value="<?php echo $datos[$i]["director"]; ?>" type="hidden" name="director" />
                                <input value="<?php echo $datos[$i]["poster"]; ?>" type="hidden" name="poster" />
                                <input value="<?php echo $datos[$i]["descripcion"]; ?>" type="hidden" name="descripcion" />
                                <button class="btn btn-danger btn-xs" name="eliminar" type="submit">Eliminar</button>
                                <button class="btn btn-warning btn-xs" name="editar" type="submit">Editar</button>
                            </form>
                        </td>
                        <td><?php echo $datos[$i]["director"]; ?> </td>
                        <td><?php echo $datos[$i]["ano"]; ?> </td>
                        <td><small><?php echo $datos[$i]["descripcion"]; ?></small> </td>
                        <td align="center" style="width:20%;"><img src="<?php echo $datos[$i]["poster"]; ?>" alt="<?php echo $datos[$i]["nomPeli"]; ?>" title="<?php echo $datos[$i]["nomPeli"]; ?>" style="width: 50%; "> </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <a href="../index.php" style="color:black"> <i class="fa fa-arrow-circle-left"></i> Volver a la página principal</a>
            <hr />
        </div>
        <footer class="col-lg-12 text-center">

        </footer>
    </div>
</body>

</html>