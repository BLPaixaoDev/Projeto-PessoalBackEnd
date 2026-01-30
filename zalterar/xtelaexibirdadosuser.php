<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Usuário</title>
    <link rel="stylesheet" href="../css/styleuser.css">
</head>
<body>

<?php
include_once "../factory/conexao.php";


$nomeUsuario = isset($_GET["nome"]) ? $_GET["nome"] : '';


$consulta = "SELECT * FROM tbusuario WHERE nome = ?";
$stmt = $conn->prepare($consulta);
$stmt->bind_param("s", $nomeUsuario);
$stmt->execute();
$resultado = $stmt->get_result();
$linha = $resultado->fetch_assoc();


if ($linha) {
    ?>
    <form action="xalteraruser.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="cxcod" value="<?php echo htmlspecialchars($linha["cod"]); ?>">
        
        Nome:<br>
        <input type="text" name="cxnome" value="<?php echo htmlspecialchars($linha["nome"]); ?>"><br>
        
        Email:<br>
        <input type="text" name="cxemail" value="<?php echo htmlspecialchars($linha["email"]); ?>"><br>
        
        Senha:<br>
        <input type="text" name="cxsenha" value="<?php echo htmlspecialchars($linha["senha"]); ?>"><br>
        
        Imagem Atual:<br>
        <?php if (!empty($linha["imagem"])): ?>
            <img src="../usuarios/<?php echo htmlspecialchars($linha["imagem"]); ?>" alt="Imagem do Usuário" style="width: 100px; height: auto;">
        <?php else: ?>
            <p>Imagem não disponível.</p>
        <?php endif; ?><br>
        
        Alterar Imagem:<br>
        <input type="file" name="imagem"><br>
        
        <input type="submit" value="Alterar">
    </form>
    <?php
} else {
    echo "Usuário não encontrado.";
}

$stmt->close();
$conn->close();
?>

<footer>
    <p>&copy; 2024 <br>Bruna Luiza Turma A</p>
</footer>

</body>
</html>
