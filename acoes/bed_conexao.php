<?php

// Dados de conexão
$host = "localhost";
$user = "root";
$password ="";
$mybd = "mydb";
$perfix ="99_";

$conexao = mysqli_connect($host, $user, $password, $mybd);

if (!$conexao){
    die("Erro ao conectar ao banco de dados". mysqli_connect_error());
}
    // echo"Conexão bem- sucessida!";

// $sql = "INSERT INT usuarios (nome, email) VALUES ('Fernando', 'maquina@example.com')";
// if (mysqli_query($conexao, $sql)){
//     echo"Registro inserido com sucesso!";
// } else{
//     echo"Erro ao inserir registro:" .mysqli_error($conexao); 
// }




