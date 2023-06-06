<?PHP
require_once("conexao/banco.php");

$id 	          = $_REQUEST['txt_codigo'];

$id               = $_REQUEST['txt_codigo'];
$nome_curso       = $_REQUEST['txt_nome_curso'];
$descricao        = $_REQUEST['txt_descricao'];
$professor        = $_REQUEST['txt_professor'];
$duracao          = $_REQUEST['txt_duracao'];
$status           = $_REQUEST['txt_status'];

$sql = "update tb_curso set 
					cur_nome_curso = '$nome_curso',  
					cur_descricao = '$descricao', 
					cur_professor = '$professor',
					cur_duracao = '$duracao',
					cur_status = '$status'  
				where 
				cur_id = '$id'";
								
mysqli_query($con, $sql) or die ("Erro na sql!") ;

header("Location: consulta.php");
?>