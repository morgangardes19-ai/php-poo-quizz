<?php
require_once "../utils/autoloader.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../process/update-patient.php" method="post">
        <table>
            <tbody>

                <tr>
                    <td><label for="id">ID</label></td>
                    <td><input type="text" name="id" id="id" value="<?= $clientUnique['lastname'] ?>"></td>
                </tr>
                <tr>
                    <td><label for="nom">Nom</label></td>
                    <td><input type="text" name="nom" id="nom" value="<?= $clientUnique['firstname'] ?>"></td>
                </tr>

            </tbody>
        </table>
    </form>
</body>

</html>