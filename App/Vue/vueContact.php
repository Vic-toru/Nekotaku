<?php ob_start() ?>

<!-- Formulaire -->
<section>
    <div class="container_form">
        <form method="post" id="formulaire">
            <h2>Contactez-nous</h2>
            <div class="input_form">
            <?= $error ?>
                <label for="nom">Votre nom : </label>
                <input type="text" name="nom_contact" placeholder="Exemple : Neko" cols="60" required>
                <label for="prenom">Votre prénom : </label>
                <input type="text" name="prenom_contact" placeholder="Exemple : Taku" cols="60" required>
                <label for="mail">Votre email : </label>
                <input type="email" name="mail_contact" placeholder="Exemple : neko@taku.com" cols="60" required>
                <select name="motif">
                    <option value="">Veuillez sélectionner un motif</option>

                    <?php foreach ($data as $motif): ?>
                        <option value="<?= $motif["id_motif"] ?>">
                            <?= $motif["nom_motif"] ?>
                        </option>
                    <?php endforeach ?>

                </select>
                <label for="message">Votre message : </label>
                <textarea name="contenu_contact" placeholder="Écrivez votre message ici" required></textarea>
            </div>


            <button type="submit" name="submit" class="bouton_envoyer">Envoyer</button>
        </form>
    </div>
</section>


<?php $content = ob_get_clean() ?>