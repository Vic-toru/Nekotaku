<?php ob_start()?>

<section>
    <div class="container_form" enctype="multipart/form-data">
        <form method="post" id="formulaire">
            <h2>Inscription</h2>
            <div class="input_form">
                <div class="error"><?= $error ?></div>
                <label for="nom_utilisateur">Saisir votre nom :</label>
                <input type="text" name="nom_utilisateur">
                <label for="prenom_utilisateur">Saisir votre prénom :</label>
                <input type="text" name="prenom_utilisateur">
                <label for="pseudo_utilisateur">Saisir votre pseudo :</label>
                <input type="text" name="prenom_utilisateur">
                <label for="mail_utilisateur">Saisir votre mail :</label>
                <input type="email" name="mail_utilisateur">
                <label for="password_utilisateur">Saisir votre mot de passe :</label>
                <input type="password" name="password_utilisateur">
                <label for="confirm_password">Confirmer votre mot de passe :</label>
                <input type="password" name="confirm_password">
                <label for="image_utilisateur">Ajouter une image de profil</label>
                <input type="file" name="image_utilisateur">
            </div>
            <button type="submit" name="submit" class="bouton_envoyer">Envoyer</button>
        </form>
    </div>
</section>


<?php $content = ob_get_clean()?>

