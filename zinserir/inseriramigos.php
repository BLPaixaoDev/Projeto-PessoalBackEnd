<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Dados cadastrados</title>
    <link rel="icon" href="img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/styleuser.css">
</head>
<body>

<?php
    if(!empty($_POST["cxamigo"])) {
        include_once '../factory/conexao.php';
        $nome = $_POST["cxamigo"];
        $email = $_POST["cxemail"];
        $telefone = $_POST["cxtelefone"];
        $whats = $_POST["cxwhats"];
        $nascimento = $_POST["cxnascimento"];
        $sql = "INSERT INTO tbamigos (amigo, email, telefone, whats, datanasc)
                VALUES ('$nome', '$email', '$telefone', '$whats', '$nascimento')";
        $query = mysqli_query($conn, $sql);

        if ($query) {
            echo '<h2 class="mensagem">Dados cadastrados com sucesso!</h2>';
            echo '<a href="../aposlogin.php" class="btn-voltar"><i class="fas fa-arrow-left"></i> Voltar</a>';
        } else {
            echo '<h2 class="mensagem">Erro ao cadastrar os dados!</h2>';
        }
    } else {
        echo '<h2 class="mensagem">Dados não cadastrados!</h2>';
    }
?>

</body>
</html>
