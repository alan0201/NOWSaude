<?php
/*session_start();

include_once './Conn.php';
$email= filter_input(INPUT_POST, 'userEmail', FILTER_SANITIZE_STRING);
$result_usuario = "SELECT * FROM loginuser WHERE login = '$email' LIMIT 1";
$resultado_usuario = mysqli_query($conn, $result_usuario);
if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
    $userName= filter_input(INPUT_POST, 'userName', FILTER_SANITIZE_STRING);
    $_SESSION['userName'] = $userName;
    if(!isset($_SESSION['userName'])){
        include ('./restrito.php');
    }else{
        $resultado = 'LogGoogle.php';
        echo $resultado;
    }
    
    
}else{
    $resultado = "erro";
    echo (json_encode($resultado));
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

