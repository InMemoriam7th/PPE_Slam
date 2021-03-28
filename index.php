<?php
include_once("./src/header.inc.php");
?>
<body>
    <?php
    include_once("./src/nav.inc.php");
    ?>
    <main>
        <section>
            <h2>Retrouvez la fluidité et la simplicité de Gmail sur tous vos appareils</h2>
            <p><a href="#form">CREER UN COMPTE</a></p>
        </section>
    </main>
    <footer>
        <section>
            <h3>Une boite de reception entièrement repensée</h3>
            <p>Avec les nouveaux onglets personnalisables, repérez immédiatement les nouveaux messages et choisissez ceux que vous souhaitez lire en priorité</p>
                <fieldset>
                    <legend>Créer un compte</legend>
                    <form action="./src/bbd_create_account.inc.php" method="post">
                    <label for="nom">Nom *</label>
                        <input type="text" name="nom" id="nom" placeholder="Votre Nom">
                        <label for="prenom">Prénom *</label>
                        <input type="text" name="prenom" id="prenom" placeholder="Votre Prénom">
                        <label for="mail">Mail *</label>
                        <input type="text" name="mail" id="mail" placeholder="Votre Mail" aria-required="true">
                        <label for="pwd">Choisir votre mot de passe *</label>
                        <input type="password" name="password" id="password" placeholder="Votre Mot de passe">
                        <input type="submit" value="Validez votre compte">
                        <p></p>
                    </form>
                </fieldset>
        </section>
    </footer>
    <script src="./js/app.js"></script>
    <div class="fleche">
        <a href="#form"><img src="./asset/arrow.png" alt="aller vers le bas"></a>
    </div>
</body>
</html>