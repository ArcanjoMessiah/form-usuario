<?php  
include "config.php";

if (isset($GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM `cliente`.`usuario` WHERE `id`= '$id'";

    $result = $conn->query($sql);
    if($result == TRUE){
        echo "Registro deletado com sucesso!";
    }
    else {
        echo "Erro: ".$sql. "<br>" . $conn->error;
        header ('Location: consultar.php');
    }
}



?>