<?php
$host = "localhost";
$user = "root";
$senha = "";
$db = "monitor_ht";

//Criando Conexão
$conn = mysqli_connect($host, $user, $senha, $db);

//Checando Conexão
if (!$conn){
    die("Conexão falhou: ". mysqli_connect_error());
}
//echo "Conexão efetuada com sucesso! <br><br>";
