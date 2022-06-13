<!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c3ed5240c9.js" crossorigin="anonymous" defer></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthForMe</title>
    <link rel="stylesheet" href="css/style_ajuda.css">
    <link rel="stylesheet" href="css/style2_ajuda.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c3ed5240c9.js" crossorigin="anonymous" defer></script>
    <!-- Inclusão do jQuery-->
    <script src="http://code.jquery.com/jquery-1.11.1.js"></script>
    <!-- Inclusão do Plugin jQuery Validation-->
    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>
    <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
</head>
<body>
<?php
    require('db.php');
    // Inserindo valores no banco de dados.
    if (isset($_REQUEST['nome'])) {

        $nome = stripslashes($_REQUEST['nome']);
        $nome = mysqli_real_escape_string($con, $nome);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $comentario = stripslashes($_REQUEST['comentario']);
        $comentario = mysqli_real_escape_string($con, $comentario);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `comentarios` (nome, comentario, email, create_datetime)
                     VALUES ('$nome', '$comentario', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<fieldset>
            <div class='container-flex'>
                  <h3>Comentario enviado com sucesso.</h3><br/>
                  <p class='link'>Clique aqui para continuar <a href='../index.html'>Home</a></p>
                  </div>";
        } else {
            echo "<div class='container-flex'>
                  <h3>Ocorreu um erro.</h3><br/>
                  <p class='link'>Clique aqui para voltar ao Inicio <a href='../index.html'>Home</a> again.</p>
                  </div>";
        }
    } else {
?>



<header>
 
 <div class="container-flex">
             <div class="conteudo">
                 <h1>Entre em contato conosco</h1>
 
                 <form class="form" action="" method="post">
                     <fieldset>
                       <legend>Por favor preencha os dados</legend>
                       <p>
                         <label for="cnome">Nome Completo:</label>
                         <input class="field" type="text" id="cnome" name="nome" required minlength="2">
                       </p>
                       <p>
                         <label for="cemail">E-mail*:</label>
                         <input class="field" type="email" id="cemail" name="email" required >
                       </p>
                       <p>
                         <label for="ccomentario">Seu comentário:</label><br>
                         <textarea id="ccomentario" name="comentario" required rows="4" cols="50" ></textarea>
                       </p>
                       <input type="submit" name="submit" value="Casdastrar" class="login-button">
                     </fieldset>
                   </form>
             </div>
            <div class="conteudo2">
                <img class="img-conteudo" src="img/Banner-ep2 (1).png" alt="">
            </div>
         </div>
 
     </header>

<?php
    }
?>

</body>
</html>