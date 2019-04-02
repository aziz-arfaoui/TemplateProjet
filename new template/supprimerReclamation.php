   
<?php
    include "reclamationC.php";
    $rec=$_GET["id_reclamation"];
    $reclamation=new reclamationC;
    $reclamation->supprimerReclamation($rec);
    header( 'Location:./reclamation.php' );

?>


