<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo livre</title>
</head>
<body>
    <h1>Exercice Livre </h1>
    <p>Vous êtes chargé(e) de créer un projet PHP orienté objet permettant de gérer des livres et leurs auteurs respectifsLes livres  sont  caractérisés  par  un  titre,  un  nombre  de  pages,  une  année  de  parution,  un  prix  et  un auteur. Un auteur est identifié par un nom et un prénom.Une méthode toStringsera appréciée dans chacune de vos classes.Vous   implémenterez   une   méthodeafficherBibliographiequi  permettra  d’afficher  la bibliographie d’un auteur:</p>
    <h2></h2>
</body>
</html>


<!-- ***********php******* -->
<?php
class Auteur {
    private string $prenom;
    private string $nom;

    public function __construct(string $prenom, string $nom) {
        $this->prenom = $prenom;
        $this->nom = $nom;
    }

    public function __toString(): string {
        return $this->prenom . ' ' . $this->nom;
    }
}

class Livre {
    private string $titre;
    private int $nbPages;
    private int $parution;
    private float $prix;
    private Auteur $auteur;

    public function __construct(string $titre, int $nbPages, int $parution, float $prix, Auteur $auteur) {
        $this->titre = $titre;
        $this->nbPages = $nbPages;
        $this->parution = $parution;
        $this->prix = $prix;
        $this->auteur = $auteur;
    }

    public function getAuteur(): Auteur {
        return $this->auteur;
    }

    public function __toString(): string {
        return $this->titre . ' (' . $this->parution . '): ' . $this->nbPages . ' pages ' . $this->prix . '$';
    }
}

class Bibliotheque {
    private array $livres;

    public function __construct() {
        $this->livres = [];
    }

    public function ajouterLivre(Livre $livre) {
        $this->livres[] = $livre;
    }

    public function afficherBibliographie(Auteur $auteur) {
        echo 'Bibliographie de ' . $auteur . ':<br>';
        $foundBooks = array_filter($this->livres, function ($livre) use ($auteur) {
            return $livre->getAuteur() === $auteur;
        });
        foreach ($foundBooks as $livre) {
            echo $livre . '<br>';
        }
    }
}

$auteur1 = new Auteur('Stephen', 'King');
$auteur2 = new Auteur('Stefdsfsfsewfwn', 'Kinewdsfsfwefg');

$livre1 = new Livre('Ca', 1986, 1138, 20.0, $auteur1);
$livre2 = new Livre('Simetierre', 1983, 374, 15.0, $auteur1);
$livre3 = new Livre('Le Fleau', 1978, 823, 14.0, $auteur1);
$livre4 = new Livre('Shining', 1977, 447, 16.0, $auteur1);

$livre5 = new Livre('truc', 1986, 1138, 20.0, $auteur2);
$livre6 = new Livre('Livre', 1983, 374, 15.0, $auteur2);
$livre7 = new Livre('bon bah un livre', 1978, 823, 14.0, $auteur2);
$livre8 = new Livre('pas ouf lui', 1977, 447, 16.0, $auteur2);

$bibliotheque = new Bibliotheque();

$bibliotheque->ajouterLivre($livre1);
$bibliotheque->ajouterLivre($livre2);
$bibliotheque->ajouterLivre($livre3);
$bibliotheque->ajouterLivre($livre4);
$bibliotheque->ajouterLivre($livre5);
$bibliotheque->ajouterLivre($livre6);
$bibliotheque->ajouterLivre($livre7);
$bibliotheque->ajouterLivre($livre8);

$bibliotheque->afficherBibliographie($auteur1);


?>
