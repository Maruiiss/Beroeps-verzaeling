<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <title>Verzamelaars Vereniging</title>
</head>

<body>
    <header>
        <h1>Verzamelaars Vereniging</h1>
        <nav>
            <ul>
                <li><a href="#startpagina">Startpagina</a></li>
                <li><a href="#verzameling">Verzameling</a></li>
                <li><a href="#bestellingen">Bestellingen</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="startpagina">
            <h2>Welkom bij de Verzamelaars Vereniging</h2>
            <p>Ontdek onze geweldige collecties en bestel je favoriete items.</p>
        </section>
        <section id="verzameling">
            <h2>Onze Verzameling</h2>
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
        <?php echo date("l jS \of F Y h:i:s A"); ?>
    </footer>
</body>

</html>