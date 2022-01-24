<?php
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
        }
?>
