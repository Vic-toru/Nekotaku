<?php

namespace App\Model;
use App\Utils\BddConnect;
class Motif extends BddConnect
{
    private ?int $id_motif;
    private ?string $nom_motif;

    //Getters et Setters
    public function getId(): ?int
    {
        return $this->id_motif;
    }
    public function setId(?int $id): void
    {
        $this->id_motif = $id;
    }
    public function getNom(): ?string
    {
        return $this->nom_motif;
    }
    public function setNom(?string $nom): void
    {
        $this->nom_motif = $nom;
    }

    //Méthodes
    public static function getAllMotif(): array
    {
        $bdd = new BddConnect();
        try {
            $requete = $bdd->connexion()->prepare("SELECT id_motif,nom_motif FROM motif");
            $requete->execute();
            return $requete->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\Exception $e) {
            die('Error : ' . $e->getMessage());
        }
    }
}
