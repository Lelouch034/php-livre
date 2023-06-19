<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo livre</title>
</head>
<body>
    <h1>Exercice PHP Livre </h1>
    <p>Vous êtes chargé(e) de créer un projet PHP orienté objet permettant de gérer des livres et leurs auteurs respectifsLes livres  sont  caractérisés  par  un  titre,  un  nombre  de  pages,  une  année  de  parution,  un  prix  et  un auteur. Un auteur est identifié par un nom et un prénom.Une méthode toStringsera appréciée dans chacune de vos classes.Vous   implémenterez   une   méthodeafficherBibliographiequi  permettra  d’afficher  la bibliographie d’un auteur:</p>
    <h2></h2>
</body>
</html>


<!-- ***********php******* -->
<?php
//création de la classe Auteur ou on va trouver:
class Auteur {
    //le nom et prénom de l'auteur
    private string $prenom;
    private string $nom;
    // je fais un __construct() pour initialiser les attribut en dehors de la classe
    public function __construct(string $prenom, string $nom) {
        // j'utilise $this-> pour initialiser les valeurs  
        $this->prenom = $prenom;
        $this->nom = $nom;
    }
    //la function __toString permet de dire a la classe comment réagir ? pas sur de la def la 
    public function __toString(): string {
        return $this->prenom . ' ' . $this->nom;
    }
}

//création de la classe livre ou on va trouver: 
class Livre {
    //le titre du livre, le nombre de page, la date de paruption, son prix, et son auteur avec la classe auteur
    private string $titre;
    private int $nbPages;
    private int $parution;
    private float $prix;
    private Auteur $auteur;
//ici j'aiencore fait un __construct() avec touts mes attributs
    public function __construct(string $titre, int $nbPages, int $parution, float $prix, Auteur $auteur) {
        $this->titre = $titre;
        $this->nbPages = $nbPages;
        $this->parution = $parution;
        $this->prix = $prix;
        $this->auteur = $auteur;
    }
    //la j'ai une fonction getAuteur() qui me permet de retur l'objet auteur ce qui veut dire que chaque instance de la classe livre a une référence a l'objet Auteur
    public function getAuteur(): Auteur {
        return $this->auteur;
    }  

    public function __toString(): string {
        return $this->titre . ' (' . $this->parution . '): ' . $this->nbPages . ' pages / ' . $this->prix . '$';
    }
}
//création de la classe bibliotheque ou on va trouver:
class Bibliotheque {
    //ici j'ai fait une propri livre que je vais définir comme un array juste apres 
    private array $livres;
    // c'ezst ici que je vais définir livre comme etant un array avec la fameuse __construct()
    // je le defini comme un array pour permettre de stcoker plus facilemetn les livres 
    public function __construct() {
        $this->livres = [];
    }
    //ici ajouterLivre() permet d'ajouter un livre a la bibliothèque 
    //on place $livre en parametre qui va representer le livre que le veut afficher
    //grace a ca le livre passé en parametre est ajouter au array $livre en utilisant $this->livres[] = $livre;
    public function ajouterLivre(Livre $livre) {
        $this->livres[] = $livre;
    }
    //la nous avons la function la plus important afficherBibliographie c'est elle qui vas afficher la bibliographie de l'auteur
    //en prametre elle prend l'objet auteur et commence par afficher un titre avec le nom de l'auteur 
    //avec $livre->getAuteur() === $auteur; je verifie si l'auteur correspond correspond a celui passer en paramétre 
    public function afficherBibliographie(Auteur $auteur) {
        echo 'BIBLIOGRAPHIE DE  ' . $auteur .  ':<br><br>';
        
        $foundBooks = array_filter($this->livres, function ($livre) use ($auteur) {
            return $livre->getAuteur() === $auteur;
        });
        foreach ($foundBooks as $livre) {
            echo $livre . '<br>';
        }
    }
}

//création de l'auteur 
$auteur1 = new Auteur('STEPHEN', 'KING');
$auteur2 = new Auteur('Stefdsfsfsewfwn', 'Kinewdsfsfwefg');
//ajouter valeur aux livres 
$livre1 = new Livre('Ca', 1138, 1986, 20.0, $auteur1);
$livre2 = new Livre('Simetierre', 374, 1983, 15.0, $auteur1);
$livre3 = new Livre('Le Fleau', 823, 1978, 14.0, $auteur1);
$livre4 = new Livre('Shining', 447, 1977, 16.0, $auteur1);

$livre5 = new Livre('truc', 1986, 1138, 20.0, $auteur2);
$livre6 = new Livre('Livre', 1983, 374, 15.0, $auteur2);
$livre7 = new Livre('bon bah un livre', 1978, 823, 14.0, $auteur2);
$livre8 = new Livre('pas ouf lui', 1977, 447, 16.0, $auteur2);

//création de la bibliotheque 
$bibliotheque = new Bibliotheque();

// la function pour ajouter chaque livres dans la bibliotheque 
$bibliotheque->ajouterLivre($livre1);
$bibliotheque->ajouterLivre($livre2);
$bibliotheque->ajouterLivre($livre3);
$bibliotheque->ajouterLivre($livre4);
$bibliotheque->ajouterLivre($livre5);
$bibliotheque->ajouterLivre($livre6);
$bibliotheque->ajouterLivre($livre7);
$bibliotheque->ajouterLivre($livre8);

//afficher la bibliogrraphie de l'auteur que je veut voir 
$bibliotheque->afficherBibliographie($auteur1);
?>
