<?php
$host = "localhost";
$user = "monitorHT";
$senha = "#SensorUT#";
$db = "monitor_ht";

//Criando Conexão
$conn = mysqli_connect($host, $user, $senha, $db);

//Checando Conexão
if (!$conn){
    die("Conexão falhou: ". mysqli_connect_error());
}
//echo "Conexão efetuada com sucesso! <br><br>";
