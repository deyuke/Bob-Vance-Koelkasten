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
    <style>
        .bg {
            background-image: url('src/img-fridge.jpeg');
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
        }
    </style>
    <title>Vance Koelkasten</title>
</head>

<body class="w-screen flex flex-col">
    <header class="w-full fixed flex z-10 bg-white flex-row justify-between items-center px-6 py-2 border-b-black border">
        <div class="flex flex-row items-center">
            <h1 class="text-4xl font-bold">Vance Koelkasten</h1>
        </div>
        <div class="flex flex-row items-center w-1/3 justify-around">
            <a href="index.php" class="text-2xl px-3 py-3 border border-none hover:bg-black hover:text-white ease-in-out">Home</a>
            <a href="index.php" class="text-2xl px-3 py-3 border border-none hover:bg-black hover:text-white ease-in-out">Over ons</a>
            <a href="index.php" class="text-2xl px-3 py-3 border border-none hover:bg-black hover:text-white ease-in-out">Modellen</a>
        </div>
    </header>
    <main class="w-full h-full flex flex-col items-center">
        <div id="hero">
            <picture class="h-full">
                <img sizes="(max-width: 1400px) 100vw, 1400px" srcset="
                src/img/img-fridge_gbssc5_c_scale,w_200.jpg 200w,
                src/img/img-fridge_gbssc5_c_scale,w_586.jpg 586w,
                src/img/img-fridge_gbssc5_c_scale,w_828.jpg 828w,
                src/img/img-fridge_gbssc5_c_scale,w_1126.jpg 1126w,
                src/img/img-fridge_gbssc5_c_scale,w_1334.jpg 1334w,
                src/img/img-fridge_gbssc5_c_scale,w_1400.jpg 1400w" src="src/img/img-fridge_gbssc5_c_scale,w_1400.jpg" alt="imehj">
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
                                <i class="bi bi-arrow-up-right-square-fill"></i>
                            </a>
                        </p>
                    </div>

                </div>
            </div>

            <section class="w-full pb-10">
                <div class="text-xl p-3 flex-col flex items-center">
                    <h3 class="text-3xl font-semibold outline outline-black outline-1 p-3 mt-2 mb-5"><i class="bi bi-arrow-down"></i>Ontdek onze koelkasten</h3>
                    <section class="grid grid-cols-3 gap-6">
                        <div class="w-60 h-96 outline outline-black outline-1 flex flex-row mb-10">
                            <div class="w-full flex flex-col justify-between">
                                <img class="w-full h-1/3 bg-cover" src="src/img/img-fridge_gbssc5_c_scale,w_1400.jpg" alt="koelkast">
                                <div class="p-3">
                                    <h4 class="text-2xl font-semibold">GBS 5</h4>
                                    <ul class="list-disc ml-5">
                                        <li>2-deurs</li>
                                        <li>400 liter</li>
                                        <li>Met vriezer</li>
                                    </ul>
                                </div>

                                <div class="w-full">
                                    <a href="details.php?<?= $id ?>" class="p-3 bg-black text-white w-full flex justify-around">€ 1.499,-<i class="bi bi-cart4"></i></a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
        </div>
    </main>
    <footer class="w-full h-20 bg-black text-white flex flex-row justify-between items-center px-6 py-2">
        <div class="flex flex-row items-center">
            <h1 class="text-4xl font-bold">Vance Koelkasten ©</h1>
        </div>
        <div class="flex flex-row items-center w-1/3 justify-around">
            <a href="index.php" class="text-2xl px-3 py-3 border border-none hover:bg-black hover:text-white ease-in-out">Home</a>
            <a href="index.php" class="text-2xl px-3 py-3 border border-none hover:bg-black hover:text-white ease-in-out">Over ons</a>
            <a href="index.php" class="text-2xl px-3 py-3 border border-none hover:bg-black hover:text-white ease-in-out">Modellen</a>
        </div>
    </footer>
    <script src="src/js/script.js"></script>
</body>

</html>