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
    

    if (isset($_GET["nome"])) {
        $nome = mysqli_real_escape_string($conn, $_GET["nome"]);
        $excluir = "DELETE FROM tbcormecial WHERE comercio = '$nome'";
        $executar = mysqli_query($conn, $excluir);
        
        if ($executar) {
            echo "<div class='mensagem'><h2>Comércio excluído com sucesso!</h2></div>";
            echo "<br/>";
            echo "<a href='../aposlogin.php'><i class='fas fa-arrow-left'></i> Voltar</a>";
        } else {
            echo "Erro ao excluir o comércio. Verifique os dados e tente novamente.";
        }
    } else {
        echo "Nenhum nome fornecido para exclusão.";
        echo "<br/>";
        echo "<a href='../telacadcomercial.php'>Voltar</a>";
    }
?>

</body>
</html>
