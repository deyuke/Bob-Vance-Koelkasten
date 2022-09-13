<?php
try {

    $servername = 'localhost';
    $username = 'bit_academy';
    $password = 'bit_academy';
    $dsn = "mysql:host=$servername;dbname=Vince_Refrigerators";

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

// CREATE TABLE `items` (
//     id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(100) NOT NULL,
//     image_path VARCHAR(255) NOT NULL,
//     image_name VARCHAR(100) NOT NULL,
//     used BIT,
//     date_purchased DATE,
//     specs_list VARCHAR(100),
//     description VARCHAR(255),
//     price DECIMAL(10,2)
// );
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
    <style>
        .bg {
            background-image: url('src/img-fridge.jpeg');
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
        }
    </style>
    <title>Vance Koelkasten Admin</title>
</head>

<body class="h-screen w-screen flex flex-col">
    <header class="w-full fixed flex z-10 bg-white flex-row justify-between items-center px-6 py-2 border-b-black border">
        <div class="flex flex-row items-center">
            <h1 class="text-4xl font-bold">Vance Koelkasten <span class="text-2xl italic">Admin</span></h1>
        </div>
        <div class="flex flex-row items-center w-1/3 justify-around">
            <a href="index.php" class="text-2xl px-3 py-3 border border-none hover:bg-black hover:text-white ease-in-out">Home</a>
        </div>
    </header>
    <main class="w-full h-full flex flex-col items-center mt-36" 3,75>
        <div class="w-1/3 h-5/6 flex flex-col">
            <div class="font-bold text-4xl text-white bg-black p-3 outline outline-black outline-1">
                    Voeg een nieuw product toe
            </div>
            <div class="outline outline-black outline-1 h-full px-3 font-semibold">
                    <form method="POST" class="flex flex-col">
                        <label for="name">Naam</label>
                        <input type="text" name="name" id="name" required>

                        <label for="price">Prijs</label>
                        <input type="number" name="price" id="price">

                        <label for="description">Beschrijving</label>
                        <input type="text" name="description" id="description">

                        <label for="used">Gebruikt:</label>
                            <div>
                                <input class="w-5" type="radio" name="used" id="used" value=1>Ja
                                <input class="w-5" type="radio" name="used" id="used" value=0 checked>Nee
                            </div>

                        <label for="specs_list">Specificaties</label>
                        <textarea type="text" name="specs_list" id="specs_list"></textarea>

                        <label for="date_purchased">Aankoopdatum</label>
                        <input type="date" name="date_purchased" id="date_purchased">

                        <label for="image_path">Afbeelding</label>
                        <input type="file" accept="image/*" name="image_path" id="image_path">
                    </form>
            </div>    
        </div>
    </main>
    <footer class="w-full h-20 bg-black text-white flex flex-row justify-between items-center px-6 py-2">
        <div class="flex flex-row items-center">
            <h1 class="text-4xl font-bold">Vance Koelkasten © 2022</h1>
        </div>
        <div class="flex flex-row items-center w-1/3 justify-around">
            <a href="index.php" class="text-2xl px-3 py-3 border border-none hover:bg-black hover:text-white ease-in-out">FAQ</a>
            <a href="index.php" class="text-2xl px-3 py-3 border border-none hover:bg-black hover:text-white ease-in-out">Contact</a>
            <a href="index.php" class="text-2xl px-3 py-3 border border-none hover:bg-black hover:text-white ease-in-out">Account Instellingen</a>
        </div>
    </footer>
    <script src="src/js/script.js"></script>
</body>

</html>