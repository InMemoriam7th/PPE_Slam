<?php
include_once("./src/header.inc.php");
?>
<body>
    <?php
    include_once("./src/nav.inc.php");
    ?>
    <footer>
        <section>
            <h3>Bienvenue dans votre espace</h3>
                <fieldset>
                    <legend>Connectez vous à votre compte </legend>
                    <form action="<?php $_SERVER ['PHP_SELF']?>" method="post">
                        <label for="mail">Mail ou login*</label>
                        <input type="text" name="mail" id="mail" placeholder="Votre Mail" aria-required="true">
                        <label for="pwd">Mot de passe *</label>
                        <input type="password" name="pwd" id="pwd" placeholder="Votre Mot de passe" aria-required="true">
                        <input type="submit" value="Connexion à votre compte">
                        <p></p>
                    </form>
                </fieldset>
        </section>
    </footer>
    <script src="./js/app_login.js"></script>
</body>
</html>