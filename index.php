<?php
    include('config.php');

    date_default_timezone_set('America/Sao_Paulo');
    $data=date('y-m-d h:i:s');
    echo $data;
    if(isset($_POST['acao'])){
    date_default_timezone_set('America/Sao_Paulo');
    $nome=$_POST['nome'];
    $usuario=$_POST['usuario'];
    $senha=$_POST['senha'];
    $email=$_POST['email'];
    $momento_registro=date('y-m-d h:i:s');
    $pdo=new PDO('mysql:host=localhost;dbname=animepool','root','');
    $sql=$pdo->prepare("INSERT INTO `usuarios` VALUES(null,?,?,?,?,?) ");
    $sql->execute(array($nome,$usuario,$senha,$email,$momento_registro));
    echo 'Usuario cadastrado com sucesso';
    }
?>
<!DOCTYPE html>
<html>
    <head><title>Cadastro de Usuario</title></head>
    <body>
        <form method="post">
            <input type="text" name="nome" required/>
            <input type="text" name="usuario" required/>
            <input type="password" name="senha" required/>
            <input type="text" name="email" required/>
            <input type="submit" name="acao" value="Enviar"/>
        </form>
    </body>
</html>