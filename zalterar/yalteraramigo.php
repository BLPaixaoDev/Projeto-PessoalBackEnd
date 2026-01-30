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


if(isset($_POST["cxcod"]) && isset($_POST["cxamigo"]) && isset($_POST["cxemail"]) && isset($_POST["cxtelefone"]) && isset($_POST["cxwhats"]) && isset($_POST["cxnascimento"])) {
    $id = $_POST["cxcod"];
    $nome = $_POST["cxamigo"];
    $email = $_POST["cxemail"];
    $telefone = $_POST["cxtelefone"];
    $whats = $_POST["cxwhats"];
    $nascimento = $_POST["cxnascimento"];


    $alterar = "UPDATE tbamigos SET 
                amigo = '$nome',
                email = '$email',
                telefone = '$telefone',
                whats = '$whats',
                datanasc = '$nascimento'
                WHERE cod = '$id'";

    $executar = mysqli_query($conn, $alterar);
    if($executar) {
        echo "<div class='mensagem'><h2>Dados Alterados com Sucesso!</h2></div>";
    } else {
        echo "<div class='mensagem'><h2>Erro ao alterar dados: </h2></div>" . mysqli_error($conn);
    }
} else {
    echo "Por favor, preencha todos os campos.";
}

?>

<a href="ytelaconsultaamigo.php" i class='fas fa-arrow-left'>Voltar</a>

</body>
</html>
