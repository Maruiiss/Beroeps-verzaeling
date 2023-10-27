<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <title class="btext">Alcohol Lovers Club</title>
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
<main>

    <section id="startpagina">
        <h2>Welkom bij de Alcohol Lovers Club</h2>
        <p>Ontdek de fascinerende wereld van alcoholische dranken en bestel je favoriete drankjes.</p>
    </section>
    <section id="verzameling">
        <h2>Ons Aanbod</h2>
        <div id="item-list">
            <!--PHP-->
            <?php
            $jsonData = file_exists("alcohol_data.json") ? file_get_contents("alcohol_data.json") : '[]';
            $alcoholDataArray = json_decode($jsonData, true);

            if (!empty($alcoholDataArray)) {
                foreach ($alcoholDataArray as $alcoholData) {
                    echo '<div class="item-card">';
                    echo '<h3>' . $alcoholData["name"] . '</h3>';
                    echo '<p>' . $alcoholData["description"] . '</p>';
                    echo '<p>' . $alcoholData["alcohol_percentage"] . '</p>';
                    echo '<p>' . $alcoholData["alcohol_type"] . '</p>';
                    echo '<p>Prijs: €' . $alcoholData["price"] . '</p>';
                    echo '<a href="../Verzamelaar/bestel.php"><button class="bestel-button" data-item-name="' . $alcoholData["name"] . '">Bestel</button></a>';
                    echo '</div>';
                }
            }
            ?>
        </div>
    </section>
    <section id="bestellingen">

        <div id="submitted-text">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $submittedText = $_POST["submittedText"];
                echo '<p>Je hebt het volgende ingediend: ' . $submittedText . '</p>';
                echo '<a href="../Verzamelaar/bestel.php"><button class="bestel-button" data-item-name="' . $submittedText . '">Bestel</button></a>';
            }
            ?>
        </div>
    </section>
</main>
<button id="clear-button">lege Verzamelingn</button>
<br>
<br>
<br>
<br>
<br>
<br><br>



<footer>
    <p class="btext">Lovers Club</p>
    <?php echo date("jS \of F Y H:i:s"); ?>
</footer>
</body>
</html>
