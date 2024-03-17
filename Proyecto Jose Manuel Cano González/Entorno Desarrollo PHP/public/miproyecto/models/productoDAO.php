<?php
include_once ("Database/Database.php");
class ProductoDAO {


public $con_BD;


public function __construct (){
    $this->con_BD=Database::connect();
}


public function getAllProducts(){
    try{
        $stmt=$this->con_BD->prepare("Select * From Productos");
        $stmt->execute();
        return $stmt->fetchAll();
    }catch (PDOException $e){
            return -1; // Error al realizar la consulta a B
    }
}


public function getProductById ($id){
    $stmt= $this->con_BD->prepare("Select * from Productos where id_producto=$id");
    
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $stmt->execute();

    return $stmt->fetch();        
}

// Funcion que añade un producto a la base de datos
public function addProduct ($nombre, $descripcion, $precio, $stock, $categoria) {

    try {
        $stmt=$this->con_BD->prepare("Insert Into Productos (nombre,descripcion,precio,stock,categoria) values (:nombre, :descripcion, :precio, :stock, :categoria)");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':descripcion', $descripcion);
        $stmt->bindParam(':precio', $precio);
        $stmt->bindParam(':stock', $stock);
        $stmt->bindParam(':categoria', $categoria);
        $stmt->execute();
    } catch (PDOException $e) {
        return -2;
    }
    
}
}


?>