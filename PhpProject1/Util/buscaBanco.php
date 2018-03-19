<?php
include_once './Conn.php';
$loginuu = $_SESSION['email'];
$pwdd = $_SESSION['pwd'];

$res= "SELECT * FROM loginuser WHERE login = '$loginuu' AND senha ='$pwdd'";
$sqll = mysqli_query($conn, $res);


while ($linha = mysqli_fetch_array($sqll)){
    $nomeu= $linha['nome'];
    
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

