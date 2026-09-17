<?php
require_once "../_partials/_head.php";
require_once "../utils/autoloader.php";



?>

<body>

    <section>
        <form action="../process/inscription.php" method="post">
            <label for="name"></label>
            <input type="text" name="name" id="name">
            <label for="email"></label>
            <input type="text" name="email" id="email">
            <label for="mdp"></label>
            <input type="password" name="mdp" id="mdp" placeholder="••••••••">
        </form>
    </section>

</body>