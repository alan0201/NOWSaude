<?php
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="google-signin-client_id" content="840322468161-6qqkcufpep0p1uvqm8dama3h6vta5j4p.apps.googleusercontent.com">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <title>Login</title>
    </head>
    <body>
        <div class="starter-template">
            <div class="container">
                <h1 class="display-4 mx-auto " style="width: 1200px;" >Faça seu Login e Desfrute de Todos os Beneficios</h1>

            </div>
        </div>
        <p class="text-center text-danger alert-warning mx-auto " id='msg' style="width: 400px;"><b>

                <?php
                if (isset($_SESSION['loginErro'])) {
                    echo $_SESSION['loginErro'];
                    unset($_SESSION['loginErro']);
                }
                ?>
            </b>
        </p>

        <form class="mx-auto m-5" style="width: 300px;" method="POST" action="<?php echo htmlspecialchars("validacaoLogin.php"); ?>" enctype="multipart/form-data">
            
            
            <div class="form-group">
                <label for="exampleInputEmail1">E-mail ou CPF</label>
                <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email ou CPF">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" >Senha</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Senha">
            </div>
            <div class="g-recaptcha" data-sitekey="6LcHc00UAAAAALjsPKubinKWHSTkPcEikvJvub6N"></div><br>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg" id="loginB" name="loginB">Login</button>

            </div>

        </form>

        <div class="mx-auto" style="width: 300px;">
            <a href="cadastro.php" class="btn btn-secondary btn-block btn-lg">Criar Conta</a>
        </div> 



 <!--<script>
     function onSignIn(googleUser) {
     var profile = googleUser.getBasicProfile();
     var userID = profile.getId();
     var userName = profile.getName();
     var userImageUrl = profile.getImageUrl();
     var userEmail = profile.getEmail();
     var userToken = googleUser.getAuthResponse().id_token;
     if (userName !== ""){
         var dados = {
             userID: userID,
             userName:userName,
             userImageUrl:userImageUrl,
             userEmail:userEmail
             };
             $.post('validaG.php', dados, function(retorna){
                 if(retorna === '"erro"'){
                     var msg ="Usuário não encontrado com esse email";
                     document.getElementById('msg').innerHTML = msg;
                 }else{
                     window.location.href = retorna;
                 }
             
         });
     } else{
         var msg = "Usuário não encontrado!";
         document.getElementById('msg').innerHTML = msg;
     }

    
}

 </script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->

    </body>
</html>
