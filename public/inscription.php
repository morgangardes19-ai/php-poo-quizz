<?php
require_once "../_partials/_head.php";
require_once "../utils/autoloader.php";



?>

<body>

    <section>
        <form action="../process/inscription.php" method="post">
            <label for="name">Nom</label>
            <input type="text" name="name" id="name">

            <label for="email">Email</label>
            <input type="text" name="email" id="email">

            <label for="mdp">Mot de passe</label>
            <input type="password" name="mdp" id="mdp" placeholder="••••••••">

            <label for="confirmation-mdp">Confirmation du mot de passe</label>
            <input type="password" name="confirmation-mdp" id="confirmation-mdp" placeholder="••••••••">
        </form>
    </section>

</body>