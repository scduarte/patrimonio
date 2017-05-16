<?php  
include "conexao.php"; 


$usuario  = $_REQUEST ['usuario'];
$senha    = md5($_REQUEST ['senha']);

//echo print_r($_REQUEST); die;

$consulta = $pdo->query($c="SELECT * FROM ead_usr WHERE login like '$usuario' and senha = '$senha'");
//echo $c; die;
$row = $consulta->rowCount();

if($row > 0){ 
session_start();
$_SESSION['usuario'] = $usuario;
$_SESSION['senha'] = $senha;

?>

<script language= "JavaScript">
location.href="index.php";
</script>	

<?php 
}
else { 
    unset ($_SESSION['usuario']);
	unset ($_SESSION['senha']);
?>
<script language= "JavaScript">
location.href="login.php";
</script>
<?php }
?>
