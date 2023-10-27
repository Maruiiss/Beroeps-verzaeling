<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $alcoholData = array(
        "name" => $_POST["name"],
        "description" => $_POST["description"],
        "price" => $_POST["price"],
        "alcohol_percentage" => $_POST["alcohol_percentage"],
        "alcohol_type" => $_POST["alcohol_type"],
    );

    $jsonData = file_exists("alcohol_data.json") ? file_get_contents("alcohol_data.json") : '[]';
    $alcoholArray = json_decode($jsonData, true);

    $alcoholArray[] = $alcoholData;

    $updatedJsonData = json_encode($alcoholArray);

    file_put_contents("alcohol_data.json", $updatedJsonData);

    header("Location: ../Verzamelaar/Index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form-style.css">
    <link rel="stylesheet" href="style.css">
    <title class="btext">Add Alcohol</title>
</head>
<body>
<header>
    <div class="navbar">
        <img src="img/logo.png" class="LogoImg">
        <ul class="nav-list">
            <li class="nav-item"><a class="nav-link" href="../Verzamelaar/Index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="../Verzamelaar/Toevogen.php">Drank Toevoegen</a></li>
        </ul>
    </div>
</header>
<div class="FormMove">
    <main>
        <form id="alcohol-form" method="post" action="../Verzamelaar/Toevogen.php" enctype="multipart/form-data">
            <label for="name">Alcohol's Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" required></textarea>

            <label for="price">Price:</label>
            <input type="number" step="0.01" id="price" name="price" required>

            <label for="alcohol_percentage">Alcohol Percentage:</label>
            <input type="number" step="0.01" id="alcohol_percentage" name="alcohol_percentage" required>

            <label for="alcohol_type">Alcohol Type:</label>
            <input type="text" id="alcohol_type" name="alcohol_type" required>

            <button type="submit">Add Alcohol</button>
        </form>
    </main>
</div>
<footer>
    <p class="btext">Lovers Club</p>
    <?php echo date("jS \of F Y H:i:s"); ?>
</footer>
</body>
</html>
