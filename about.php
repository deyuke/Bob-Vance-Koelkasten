<?php
try {

    $servername = 'localhost';
    $username = 'bit_academy';
    $password = 'bit_academy';

    $dsn = "mysql:host=$servername;dbname=netland";

    try {
        $pdo = new PDO($dsn, $username, $password);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $status = "Connected successfully";
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
} catch (PDOException $error) {
    echo $error->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script>
        console.log("<?= $status ?>")
    </script>
    <title>Vance Koelkasten</title>
</head>

<body class="w-screen flex flex-col">
    <header class="w-full fixed flex z-10 bg-white flex-row justify-between items-center px-6 py-2 border-b-black border">
        <div class="flex flex-row items-center">
            <a href="index.php" class="text-4xl font-bold">Vance Koelkasten</a>
        </div>
        <div class="flex flex-row items-center w-1/3 justify-around">
            <a href="index.php" class="text-2xl px-3 py-3 border border-none hover:bg-black hover:text-white">Home</a>
            <a href="about.php" class="text-2xl px-3 py-3 border border-none hover:bg-black hover:text-white">Over ons</a>
            <a href="index.php#items" class="text-2xl px-3 py-3 border border-none hover:bg-black hover:text-white">Modellen</a>
        </div>
    </header>
    <main class="w-full h-full flex flex-col items-center justify-center">
        <div id="hero justify-center w-full">
            <picture class="h-full m-0 w-full">
                <img sizes="(max-width: 1400px) 100vw, 1400px" srcset="
                src/img/img-fridge_gbssc5_c_scale,w_200.jpg 200w,
                src/img/img-fridge_gbssc5_c_scale,w_586.jpg 586w,
                src/img/img-fridge_gbssc5_c_scale,w_828.jpg 828w,
                src/img/img-fridge_gbssc5_c_scale,w_1126.jpg 1126w,
                src/img/img-fridge_gbssc5_c_scale,w_1334.jpg 1334w,
                src/img/img-fridge_gbssc5_c_scale,w_1400.jpg 1400w" src="src/img/img-fridge_gbssc5_c_scale,w_1400.jpg" alt="imehj" class="!m-0">
            </picture>
            <div class="absolute top-80 left-0 animate__animated animate__slideInLeft outline outline-black outline-1">
                <div class="bg-black p-3">
                    <h1 class="text-6xl font-bold text-white min-w-max">Vance Koelkasten</h1>
                    <p class="text-2xl text-white min-w-max">Premium koelkasten voor de beste prijs</p>
                </div>
                <div class="text-xl flex">
                    <div class="bg-white p-3">
                        <h2 class="text-3xl font-semibold">Maak kennis met de snelste ijsmachine voor koelkasten op de markt.</h2>
                        <p class="leading-5 inline-block">
                            Het gepatenteerde ijssysteem van Bosch produceert tot wel 40 glazen gefilterd ijs per dag.<br>Zeg maar vaarwel tegen frequente ijsritten naar de winkel.
                            <a href="items.php" class="m-0">
                                <i class="bi bi-arrow-up-right-square"></i>
                            </a>
                        </p>
                    </div>

                </div>
            </div>
        </div>

        <div class="w-full pb-10">
            <section class="text-xl p-3 flex-col flex items-center">
                <h3 class="text-3xl font-semibold outline outline-black outline-1 p-3 mt-2 mb-5">Dé koelkasten dealer van Nederland!</h3>
                <article class="w-2/3">
                    <div>
                        <h4 class="text-3xl font-bold m-3">Wij zijn simpelweg gewoon de beste. Waarom?</h4>
                        <div class="flex justify-around align-baseline">
                            <div>
                                <div class="p-3 align-baseline">
                                    <span class="font-bold text-2xl">
                                        Ruim assortiment witgoed artikelen

                                    </span>
                                    <p>Vance Koelkasten is de nummer één in nieuwe, tweedehands en outlet witgoed artikelen. We bieden een ruim assortiment A-merk koelkasten en Amerikaanse koelkasten, koel-vries combinaties en vriezers.</p>
                                </div>

                                <div class="p-3 align-baseline">
                                    <span class="font-bold text-2xl">Bekende merken: gegarandeerd de scherpste prijs</span>
                                    <p>Ontdek ons ruime assortiment witgoed artikelen van bekende merken zoals Miele, Bosch, Samsung, AEG, Siemens en LG. Door de tweedehands en outlet producten kunnen we deze topmerken aanbieden voor elk budget: witgoed voor elke portemonnee! Natuurlijk werken de producten altijd naar behoren en krijg je gewoon garantie.</p>
                                </div>

                                <div class="p-3 align-baseline">
                                    <span class="font-bold text-2xl">Persoonlijk advies</span>
                                    <p>Of je nou een nieuwe of een gebruikte koelkast kiest, is het altijd fijn om persoonlijk geadviseerd te worden. Vance Koelkasten staat voor een decennium aan ervaring en kennis. Persoonlijk advies staat hoog in het vaandel. Op basis van jouw wensen en het budget, adviseren onze ervaren medewerkers over de meest geschikte koelkasten.</p>
                                </div>
                            </div>

                            <div>

                                <div class="p-3 align-baseline">
                                    <span class="font-bold text-2xl">Eenvoudig bestellen</span>
                                    <p>Via onze webwinkel bestel je eenvoudig en snel. Wanneer je voor 23.00 uur besteld, wordt het product de volgende werkdag gratis bij jouw thuis bezorgd. Of kies zelf een bezorgdag. Uiteraard ben je ook welkom in ons magazijn. We geven je met een kop koffie graag de nodige informatie.</p>
                                </div>

                                <div class="p-3 align-baseline">
                                    <span class="font-bold text-2xl">Gewoon goede service </span>
                                    <p>Bij Vance Koelkasten mag je de beste service verwachten. We tillen de witgoed artikelen gratis naar boven, ook als er geen lift is. Alle producten worden zonder meerkosten door ons aangesloten en je oude apparaat nemen we gratis mee. Toch niet tevreden? Dan kun je het product gerust omruilen of retourneren waarna je je geld terug ontvangt.</p>
                                </div>
                            </div>
                        </div>

                        <p class="m-3 mt-6 text-3xl">Meer weten? Neem er dan zelf een kopje koffie bij en neem telefonisch contact met ons op. Onze ervaren medewerkers staan voor je klaar!</p>
                    </div>
                </article>
                <h3 class="text-3xl font-semibold outline outline-black outline-1 p-3 mt-5 mb-5">Wie is Bob Vance?</h3>
                <article class="w-2/3">
                    <div class="flex flex-row justify-around">
                        <p class="w-1/2">"Hallo ik ben Bob Vance en ik heb al meer dan 10 jaar ervaring met koelkasten en vriezers verkopen. Mijn bedrijf was eerst in Los Angeles, maar ik heb besloten om nu in Nederland te gaan werken. Ik kan nu Nederlands praten en daarom is mijn website in het Nederlands. Dat leek mij het beste voor de klanten."</p>
                        <img class="h-40 " src="src/img_Bob_Vance.webp" alt="Bob Vance">
                    </div>
                </article>
                <section class="w-full flex justify-center mt-20">
                    <article class="w-1/3 flex flex-col outline outline-black outline-1">
                        <div id="contact" class="font-bold text-4xl text-white bg-black p-3 outline outline-black outline-1">
                            Neem contact met ons op!
                        </div>
                        <form>
                            <div class="grid grid-cols-2 gap-3 m-3 mb-6">
                                <label for="name">Naam</label>
                                <input class="outline outline-black outline-1 px-2 py-1 font-normal" type="text" name="name" id="name" required>

                                <label for="email">E-mail</label>
                                <input class="outline outline-black outline-1 px-2 py-1 font-normal" type="email" name="email" id="email" required>

                                <label for="description">Beschrijving</label>
                                <textarea class="outline outline-black outline-1 px-2 py-1 font-normal" type="text" name="description" id="description"></textarea>
                            </div>
                                <input type="submit" value="Verzenden" name="submit" id="submit" class="bg-black p-3 w-full text-white hover:cursor-pointer">
                        </form>

                    </article>
                </section>
            </section>
    </main>
    <footer class="w-full h-20 bg-black text-white flex flex-row justify-between items-center px-6 py-2">
        <div class="flex flex-row items-center">
            <h1 class="text-4xl font-bold">Vance Koelkasten © 2022</h1>
        </div>
        <div class="flex flex-row items-center w-1/3 justify-around">
            <a href="index.php" class="text-2xl px-3 py-3 border border-none hover:bg-black hover:text-white ease-in-out">FAQ</a>
            <a href="about.php#contact" class="text-2xl px-3 py-3 border border-none hover:bg-black hover:text-white ease-in-out">Contact</a>
            <a href="admin.php" class="text-2xl px-3 py-3 border border-none hover:bg-black hover:text-white ease-in-out">Admin Instellingen</a>
        </div>
    </footer>
    <script src="src/js/script.js"></script>
</body>

</html>