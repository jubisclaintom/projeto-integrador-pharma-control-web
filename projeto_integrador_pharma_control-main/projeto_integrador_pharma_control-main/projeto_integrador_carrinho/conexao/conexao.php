<?php
$host = "localhost";
$port = "3306"; // Porta personalizada
$dbname = "farmacia"; // Substitua pelo nome do seu banco
$username = "root"; // Substitua pelo seu usuário do banco
$password = ""; // Substitua pela sua senha

try {
    // Criando a conexão PDO com a porta personalizada
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8", $username, $password);
    
    // Definir o modo de erro para exceção
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "✅ Conexão bem-sucedida na porta $port!";
} catch (PDOException $e) {
    die("❌ Erro de conexão: " . $e->getMessage());
}
?>
