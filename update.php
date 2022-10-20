<?php

include "config.php";

    if(isset($_POST['update'])){
        $primeironome = $_POST['primeironome'];
        $ultimonome = $_POST['ultimonome'];
        $id = $_POST['id'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $genero = $_POST['genero'];

        $sql = "UPDATE `cliente`.`usuarios` SET
        `primeironome` = '$primeironome', 
        `ultimonome` = '$ultimonome',
        `email` = '$email',
        `password` = '$password',
        `genero` = '$genero'
        WHERE `id`= '$id' ";

        $result = $conn->query($sql);

        if($result == TRUE){
            echo "Atualizado com sucesso!";
        }else{
            echo "erro:" .$sql."<br>" . $conn->error;
        };
    }
?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
 <h2>Formulário de atualização</h2>


    <form action="" method="POST">
        Password: <br>
        <input type="password" name="senha" value="<?php echo $password; ?>">
            <?php if ($genero == 'Masculino') { echo "checked"; }?>
        Gênero: <br>
        <input type="radio" name="genero" value="Masculino">
            <?php if ($genero == 'Masculino') { echo "checked"; }?>Masculino
        <input type="radio" name="genero" value="Feminino">
            <?php if ($genero == 'Feminino') { echo "checked"; }?>Feminino
        <input type="radio" name="genero" value="Outros">
            <?php if ($genero == 'Outros') { echo "checked"; }?>Outros

    </form>
    
 </body>
 </html>


<?php
 if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT * FROM `cliente`.`usuarios` WHERE `id`='$id'";
    $result = $conn->query($sql);

    if($result->num_rows >0){
        while($row = $result->fetch_assoc()){
            $primeironome = $row['']
        }
    }
 }

?>

