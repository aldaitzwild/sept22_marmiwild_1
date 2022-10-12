<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une recette</title>
</head>
<body>

    <?php
        if(count($errors) > 0) {
            echo '<ul>';
            foreach($errors as $error) {
                echo '<li>' . $error . '</li>';
            }
            echo '</ul>';
        }
    ?>

    <form method="post">
        <p>
            <label for="title">Titre : </label>
            <input type="text" name="title" id="title">
        </p>

        <p>
            <label for="description">Description : </label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </p>

        <p>
            <input type="submit" value="OK">
        </p>
    </form>
    
</body>
</html>