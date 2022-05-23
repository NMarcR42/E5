<?php
require_once 'DBConnex.php';
class PlatProposeDAO {
	
	
    public static function ajouter($idPlat , $idService, $Date_P, $quantiteeProposee, $prixVente){
        try{
            $sql = "insert into platproposer(idPlat, idService, Date_P, quantiteeProposee, prixVente) VALUES(:idPlat,:idService,:Date_P, :quantiteeProposee, :prixVente);" ;
            $requetePrepa = DBConnex::getInstance()->prepare($sql);
            $requetePrepa->bindParam(":categorie", $idPlat);
            $requetePrepa->bindParam(":idService", $idService);
			$requetePrepa->bindParam(":Date_P", $Date_P);
            $requetePrepa->bindParam(":quantiteeProposee", $quantiteeProposee);
			$requetePrepa->bindParam(":prixVente", $prixVente);
            $reponse = $requetePrepa->execute();
			
        }catch(Exception $e){
            $reponse = 0;
        }
        return $reponse;
    }
	public static function modifier($idCategorie , $nomPlat, $descriptifPlat){
        try{
			//$sql="select idPlat from plat where nomPlat = :nom;";
			//$sql2="select idCategorie from categorie_plat where ";
			
			$sql3="update plat set idCategorie= :ncategorie, nomPlat= :nnom, descriptifPlat= :ndescriptif where idPlat= 15;";
           
            $requetePrepa = DBConnex::getInstance()->prepare($sql3);
            $requetePrepa->bindParam(":ncategorie", $idCategorie);
            $requetePrepa->bindParam(":nnom", $nomPlat);
			$requetePrepa->bindParam(":ndescriptif", $descriptifPlat);
            $reponse = $requetePrepa->execute();
        }catch(Exception $e){
            $reponse = "";
        }
        return $reponse;
    }

	public static function supprimer($nomPlat){
        try{		
            $sql = "delete from plat where nomPlat = :nom;" ;
            $requetePrepa = DBConnex::getInstance()->prepare($sql);
            $requetePrepa->bindParam(":nom", $nomPlat);
            $reponse = $requetePrepa->execute();
        }catch(Exception $e){
            $reponse = 0;
        }
        return $reponse;
    }

    public static function listeNomPlat(){
        
        try{
            $sql = "select nomPlat from plat order by nomPlat";
            
            $requetePrepa = DBConnex::getInstance()->prepare($sql);
            $requetePrepa->execute();
			$reponse = $requetePrepa->fetchAll(PDO::FETCH_ASSOC);
        }catch(Exception $e){
            $reponse = 0;
        }
        return $reponse;
    }

    public static function listeService(){
        
        try{
            $sql = "select creneau from service";
            
            $requetePrepa = DBConnex::getInstance()->prepare($sql);
            $requetePrepa->execute();
			$reponse = $requetePrepa->fetchAll(PDO::FETCH_ASSOC);
        }catch(Exception $e){
            $reponse = 0;
        }
        return $reponse;
    }

}