<?php
$servername = "localhost";
$username = "Cervejeiros";
$password = "teste01";
$banco = "Cervejeirosbeerclub";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $banco);


$sql = "SELECT * FROM `TB_CERVEJAS` LIMIT 4";
$query = $mysqli->query($sql);
while ($dados = $query->fetch_assoc()) {
  echo 'ID: ' . $dados['ID_CERVEJA'] . ' ';
  echo 'nome: ' . $dados['NOME_CERVEJA'] . ' ';
  echo 'Valor: ' . $dados['VALOR_CERVEJA'] . '<br/> ';
}
echo 'Registros encontrados: ' . $query->num_rows;
?>