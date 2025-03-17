<?php
    $message = $_SESSION['message'] ?? null; //getting the success/error message stored in session
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ivette Sanchez-Perez Homework 7</title>
    <link rel="stylesheet" href="./public/styling.css">
</head>
<body>

    <div class="container">
        <h2>Submit a Note</h2>

        <!-- output/display success or error message -->
        <?php if ($message): ?>
            <div class="message <?= $message['type'] ?>">
                <?= $message['text'] ?>
            </div>
        <?php endif; ?>

        <!-- form for submitting new note-->
        <form action="index.php" method="POST">  
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>

    </body>
</html>