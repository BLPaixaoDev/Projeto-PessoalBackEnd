<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleuser.css">
    <title>Consulta Usuario</title>
    <link rel="icon" href="img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

<?php 
include_once "../factory/conexao.php";

if(isset($_POST["cxcod"]) && isset($_POST["cxnome"]) && isset($_POST["cxemail"]) && isset($_POST["cxsenha"])) {
    $id = $_POST["cxcod"];
    $nome = $_POST["cxnome"];
    $email = $_POST["cxemail"];
    $senha = $_POST["cxsenha"];

    // Recupera a imagem atual do banco de dados
    $consulta = "SELECT imagem FROM tbusuario WHERE cod = ?";
    $stmt = $conn->prepare($consulta);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($imagemAtual);
    $stmt->fetch();
    $stmt->close();

    // Verifica se um novo arquivo de imagem foi enviado
    if (isset($_FILES["imagem"]) && $_FILES["imagem"]["error"] == 0) {
        $uploadDir = "../usuarios/";
        $uploadFile = $uploadDir . basename($_FILES["imagem"]["name"]);

        if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $uploadFile)) {
            $imagem = basename($_FILES["imagem"]["name"]);
        } else {
            echo "Erro ao fazer o upload da imagem.";
            exit();
        }
    } else {
        // Mantém a imagem atual se nenhuma nova imagem for enviada
        $imagem = $imagemAtual;
    }

    // Prepara a consulta de atualização
    $alterar = "UPDATE tbusuario SET 
                nome = ?,
                email = ?,
                senha = ?,
                imagem = ?
                WHERE cod = ?";
    
    $stmt = $conn->prepare($alterar);
    $stmt->bind_param("ssssi", $nome, $email, $senha, $imagem, $id);

    if ($stmt->execute()) {
        echo "<div class='mensagem'><h2>Dados Alterados com Sucesso!</h2></div>";
    } else {
        echo "<div class='mensagem'><h2>Erro ao alterar dados:</h2></div>" . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Por favor, preencha todos os campos.";
}

$conn->close();
?>

<a href="../cad-log.php" i class='fas fa-arrow-left'>Voltar</a>

</body>
</html>
