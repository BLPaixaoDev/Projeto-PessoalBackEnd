
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
        $comercio = $_POST["cxcomercio"];
        $telefone = $_POST["cxtelefone"];
        $whats = $_POST["cxwhats"];
        $sql = "insert into tbcormecial(nome,comercio,telefone,whats)
        values('$nome','$comercio','$telefone','$whats')";
        $query = mysqli_query($conn,$sql);
        echo '<a href="../aposlogin.php" class="btn-voltar"><i class="fas fa-arrow-left">Dados cadastrados com sucesso!</h2>';
    }
    else
    {
        echo '<h2 class="mensagem">dados não cadastrados!</h2>';
    }
?>

</body>
</html>