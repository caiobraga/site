<?php

$email = $_POST['emailCadastro'];
$senha = $_POST['senhaCadastro'];
$connect = mysqli_connect('localhost','root','');
$db = mysqli_select_db($connect,'orgafin');
$query_select = "SELECT email FROM conta WHERE email = '$email'";
$select = mysqli_query($connect,$query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['email'];

  if($email == "" || $email == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo e-mail deve ser preenchido');window.location.href='
    ../pages/login/index.html';</script>";

    }else{
      if($logarray == $email){

        echo"<script language='javascript' type='text/javascript'>
        alert('Este e-mail já está cadastrado');window.location.href='
        ../pages/login/index.html';</script>";

      }else{
        if($senha == "" || $senha == null){
          echo"<script language='javascript' type='text/javascript'>
          alert('O campo senha deve ser preenchido');window.location.href='
          ../pages/login/index.html';</script>";
        }else{
          $query = "INSERT INTO conta (email,senha) VALUES ('$email','$senha')";
          $insert = mysqli_query($connect, $query);

          if($insert){
            echo"<script language='javascript' type='text/javascript'>
            alert('Usuário cadastrado com sucesso!');window.location.
            href='../pages/login/index.html'</script>";
          }else{
            echo"<script language='javascript' type='text/javascript'>
            alert('Não foi possível cadastrar esse usuário');window.location
            .href='../pages/login/index.html'</script>";
        }
        }
      }
    }
?>
