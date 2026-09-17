<?php
require_once "./_partials/_head.php";

?>

<body>

    <section>
        <form action="../process/connexion.php" method="post">
            <div>
                <label for="name">Nom</label>
                <input type="text" name="name" id="name">
            </div>

            <div>
                <label for="mdp">Mot de passe</label>
                <input type="password" name="mdp" id="mdp" placeholder="••••••••">
            </div>

            <button type="submit">Connexion</button>
        </form>
    </section>

</body>