<?php 

if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['aut_id'])){
    die("Faça login para acessar seus cursos.<p><a href=\"login.php\">Entrar</a></p>");
}
?>