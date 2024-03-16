<?php
include_once ("Database/Database.php");
class ProductoDAO {


public $con_BD;


public function __construct (){
    $this->con_BD=Database::connect();
}


public function getAllPedidos(){
    try{
        $stmt=$this->con_BD->prepare("Select * From pedidos");
        $stmt->execute();
        return $stmt->fetchAll();
    }catch (PDOException $e){
            return -1; // Error al realizar la consulta a B
    }
}


public function getPedidosById ($id){
    $stmt= $this->con_BD->prepare("Select * from pedidos where id_pedido=$id");
    
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $stmt->execute();

    return $stmt->fetch();        
}

}
?>