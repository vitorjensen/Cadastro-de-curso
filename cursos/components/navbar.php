<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand  text-white" href="#"><i class="fa fa-bars" style="font-size:24px"></i></a>
  <a class="nav-link text-white" href="#">Usuários</a>
  <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cursos</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Meus cursos</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="suspensos/cursos_suspensos.php">Suspensos</a>
        </div>
      </li>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-right: 4.2rem;">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
      </li>
      
    </ul>
    <form class="form-inline my-1 my-lg-0">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php if(isset($_SESSION['aut_id'])){echo $_SESSION['aut_nome_completo']; }?></a>
        <div class="dropdown-menu dropdown-menu-right">
       
             <a href="servico.php" class="dropdown-item dropdown-footer"><i class="fa fa-gear" style="font-size:20px;"></i> Perfil</a>
           
            
            
        
          
          <div class="dropdown-divider"></div>
         <a href="logout.php" class="dropdown-item dropdown-footer"><i class="fa fa-sign-out" style="font-size:20px"></i> Sair</a> 
          
         
        </div>
      </li>
      <i class="fa fa-user-circle text-white" style="font-size:24px"></i>
      
    </form>
  </div>
</nav>