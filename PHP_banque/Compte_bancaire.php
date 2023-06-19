<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo banque</title>
</head>
<body>
    <h1>EXERCICE BANQUE</h1>
</body>
</html>

<?php

include_once 'titulaire.php';
include_once 'action.php';


class Compte_bancaire {
    private string  $libellé;
    private int $soldeInitial;
    private int $device_Monétaire;
    private string $titulaire_Unique;
    
     // je fais un __construct() pour initialiser les attribut en dehors de la classe
    public function __construct(string $libellé, int $soldeInitial, int $device_Monétaire, string $titulaire_Unique) {
        $this->libellé = $libellé;
        $this->soldeInitial = $soldeInitial;
        $this->device_Monétaire = $device_Monétaire;
        $this->titulaire_Unique = $titulaire_Unique;
    }
    public function __toString(): string {
        return $this->libellé . ' ' . $this->soldeInitial . '' . $this->device_Monétaire . '' . $this->titulaire_Unique;
    }

    //revoir comment jai fait sur voiture il faut juste chabger la valeur dans las fonction 
    //pour le titulaire unique je pense qu'il faut que ce soit mon titulaire de ma classe Titulaire 
}

//identifier peut etre faire une method ou on remplit le solde initia avec une valeur au pif 








?>