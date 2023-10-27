<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form-style.css">
    <link rel="stylesheet" href="style.css">
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
<h2>Betaling Informatie</h2>
<form method="post">
    <label for="card_number">Kaartnummer:</label>
    <input type="text" id="card_number" name="card_number" required>

    <label for="name">Naam:</label>
    <input type="text" id="name" name="name" required>

    <label for="address">Adres:</label>
    <input type="text" id="address" name="address" required>

    <label for="bank">Selecteer uw bank:</label>
    <select id="bank" name="bank" required>
        <option value="abn amro">ABN AMRO</option>
        <option value="ing">ING</option>
        <option value="rabobank">Rabobank</option>
        <option value="knab">Knab</option>
        <option value="revolut">Revolut</option>
    </select>

    <button type="submit" name="pay">Betalen</button>
</form>
<footer>
    <p class="btext">Lovers Club</p>
    <?php echo date("jS \of F Y H:i:s"); ?>
</footer>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["pay"])) {
    $cardNumber = $_POST["card_number"];
    $name = $_POST["name"];
    $address = $_POST["address"];
    $bank = $_POST["bank"];

   
    if ($bank === "rabobank") {
        $bank = "Rabobank";
    } elseif ($bank === "knab") {
        $bank = "Knab Bank";
    }

    $data = "Kaartnummer: $cardNumber\n";
    $data .= "Naam: $name\n";
    $data .= "Adres: $address\n";
    $data .= "Bank: $bank\n";

     file_put_contents("payment_data.txt", $data, FILE_APPEND);


    header("Location: index.php");
    exit();
}
?>
</body>
</html>
