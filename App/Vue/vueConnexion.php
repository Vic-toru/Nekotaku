<?php ob_start()?>

<section>
    <div class="container_form">
        <form method="post" id="formulaire">
            <h2>Connectez-vous</h2>
            <div class="input_form">
                <label for="mail">Votre email : </label>
                <input type="email" name="mail_utilisateur" placeholder="Exemple : neko@taku.com" cols="60" required>
                <label for="password">Votre mot de passe : </label>
                <input type="email" name="password_utilisateur" placeholder="Exemple : M0t_2_p@s$e!" cols="60" required>
            </div>
            <p>Vous n'avez pas encore de compte ?<a href="/nekotaku/inscription" class="text_link">Cliquez ici pour vous inscrire !</a></p>
            <button type="submit" name="submit" class="bouton_envoyer">Envoyer</button>
        </form>
    </div>
</section>
<?= $error ?>

<?php $content = ob_get_clean()?>

