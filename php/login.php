<?php
$email = $_POST['emailLogin'];
$senha = $_POST['senhaLogin'];
$connect = mysqli_connect('localhost','root','');
$db = mysqli_select_db($connect, 'orgafin');

    $verifica = mysqli_query($connect, "SELECT * FROM conta WHERE email =
    '$email' AND senha = '$senha'") or die("erro ao selecionar");
      if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='../pages/login/index.html';</script>";
      }else{
        while ( $registro = mysqli_fetch_assoc($verifica) ) {
          $idConta = $registro["idConta"];
        }
        setcookie("id",$idConta);
        header("Location:../pages/home/index.html");
      }
?>