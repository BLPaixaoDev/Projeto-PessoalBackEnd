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

    $id = $_GET["cod"];
    $excluir = "DELETE FROM tbamigos WHERE cod = '$id'";
    $executar = mysqli_query($conn, $excluir);

    if ($executar) {
        echo "<div class='mensagem'><h2>Amigo excluído com sucesso!</h2></div>";
        echo "<br/>";
        echo "<a href='../aposlogin.php'><i class='fas fa-arrow-left'></i> Voltar</a>";
    } else {
        echo "Erro ao excluir o amigo. Verifique os dados e tente novamente.";
    }
?>

</body>
</html>
