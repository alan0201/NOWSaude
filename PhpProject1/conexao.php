<?php

session_start();
include_once ('Conn.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = test_input($_POST['login']);
    $senha = test_input($_POST['senha']);
    $nome = test_input($_POST["nome"]);

    

      
    //if ($login == null || $senha == null) {
    //    diedie('Vazio : ' . mysql_error());
    // }
    // if ($imagem != NULL) {
    //     $nomeFinal = time() . '.jpg';
    //     if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
    //         $tamanhoImg = filesize($nomeFinal);
//
    //         $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));
    //     }
    // } else {
    //     echo"Você não realizou o upload de forma satisfatória.";
    // }
    $result_msg_login = "INSERT INTO loginuser(nome, login, senha) VALUES ('$nome','$login','$senha' )";
    $resulted_msg_login = mysqli_query($conn, $result_msg_login);
    header('Location: loginUser.php');
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
