<?php
session_start();
require_once('conexao/banco.php');

if(isset($_POST["submit"])){

    if(!empty($_POST["language"])){
        foreach($_POST["language"] as $language){
          echo '<p>'.$language.'</p>';
        }
}
}
?>