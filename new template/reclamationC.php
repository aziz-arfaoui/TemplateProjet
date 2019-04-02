<?PHP
include "config.php";
class reclamationC {
/*function afficherReclamation ($reclamation){
		echo "Cin: ".$employe->getCin()."<br>";
		echo "Nom: ".$employe->getNom()."<br>";
		echo "Prénom: ".$employe->getPrenom()."<br>";
		echo "tarif heure: ".$employe->getTarifHoraire()."<br>";
		echo "nb heures: ".$employe->getNbHeures()."<br>";
	}
	function calculerSalaire($employe){
		echo $employe->getNbHeures() * $employe->getTarifHoraire();
	}
	*/function ajouterReclamation($reclamation){
		//$sql="insert into reclamation (id_client,id_motif,message,date,etat) values (:id_client,:id_motif,:message,:date,:etat)";
		$sql="INSERT INTO reclamation (id_client, id_motif, etat, message,date) VALUES (".$reclamation->getclient().",".$reclamation->getmotif().",'".$reclamation->getetat()."','".$reclamation->getsm()."','".$reclamation->getdate()."')";
        //echo $sql;
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $client=$reclamation->getclient();
        $motif=$reclamation->getmotif();
        $sm=$reclamation->getsm();
        $date=$reclamation->getdate();
        $etat=$reclamation->getetat();
		$req->bindValue(':id_client',$client);
		$req->bindValue(':id_motif',$motif);
		$req->bindValue(':message',$sm);
		$req->bindValue(':date',$date);
		$req->bindValue(':etat',$etat);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherReclamations($hi){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT id_reclamation, client.nomprenom, motif.motif, reclamation.etat, reclamation.message ,reclamation.date From reclamation, client , motif where reclamation.id_client=".$hi." and reclamation.id_client=client.id_client and reclamation.id_motif=motif.id_motif order by id_reclamation desc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function supprimerReclamation($id){
				$db = config::getConnexion();
				$sql0="insert into archive select * from reclamation where id_reclamation= :id";
				$req0=$db->prepare($sql0);
	        	$req0->bindValue(':id',$id);
                $req0->execute();

		$sql="DELETE FROM reclamation where id_reclamation= :id";
		echo $sql;
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
             }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	/*function modifierEmploye($employe,$cin){
		$sql="UPDATE employe SET cin=:cinn, nom=:nom,prenom=:prenom,nbHeures=:nbH,tarifHoraire=:tarifH WHERE cin=:cin";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$cinn=$employe->getCin();
        $nom=$employe->getNom();
        $prenom=$employe->getPrenom();
        $nb=$employe->getNbHeures();
        $tarif=$employe->getTarifHoraire();
		$datas = array(':cinn'=>$cinn, ':cin'=>$cin, ':nom'=>$nom,':prenom'=>$prenom,':nbH'=>$nb,':tarifH'=>$tarif);
		$req->bindValue(':cinn',$cinn);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':nbH',$nb);
		$req->bindValue(':tarifH',$tarif);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererEmploye($cin){
		$sql="SELECT * from employe where cin=$cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeEmployes($tarif){
		$sql="SELECT * from employe where tarifHoraire=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
*/
	}

?>