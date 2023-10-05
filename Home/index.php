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
        <h1 class="btext" id="title">Alcohol Lovers Club</h1>
        <nav>
            <ul>
                <li><a href="#startpagina"> <button class="navText">Home</button> </a></li>
                <li><a href="#verzameling"> <button class="navText">Soorten Drank</button> </a></li>
                <li><a href="#bestellingen"> <button class="navText">Bestellingen</button> </a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="startpagina">
            <h2>Welkom bij de Alcohol Lovers Club</h2>
            <p>Ontdek de fascinerende wereld van alcoholische dranken en bestel je favoriete drankjes.</p>
        </section>
        <section id="verzameling">
            <h2>Onze Dranken</h2>
            <div id="item-list">

            </div>
        </section>
        <section id="bestellingen">
            <h2>Bestellingen</h2>
            <form id="bestelformulier">

            </form>
        </section>
    </main>
    <footer>
        <p class="btext">Lovers Club</p>
        <?php echo date("jS \of F Y h:i:s A"); ?>

    </footer>
</body>

</html>