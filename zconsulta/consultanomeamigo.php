<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleuser.css">
    <title>Alterar Empresa</title>
</head>
<body>

    <?php
    include_once "../factory/conexao.php";
    $nome = $_POST["cxpesquisa"];
    $consultar = "select * from tbamigos where amigo = '$nome'";
    $executar = mysqli_query($conn, $consultar);

    if(mysqli_num_rows($executar) > 0) {
        $linha = mysqli_fetch_array($executar);
    } else {
        $linha = null;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleuser.css">
    <title>Consulta Amigo</title>
    <link rel="icon" href="img/icon.png" type="image/x-icon">
</head>
<body>
    <div class="container">
        <h2>Amigo(a) Consultado(a):</h2>
        <?php if ($linha): ?>
            <section>
                <label for="">Nome:</label>
                <input type="text" name="" value="<?php echo $linha['amigo']; ?>" readonly/>

                <label for="">E-mail:</label>
                <input type="e-mail" name="" value="<?php echo $linha['email']; ?>"readonly/>

                <label for="">Telefone:</label>
                <input type="text" name="" value="<?php echo $linha['telefone']; ?>"readonly/>

                <label for="">WhatsApp:</label>
                <input type="text" name="" value="<?php echo $linha['whats']; ?>"readonly/>

                <label for="">Data de Nascimento:</label>
                <input type="date" name="" value="<?php echo $linha['datanasc']; ?>"readonly/>

                <p>Deseja alterar seus dados?
                    <a href="../zalterar/ytelaconsultaamigo.php">Alterar</a> 
                </p>

                <p>Deseja excluir amigo(a)?<a href="../zdelete/excluiramigo.php?cod=<?php echo $linha['cod']; ?>" onclick="return confirm('Tem certeza que deseja excluir esse amigo?')">Excluir</a>
                </p>
            </section>
            </div>

        <?php else: ?>
            <div class='mensagem'><h2>O amigo(a) consultado(a) não existe. Verifique e tente novamente</h2></div>
        <?php endif; ?>
  


</body>
</html>
