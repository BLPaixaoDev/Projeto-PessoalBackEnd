<?php
require_once "../factory/conexao.php";
session_start();

if (isset($_SESSION["login"]) && isset($_SESSION["senha"])) {
    header("Location: ../aposlogin.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["cxemail"];
    $senha = $_POST["cxsenha"];

    $sql = "SELECT * FROM tbusuario WHERE email = ? AND senha = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        error_log("Erro na preparação da consulta: " . $conn->error);
        header("Location: ../login.php?erro=2");
        exit();
    }

    $stmt->bind_param("ss", $email, $senha);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        $_SESSION["usuario"] = $row["nome"];
        $_SESSION["caminhoDaImagem"] = $row["imagem"];
        $_SESSION["login"] = $row["email"];
        $_SESSION["senha"] = $row["senha"];

        header("Location: ../aposlogin.php");
        exit();
    } else {
        header("Location: ../login.php?erro=1");
        exit();
    }
    
    $stmt->close();
}

$conn->close();
?>
