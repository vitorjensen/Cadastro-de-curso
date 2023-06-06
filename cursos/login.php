<?php
require_once('banco_login.php');



if(isset($_POST['aut_nome_completo']) or isset($_POST['aut_email']) or isset($_POST['aut_senha'])){

  if(strlen($_POST['aut_nome_completo']) == 0) {
   // echo "Preencha com seu nome cadastrado";
  } else if (strlen($_POST['aut_email']) == 0){
   // echo "Preencha com seu email cadastrado";
  }else if (strlen($_POST['aut_senha']) == 0){
    
  }else{

    $nome = $mysqli->real_escape_string($_POST['aut_nome_completo']);
    $email = $mysqli->real_escape_string($_POST['aut_email']);
    $senha = $mysqli->real_escape_string($_POST['aut_senha']);

    $sql_code = "SELECT * FROM tb_autenticacao WHERE aut_nome_completo = '$nome' AND aut_email = '$email' AND aut_senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução SQL:" . $mysqli->error);

    $quantidade = $sql_query->num_rows;

    if($quantidade == 1){
      $usuario = $sql_query->fetch_assoc(); //o assoc coloca em um vetor
  
      if(!isset($_SESSION)){
        session_start();
      }

      $_SESSION['aut_id'] = $usuario['aut_id'];
      $_SESSION['aut_nome_completo'] = $usuario['aut_nome_completo'];
      $_SESSION['aut_email'] = $usuario['aut_email'];
      $_SESSION['aut_senha'] = $usuario['aut_email'];

      header("Location: consulta.php");
    } else {
     //echo "Erro ao logar, dados incorretos";
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Autenticação:</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>
<body style="background-color: whitesmoke;">
<br>
<br>
<br>
    <div class="container" style="width: 400px;">
        <div class="card">
<div class="card-body login-card-body" >
            <div class="container">
            <p class="login-box-msg text-center">Faça log-in para iniciar uma sessão!</p>
            <br>
            <?php
            if(isset($_POST['aut_nome_completo']) or isset($_POST['aut_email']) or isset($_POST['aut_senha'])){
              if(strlen($_POST['aut_nome_completo']) & (strlen($_POST['aut_email']) & (strlen($_POST['aut_senha']))==0)) {
                echo ("<div class=\"alert alert-danger\" role=\"alert\">Preencha os campos necessários!</div>");
              }
              if(strlen($_POST['aut_nome_completo']) == 0) {
                echo ("<div class=\"alert alert-danger\" role=\"alert\">Preencha com seu nome cadastrado!</div>");
              } else if (strlen($_POST['aut_email']) == 0){
                echo ("<div class=\"alert alert-danger\" role=\"alert\">Preencha com seu Email cadastrado!</div>");
              }else if(strlen($_POST['aut_senha'])== 0){
                echo ("<div class=\"alert alert-danger\" role=\"alert\">Preencha com sua senha cadastrada!</div>");
              }else{
                echo ("<div class=\"alert alert-danger\" role=\"alert\">Erro ao logar, dados incorretos!</div>");
              }
         
            }
            ?>
            <br>
            <form  action="" method="POST">
                <div class="form-group">
                  
                    <input type="text" class="form-control" id="aut_nome_completo" name="aut_nome_completo" placeholder="Nome:" style="font-size: 16px;">
                   <br>
                    <input type="text" class="form-control" id="aut_email" name="aut_email" placeholder="Email:" style="font-size: 16px;">
                    <br>
                    <input type="password" class="form-control" id="aut_senha" name="aut_senha" placeholder="Senha:" style="font-size: 16px;">
            <br>
            <div class="float-left">
            <input type="checkbox" id="remember">
            <label for="remember">
            Lembre-me
            </label>
            </div>
            </div>
<br>
            <div class="footer" style="text-align: center;">
            <button type="submit" value="Entrar" name="login" id="login" class="btn btn-primary" >
                    Entrar
                    </button>
                    
                    <div>
            
                    <br>
                    <a ></a>
            </div>
                </form>
                </div>
                </div>
                </div>
</body>
</html>