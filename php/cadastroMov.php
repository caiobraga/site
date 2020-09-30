<?php

$valor = $_POST['valorMov'];
$nome = $_POST['nomeMov'];
$data = $_POST['dataMov'];
$tipo = $_POST['tipoMov'];
$categoria = $_POST['categoria'];
$idUser = $_POST['idUser'];
$connect = mysqli_connect('localhost','root','');
$db = mysqli_select_db($connect, 'orgafin');



        $query = "INSERT INTO input (valor,nome,data,categoria,idUser) VALUES ('$valor','$nome','$data','$categoria','$idUser')";
        $insert = mysqli_query($connect, $query);

        if($insert){
          echo"<script language='javascript' type='text/javascript'>
          alert('inserido com sucesso');window.location.
          href='../tables.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar');window.location
          .href='../tables.php'</script>";
        }
      
    
?>