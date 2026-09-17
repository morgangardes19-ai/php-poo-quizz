<?php
require_once "./_partials/_head.php";

?>

<body>

    <section>
        <form action="../process/inscription.php" method="post">
            <div>
                <label for="name">Nom</label>
                <input type="text" name="name" id="name">
            </div>

            <div>
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
            </div>

            <div>
                <label for="mdp">Mot de passe</label>
                <input type="password" name="mdp" id="mdp" placeholder="••••••••">
            </div>

            <div>
                <label for="confirmation-mdp">Confirmation du mot de passe</label>
                <input type="password" name="confirmation-mdp" id="confirmation-mdp" placeholder="••••••••">
            </div>

            <button type="submit">S'inscrire</button>
        </form>
    </section>

</body>