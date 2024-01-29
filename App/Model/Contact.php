<?php

namespace App\Model;
use App\Utils\BddConnect;
use App\Model\Motif;

class Contact extends BddConnect
{
    private ?int $id_contact;
    private ?string $nom_contact;

    private ?string $prenom_contact;

    private ?string $mail_contact;

    private ?string $contenu_contact;

    private ?Motif $motif; 

    // contructeur

    public function __construct(){
        $this->motif = new Motif();
    }

    //Getters et Setters
    public function getId(): ?int
    {
        return $this->id_contact;
    }
    public function setId(?int $id): void
    {
        $this->id_contact = $id;
    }
    public function getNom(): ?string
    {
        return $this->nom_contact;
    }
    public function setNom(?string $nom): void
    {
        $this->nom_contact = $nom;
    }
    public function getPrenom(): ?string
    {
        return $this->prenom_contact;
    }
    public function setPrenom(?string $prenom): void
    {
        $this->prenom_contact = $prenom;
    }
    public function getMail(): ?string
    {
        return $this->mail_contact;
    }
    public function setMail(?string $mail): void
    {
        $this->mail_contact = $mail;
    }
    public function getContenu(): ?string
    {
        return $this->contenu_contact;
    }
    public function setContenu(?string $contenu): void
    {
        $this->contenu_contact = $contenu;
    }
    public function getMotif(): ?Motif {
        return $this->motif;
    }
    public function setMotif(?Motif $motif): void{
        $this->motif = $motif;
    }
    // Méthodes

    public function insertContact(): void {
        try {
            //Récupération des données
            $nom = $this->nom_contact;
            $prenom = $this->prenom_contact;
            $mail = $this->mail_contact;
            $contenu = $this->contenu_contact;
            $id_motif = $this->motif->getId();
            //Requête SQL
            $requete = $this->connexion()->prepare('INSERT INTO contact(
                nom_contact,prenom_contact,mail_contact,contenu_contact,id_motif
                ) VALUE(?,?,?,?,?)'
            );
            $requete->bindParam(1,$nom,\PDO::PARAM_STR);
            $requete->bindParam(2,$prenom,\PDO::PARAM_STR);
            $requete->bindParam(3,$mail,\PDO::PARAM_STR);
            $requete->bindParam(4,$contenu,\PDO::PARAM_STR);
            $requete->bindParam(5,$id_motif,\PDO::PARAM_INT);
            $requete->execute();
        } 
        catch (\Exception $e) {
            die('Error : '.$e->getMessage());
        }
    }
}