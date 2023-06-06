<?php
include('protect.php')
?>
<?php
require_once('conexao/banco.php');


$cons_id = isset($_REQUEST['txt_cons_id']) ? $_REQUEST['txt_cons_id']: '';
$cons_nome_curso = isset($_REQUEST['txt_cons_nome_curso']) ? $_REQUEST['txt_cons_nome_curso']: '';
$cons_descricao = isset($_REQUEST['txt_cons_descricao']) ? $_REQUEST['txt_cons_descricao']: '';
$cons_professor = isset($_REQUEST['txt_cons_professor']) ? $_REQUEST['txt_cons_professor']: '';
$cons_duracao = isset($_REQUEST['txt_cons_duracao']) ? $_REQUEST['txt_cons_duracao']: '';
$cons_status = isset($_REQUEST['txt_cons_status']) ? $_REQUEST['txt_cons_status']: '';





  $sql = "select * from tb_curso 
  where 
    cur_id like '%".$cons_id."%'AND
    cur_nome_curso like '%".$cons_nome_curso."%'AND
    cur_descricao like '%".$cons_descricao."%'AND
    cur_professor like '%".$cons_professor."%'AND
    cur_duracao like '%".$cons_duracao."%'AND
    cur_status like '%".$cons_status."%'
 ";

$sql = mysqli_query($con, $sql) or die ("Erro na sql!") ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Painel:</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    .btn-ghost-info {
    color: #63c2de;
    background-color: transparent;
    background-image: none;
    border-color: transparent;

}
.btn-ghost-danger {
    color: #f86c6b;
    background-color: transparent;
    background-image: none;
    border-color: transparent;
}

.btn-sm, .btn-group-sm > .btn {
    padding: 0.25rem 0.5rem;
    font-size: 0.765625rem;
    line-height: 1.5;
    border-radius: 0.2rem;
}
.btn {
    transition: none;
}
ul{
    display: flex;
    list-style: none;
    margin-top: 1.2rem;
    
}
a.nav_link{
    display: flex;
    text-decoration: none;
    color: black;
    margin-left: 15vw;
    font-size: 1rem;
    padding: 0px 1px;
    margin-top: 3px;
    color: white;
}
.dropdown{
  display: flex;
    margin-left: 1vw;
}
#pag_atual{
    text-decoration: none;
    text-underline-position: under;
    border-bottom: 2px solid black;
}


    </style>


  <script type="text/javascript">
    
        function excluir_registro( ) {
            if( !confirm('Deseja realmente excluir este registro?') 
        ){
            if( window.event)
                window.event.returnValue=false;
            else
                e.preventDefault();
         }
      }
  </script>
  
</head>
<body>

<?php include('components/navbar.php') ?>
   
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       
    

      <!-- SidebarSearch Form -->
     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
      
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="container">
        <div class="float-left">
        <a href="login.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="15" height="15"><path d="M512 256A256 256 0 1 0 0 256a256 256 0 1 0 512 0zM231 127c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-71 71L376 232c13.3 0 24 10.7 24 24s-10.7 24-24 24l-182.1 0 71 71c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L119 273c-9.4-9.4-9.4-24.6 0-33.9L231 127z"/></svg></a>
           <span class="breadcrumb-item"><a href="backup.php">Backup</a></span>
     </div>
     <div class=" float-right">
          <a href="javascript:void(0)" class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#exampleModal6" tabindex="0"><i class="fa fa-plus"></i> Novo Curso</a>
      </div>
     </div>
      <!-- /.container-fluid -->
      </div>
    </section>

    <!-- Main content -->
            <!-- /.card -->
            

            <div class="container">

<div class="card">
<div class="card-header">
<form>
    <h5 class="card-title">Cursos cadastrados:<button type="submit" name="submit" value="submit" class="btn btn-sm btn-ghost-danger" title="Excluir">
           <?php echo" <a href=\"deletar_curso.php?cur_id=\" type=\"button\" class=\"btn btn-sm btn-ghost-danger\" >Remover <i class=\"fa fa-close\" style=\"font-size: 16px;\"></i>  </a>"?>
           </button>
           
           <button type="submit" name="submit" value="submit" class="btn btn-sm btn-ghost-danger" title="Excluir">
           <?php echo" <a href=\"deletar_curso.php?cur_id=\" type=\"button\" class=\"btn btn-sm btn-ghost-info\" >Exportar <i class=\"fa fa-floppy-o\" style=\"font-size: 16px;\"></i>  </a>"?>
           </button>
     </h5>
            
</div>

   <br>         
      
              
                  <?php while ($dados = mysqli_fetch_array($sql)) { ?>

                  <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
                  
                  <a class="navbar-brand" href="#">
                  <p style="padding: 0.5rem;"><input class="form-check-input" type="checkbox" id="checkExcluir" value="curso" onchange="formExcluir();" style="font-size: 15px;"><?php echo $dados['cur_id']; ?>- <?php echo $dados['cur_nome_curso']; ?>
                  
                  <i class="fa fa-user-plus" style="font-size:20px"></i>
                  
                 
                  <br>
                  <h6>Descrição:<span> <?php echo $dados['cur_descricao']; ?></span></h6>
                  <h6>Professor:<span>   <?php echo $dados['cur_professor']; ?></span></h6>
                  <h6>Duração:<span>    <?php echo $dados['cur_duracao']; ?></span></h6>
                  <h6>Status do curso:<span>  

                <?php if($dados['cur_status'] <> '0'){
                 echo '<span class="badge rounded-bottom bg-success"><strong>Ativo</strong></span>';
                    } 
                    if($dados['cur_status'] == '0'){
                      echo '<span class="badge rounded-bottom bg-warning"><strong>Suspenso</strong></span>';
                    }
                   
                    ?></span></h6>

                  </a>
              <button type="button" class="btn btn-sm btn-ghost-info" data-toggle="modal" data-target="#exampleModal" title="Editar"
              data-whateverid="<?php echo $dados['cur_id']; ?>"
              data-whatevernomecurso="<?php echo $dados['cur_nome_curso']; ?>"
              data-whateverdescricao="<?php echo $dados['cur_descricao'];  ?>"
              data-whateverprofessor="<?php echo $dados['cur_professor']; ?>"
              data-whateverduracao="<?php echo $dados['cur_duracao']; ?>"
              data-whateverstatus="<?php echo $dados['cur_status']; ?>">
                
              <i class="fa fa-edit" style="font-size: 16px;"></i>
            
              </button>
         
            </nav>
            </p>
            </form>
          <br>
    <?php } ?>
    <?php include("components/modal_atualizar.php"); ?>
     </div>
    </div>
</div> 



      
        
              <!-- /.card-body -->
           



<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>-->
<!-- DataTables  & Plugins 
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../plugins/jszip/jszip.min.js"></script>
<script src="../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>-->
<!-- AdminLTE App -->

<!-- AdminLTE for demo purposes -->

<!-- Page specific script -->

<script>

var search = document.getElementById('pesquisa');


search.addEventListener("keydown", function(event){
  if (event.key === "Enter")
  {
    searchData();
  }
});

function searchData()
{
   window.location = 'cliente.php?search='+search.value; 
}


</script>
<script type="text/javascript">
$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipientid = button.data('whateverid')
  var recipientnomecurso = button.data('whatevernomecurso')
  var recipientdescricao = button.data('whateverdescricao')
  var recipientprofessor = button.data('whateverprofessor')
  var recipientduracao = button.data('whateverduracao')
  var recipientstatus = button.data('whateverstatus')
// Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('Editar de ' + recipientnomecurso) 
  modal.find('#recipient-id').val(recipientid)
  modal.find('#recipient-nome-curso').val(recipientnomecurso)
  modal.find('#recipient-descricao').val(recipientdescricao)
  modal.find('#recipient-professor').val(recipientprofessor)
  modal.find('#recipient-duracao').val(recipientduracao)
  modal.find('#recipient-status').val(recipientstatus)
})
</script>


</body>
</html>
