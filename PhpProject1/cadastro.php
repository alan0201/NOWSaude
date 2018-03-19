
<?php
session_start();
?>

<!DOCTYPE html>

<html>
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <title>Cadastro Usuario</title>

    </head>
    <body>


        <div class="jumbotron mx-auto"  style="height: 140px;">
            <div class="container" style="text-align: center">
                <h1 class="display-4 t-1 mx-auto  " style="width: 800px;" >Cadastro de Login</h1>

            </div>
        </div>

        <form class="mx-auto m-5 needs-validation" method="POST" action="<?php echo htmlspecialchars("conexao.php"); ?>"  style="width: 500px;" enctype="multipart/form-data" >
            <!-- <div class="form-control mx-auto" style="height: 60px;">
                 <p>Escolha uma Imagem para seu Perfil</p><br>
                 <input type="file" name="imagem"/><br>
 
             </div>-->
            <div>
                <label for="InputNome"><b>Nome Completo</b></label>
                <input type="text" class="form-control" name="nome" id="nome" value="" required>
            </div><br>
            <div class="form-group">
                <label for="exampleInputEmail1"><b>Login:</b></label><input type="text" class="form-control" name="login" id="login" value="" required autofocus>

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"><b>Senha:</b></label><input type="password" class="form-control" name="senha" id="senha" value="" required>

            </div>

            <div>
                <input type="submit" class="btn btn-primary btn-block btn-lg" value="Cadastrar" id="cadastrar" name="cadastrar"> 
            </div>
        </form>
        <div class="mx-auto" style="width: 300px;">
            <a href="loginUser.php" class="btn btn-secondary btn-block btn-lg">Já Tenho Uma Conta</a>
        </div>
    </body>

</html>

