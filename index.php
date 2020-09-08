<!DOCTYPE html>
<?php
//Todo: añadir ,eliminar y editar la película
if (isset($_POST['envio'])) {
include "models/modelo.php";$nuevo = new Service();
$asd = $nuevo->setServicio($_POST['nom'],$_POST['ano'],$_POST['director'],$_POST['imagen'],$_POST['descripcion']);
} 
if(!empty($_GET['mensaje'])){$mensaje=$_GET['mensaje'];}else{$mensaje="";}
if(isset($_POST['eliminar'])){
    include "models/modelo.php"; $nuev = new Service();
$asd = $nuev->eliminar($_POST['id'],$_POST['pelidel']); }
if(isset($_POST['editar'])){
 $id=$_POST['id'];$p=$_POST['pelidel'];$d=$_POST['director'];$a=$_POST['ano'];$po=$_POST['poster'];$de=$_POST['descripcion'];$btn="Editar";$sub="editarOk";$h3="Editar película <scan style='color:blue;'>".$p."</scan>";
 }else{
    $p="";$d="";$a="";$po="";$de="";$btn="Añadir";$sub="envio";$h3="Nueva película";
}
if(isset($_POST['editarOk'])){
    include "models/modelo.php"; $nuev = new Service();
    $asd = $nuev->editar($_POST['id'],$_POST['nom'],$_POST['ano'],$_POST['director'],$_POST['imagen'],$_POST['descripcion']);
}

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Javier Orti Marina</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <header class="text-center">
            <h1>Prueba de empresa</h1>
            <hr />
            Día : <?php echo date("d-m-Y"); ?>
        </header>
        <div class="row">
            <div class="col-lg-6">
                <b style="color:green"><?php echo $mensaje; ?></b>
                <form action="#" method="post" class="col-sm-10">
                    <h3><?php echo $h3;?></h3>
                    <input type="hidden" name="id" class="form-control" value="<? echo $id;?>" required />
                    Nombre Película<input type="text" name="nom" class="form-control" placeholder="Nombre película" value="<? echo $p;?>" required />
                    Director: <input type="text" name="director" class="form-control" placeholder="Nombre director" value="<? echo $d;?>" required />
                    Año: <input type="number" name="ano" class="form-control" placeholder="Año de estreno" value="<? echo $a;?>" required />
                    Poster: <input type="text" name="imagen" class="form-control" placeholder="Imagen url" value="<? echo $po;?>" required />
                    Descripción:<textarea class="form-control" placeholder="Descripción" name="descripcion" required><? echo $de;?></textarea>
                    <br />
                    <input type="submit" value="<?php echo $btn;?>" name="<?php echo $sub;?>" class="btn btn-success" />
                </form>
            </div>
            <div class="col-lg-6 text-center">
                <hr />
                <h3>Listado de Películas</h3>
                <a href="controllers/controlador.php"><i class="fa fa-align-justify"></i> Acceder al listado de películas</a>
                <hr />
            </div>
        </div>
        <footer class="col-lg-12 text-center">
            <scan style="color:blue">Autor:</scan><i>Javier Orti Marina</i>
        </footer>
    </div>
</body>

</html>