<?php

    

    include_once('conexao.php');
    // $id_estab = $_GET['id_estab'];

    if(isset($_POST['update'])){
        $id = $_GET['id_prod'];
        $proNome = $_POST['proNome'];
        $proPreco = $_POST['proPreco'];
        $tam_Id = $_POST['tam_Id'];
        $cat_Id = $_POST['cat_Id'];
        $proDescricao = $_POST['proDescricao'];
        $id_estab = $_GET['id_estab'];

        $sqlUpdate = "UPDATE produtos SET proNome='$proNome',proPreco='$proPreco',tam_Id='$tam_Id',cat_Id='$cat_Id',proDescricao='$proDescricao' 
        WHERE proId='$id'";

        $result = $conn -> query($sqlUpdate);

        header("Location: ../listarprod.php?id_estab='.$id_estab.'");
    }
    

?>