<?php

session_start();
if(!isset($_SESSION['email']) ||!isset($_SESSION['pwd'])){
    header("Location: loginUser.php");
    include 'logout.php';
exit;
}
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

