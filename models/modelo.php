<?php

class Service {
    
    private $servicio;
    private $db;
    private $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,];

    public function __construct() {
        $this->servicio = array();
        $this->db = new PDO('mysql:host=127.0.0.1;dbname=videoclubjavi','root','',$this->options);
    }

    private function setNames() {
        return $this->db->query("SET NAMES 'utf8'");
    }

    public function getServicios() {

        self::setNames();
        $sql = "SELECT * FROM peliculas";
        foreach ($this->db->query($sql) as $res) {
            $this->servicio[] = $res;
        }
        return $this->servicio;
        $this->db = null;
    }

    public function setServicio($nom,$ano,$director,$imagen,$descripcio) {

        self::setNames();
        $an=(int)$ano;
        $stmt= $this->db->prepare("INSERT INTO  peliculas (nomPeli, director, ano, poster, descripcion) VALUES (?,?,?,?,?)");
        $stmt->execute([$nom,$director,$an,$imagen,$descripcio]);
        if ($stmt) {
            echo "<script>location.href='index.php?mensaje=Registro realizado.'</script>";
            return true;
        } else {
            echo "<script>location.href='index.php?mensaje=Registro no realizado.'</script>";
            return false;
        }
    }
    
    public function eliminar($id,$pel){
         self::setNames();
        $stmt= $this->db->prepare("DELETE FROM `peliculas` WHERE id=?");
        $stmt->execute([$id]);
        if ($stmt) {
            echo "<script>location.href='index.php?mensaje=Película $pel eliminada correctamente.'</script>";
            return true;
        } else {
            echo "<script>location.href='index.php?mensaje=Pelicula $pel no ha sido eliminada.'</script>";
            return false;
        }
        
    }
       public function editar($id,$pel,$director,$ano,$poster,$descripcion){
         self::setNames();
        $an=(int)$ano;
        $stmt= $this->db->prepare("UPDATE peliculas SET nomPeli=?,director=?,ano=?,poster=?,descripcion=? WHERE id=?");
        $stmt->execute([$pel,$director,$an,$poster,$descripcion,$id]);
        if ($stmt) {
            echo "<script>location.href='index.php?mensaje=Película $pel actualizada correctamente.'</script>";
            return true;
        } else {
            echo "<script>location.href='index.php?mensaje=Pelicula $pel no ha sido actualizada.'</script>";
            return false;
        }
        
    }
    
    public function slider(){
        self::setNames();
        $stmt=$this->db->prepare("SELECT * FROM peliculas");
        ?>
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style='width:30%;margin-left:35%;display:flex;'>

    <div class="carousel-inner" >
       <div class='item active' ><img src='https://img.microsiervos.com/Peliculas-Ready-Player-One.jpg' ></div>
      <?php
        $stmt->execute();
         while($row = $stmt->fetch(PDO::FETCH_ASSOC)){          
    echo "<div class='item' ><img src='". $row['poster']."' alt='".$row['nomPeli']."'  title='".$row['nomPeli']."'></div>";
              
         }
         ?>   <!-- Left and right controls -->
           </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">siguient</span>
</a></div><?php
        
    }
}
?>