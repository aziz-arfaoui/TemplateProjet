<?PHP
include "reclamationC.php";
include "reclamation_Class.php";
session_start();
if (isset($_POST['selectMotif']) and isset($_POST['Reclamation'])){
$req=new Reclamation($_SESSION['login'], $_POST['selectMotif'],$_POST['Reclamation'],date("Y-m-d"),"recu");

$req2c=new reclamationC();
$req2c->ajouterReclamation($req);
header('Location: reclamation.php');	
}
else
{
	echo "vérifier les champs";
}
//*/

?>