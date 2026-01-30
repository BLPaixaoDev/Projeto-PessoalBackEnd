<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleuser.css">
    <title>Consulta Comércio</title>
    <link rel="icon" href="img/icon.png" type="image/x-icon">
</head>
<body>
    <?php
        include_once "../factory/conexao.php";

        $comercio = $_POST["cxpesquisa"];
        
        
        $consultar = "SELECT * FROM tbcormecial WHERE comercio = '$comercio'";
        $executar = mysqli_query($conn, $consultar);

        if (mysqli_num_rows($executar) > 0) {
            $linha = mysqli_fetch_array($executar);
        } else {
            $linha = null;
        }
    ?>

    <div class="container">
        <h2>Comércio Consultado(a):</h2>
        <?php if ($linha): ?>
            <section>
                <label for="">Nome:</label>
                <input type="text" name="" value="<?php echo htmlspecialchars($linha['nome']); ?>"readonly/>

                <label for="">Comércio:</label>
                <input type="text" name="" value="<?php echo htmlspecialchars($linha['comercio']); ?>"readonly/>

                <label for="">Telefone:</label>
                <input type="text" name="" value="<?php echo htmlspecialchars($linha['telefone']); ?>"readonly/>

                <label for="">WhatsApp:</label>
                <input type="text" name="" value="<?php echo htmlspecialchars($linha['whats']); ?>"readonly/>

                <p>Deseja alterar seus dados?
                    <a href="../zalterar/wtelaconsultacomercio.php">Alterar</a> 
                </p>

                <p>Deseja excluir esse comércio?
                    <a href="../zdelete/excluircomercio.php?nome=<?php echo urlencode($linha['comercio']); ?>" onclick="return confirm('Tem certeza que deseja excluir esse comércio?')">Excluir</a> 
                </p>
            
            </section>

        <?php else: ?>
            <div class='mensagem'><h2>O comércio consultado não existe.</h2></div>
        <?php endif; ?>
    </div>

</body>
</html>
