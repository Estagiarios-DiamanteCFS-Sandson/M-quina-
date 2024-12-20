<?php
//Requisitar o arquivo
require_once "bed_conexao.php";

if (isset($_POST['btn-login'])) {

    $email = $_POST['email'];
    $Senha = $_POST['Senha'];

    echo "$email <br> $Senha";


//
if(empty($email)|| empty($Senha)){
    echo"Email ou senha devem ser inserido";
}else{
    $sql = "SELECT * FROM{$prefix}usuario WHERE email = '$email' AND senha ='$Senha";
    $resultado = mysqli_query($conexao,$sql);
    if(mysqli_num_rows($resultado > 0)){
        echo"Usuário encontrado";
    }else{
        echo"Usuário não encontrado";
    }
}
}