<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleuser.css">
    <title>Consulta Usuario</title>
    <link rel="icon" href="img/icon.png" type="image/x-icon">
</head>
<body>
    
    <?php
include_once "../factory/conexao.php";
session_start();

if (!isset($_SESSION["login"]) || !isset($_SESSION["senha"]) || !isset($_SESSION["usuario"])) {
    header("location:login.php");
    exit();
}

$nomeUsuario = $_SESSION["usuario"]; 
$excluir = "DELETE FROM tbusuario WHERE nome = ?";
$stmt = $conn->prepare($excluir);
$stmt->bind_param("s", $nomeUsuario); 
$executar = $stmt->execute();

if ($executar) {
    session_destroy();
    echo "<div class='mensagem'><h2>Conta excluída com sucesso!</h2></div>";
    echo "<br/>";
    echo "<a href='../login.php'><i class='fas fa-arrow-left'></i> Voltar</a>";
} else {
    echo "Erro ao excluir a conta: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>

</body>
</html>
