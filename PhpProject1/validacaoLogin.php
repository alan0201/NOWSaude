<?php

session_start();

include_once ('Conn.php');



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ((isset($_POST['email'])) && (isset($_POST['password']))) {
        $usua = mysqli_real_escape_string($conn, $_POST['email']);
        $pwd = mysqli_real_escape_string($conn, $_POST['password']);
        /* $email = filter_input(INPUT_POST, 'userEmail', FILTER_SANITIZE_STRING);
          $result_usuario = "SELECT * FROM loginuser WHERE login = '$email' LIMIT 1";
          $resultado_usuario = mysqli_query($conn, $result_usuario);
          if (($resultado_usuario) AND ( $resultado_usuario->num_rows != 0)) {
          $userName = filter_input(INPUT_POST, 'userName', FILTER_SANITIZE_STRING);
          $_SESSION['userName'] = $userName;
          if (!isset($_SESSION['userName'])) {
          include ('./restrito.php');
          } else {
          $resultado = 'telaPaciente.php';
          echo $resultado;
          }
          } else {
          $resultado = "erro";
          echo (json_encode($resultado));
          } */
        
        $response = $_POST["g-recaptcha-response"];
	$url = 'https://www.google.com/recaptcha/api/siteverify';
	$data = array(
		'secret' => '6LcHc00UAAAAAG_uscHlfb1-yQLG8fQ8c-FYslnT',
		'response' => $_POST["g-recaptcha-response"]
	);
	$options = array(
		'http' => array (
			'method' => 'POST',
			'content' => http_build_query($data)
		)
	);
	$context  = stream_context_create($options);
	$verify = file_get_contents($url, false, $context);
	$captcha_success=json_decode($verify);
	


        $sql = "SELECT * FROM loginuser WHERE login ='$usua' and senha ='$pwd' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $resultados = mysqli_fetch_assoc($result);
        if (empty($resultados)) {
            $_SESSION['loginErro'] = "Usuário ou senha invalida";
            header("Location:loginUser.php");
        }else if($captcha_success->success==false){
            $_SESSION['loginErro']="Você é um robo, cai fora!";
            header("Location:loginUser.php");
        } elseif (isset($resultados) && $captcha_success->success==true) {
            $_SESSION['email'] = $usua;
            $_SESSION['pwd'] = $pwd;
            header("Location:telaPaciente.php");
        } else {
            $_SESSION['loginErro'] = "Usuário ou senha invalida";
            header("Location:loginUser.php");
        }
    } else {
        $_SESSION['loginErro'] = "Usuário ou senha invalida";
        header("Location:loginUser.php");
    }
}





/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

