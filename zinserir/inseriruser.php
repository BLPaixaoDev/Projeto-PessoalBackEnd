<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu Título</title>
    <link rel="stylesheet" href="../css/styleuser.css">
</head>
<body>

<?php
    if($_POST["cxnome"] != ""){
        include_once '../factory/conexao.php';
        $nome = $_POST["cxnome"];
        $email = $_POST["cxemail"];
        $senha = $_POST["cxsenha"];

        if (isset($_FILES["imagem"]) && $_FILES["imagem"]["error"] == 0) {
            $uploadDir = "../usuarios/"; 
            $uploadFile = $uploadDir . basename($_FILES["imagem"]["name"]);
            $imagem = $uploadFile;

            if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $uploadFile)) {
                $sql = "INSERT INTO tbusuario (nome, email, senha, imagem) VALUES ('$nome', '$email', '$senha', '$imagem')";

    
                if ($conn->query($sql) === TRUE) {
                    session_start(); 
                    $_SESSION["caminhoDaImagem"] = basename($imagem);
                    $_SESSION["usuario"] = $nome; 
                    header("Location:../cad-log.php");
                    exit();
                } else {
                    header("Location: cadastre.php?erro=2");
                    exit();
                }
            } else {
                echo "Erro ao fazer o upload da imagem.";
            }
        } else {
            echo "Erro: " . $_FILES["imagem"]["error"];
        }
    } else {
        echo '<h2 class="mensagem">dados não cadastrados!</h2>';
    }
?>

</body>
</html>