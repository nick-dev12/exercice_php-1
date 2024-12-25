<?php
include('../app/controllers/userController.php')


    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forme</title>
</head>

<body>
    <form method="post" action="">
        <input type="text" name="nom" id="">
        <input type="text" name="prenom" id="">
        <input type="submit" value="envoyer" name="envoyer">
    </form>

    <ul>
        <?php if ($get_users): ?>

            <?php foreach ($get_users as $user): ?>
                <li><?php echo $user['nom'] . ' ' . $user['prenom']; ?></li>
            <?php endforeach; ?>

        <?php endif; ?>
    </ul>
</body>

</html>