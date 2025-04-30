<?php
$host = 'mysql';
$user = 'admin_times';
$password = 'futebol123';
$db = 'times_db';

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
echo "Conectado ao MySQL com sucesso!";
?>
