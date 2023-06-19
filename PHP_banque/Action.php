<?php

include_once 'titulaire.php';
include_once 'compte_bancaire.php';

class Action {
    private string $credit;
    private string $debiter; 
    private string $virement;

    private function __construct(string $credit, string $debiter, string $virement) {
        $this->credit = $credit;
        $this->debiter = $debiter;
        $this->virement = $virement;
    }
}

//il faudra que je fasse une function incremente des valeurs en function de si on l'appele ou pas 




?>