<?php

include_once 'compte_bancaire.php';
include_once 'action.php';

class Titulaire {
    private string $nom;
    private string $prenom;
    private string $dtNaissance;
    private string $ville;
    private array $ensemble_Compte;

    public function __construct(string $nom, string $prenom, string $dtNaissance, string $ville, string $ensemble_Compte ) {
        $this->nom = $nom . "<br>";
        $this->prenom = $prenom . "<br>";
        $this->dtNaissance = $dtNaissance . "<br>";
        $this->ville = $ville . "<br>";
        $this->ensemble_Compte = $ensemble_Compte . "<br>";
    }

    public function __toString(): string {
        return $this->nom . ' ' . $this->prenom . '' . $this->dtNaissance . '' . $this->ville . '' . $this->ensemble_Compte;
    }

    public function getEnsemble_Compte() {
        return $this->ensemble_Compte;
    }
    //a partir du momment ou ca sera un tableau je pourrais ajouter un element a l'interieur
    // avec une function ajouter compte par exemple ou a chaque fois qu'elle est appelere elle s'augmente de 1 
    //donc pour ca il faut que ensemble de compte devienne un tableau il faut que je regarde dans un livre je l'avait deja fait 
    
    //pour la solde initiale il vas falloir que je le deffinisse apres 
    //donc en gros pour faire simple en gros i faut une function qui afffiche toute lss infos du titulaire demander et du nombre de compte quil possede 
    public function infoTitulaire() {
        echo "Nom :" . $this->nom;
        echo "Prenom :" . $this->prenom;
        echo "Date de naissance :" . $this->dtNaissance;
        echo "Ville :" . $this->ville;
        echo "Ensemble de comptes :" . $this->ensemble_Compte;
    }
}
//modifier ensemble de compte en le trancsforment en array 
$titulaire1 = new Titulaire('Mignot', 'Esteban','15 decembre 2003', 'colmar', $ensemble_Compte);

?>