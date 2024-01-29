<?php
namespace App\Controller;

use App\Utils\Utilitaire;
use App\Model\Contact;
use App\Model\Motif;
use App\Vue\Template;


class ContactController extends Contact
{

    public function addContact(): void
    {
        $error = "";
        $motifs = Motif::getAllMotif();
        //tester si le bouton est cliqué
        if (isset($_POST["submit"])) {
            //tester si les champs sont remplis
            if (
                !empty($_POST["nom_contact"]) and !empty($_POST["prenom_contact"]) and
                !empty($_POST["mail_contact"]) and !empty($_POST["contenu_contact"]) and
                !empty($_POST["motif"])
            ) {
                //Cleaner les inputs
                $nom = Utilitaire::cleanInput($_POST["nom_contact"]);
                $prenom = Utilitaire::cleanInput($_POST["prenom_contact"]);
                $mail = Utilitaire::cleanInput($_POST['mail_contact']);
                $contenu = Utilitaire::cleanInput($_POST['contenu_contact']);
                $motif = Utilitaire::cleanInput($_POST['motif']);
                // Setter les valeurs dans l'objet
                $this->setNom($nom);
                $this->setPrenom($prenom);
                $this->setMail($mail);
                $this->setContenu($contenu);
                $this->getMotif()->setId($motif);
                $this->insertContact();
                $error ='La demande de contact a bien été envoyé.';
            }
            //test si les champs ne sont pas remplis
            else {
                $error = "Veuillez remplir tous les champs du formulaire";
            }
        }
        Template::render(
            'navbar.php',
            'Contact',
            'vueContact.php',
            'footer.php',
            $error,
            ['script.js'],
            ['style.css'],
            $motifs
        );
    }

}