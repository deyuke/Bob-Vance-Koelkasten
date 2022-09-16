<?php
try {

    $servername = 'localhost';
    $username = 'bit_academy';
    $password = 'bit_academy';
    $dsn = "mysql:host=$servername;dbname=vince";

    $insert = "INSERT INTO `items`(name, image_path, used, date_purchased, specs_1, specs_2, specs_3, description, price)
    VALUES(
            '" . $_POST['name'] . "',
            '" . $_POST['image_path'] . "',
            " . intval($_POST['used']) . ",
            '" . $_POST['date_purchased'] . "',
            '" . $_POST['specs_1'] . "',
            '" . $_POST['specs_2'] . "',
            '" . $_POST['specs_3'] . "',
            '" . $_POST['description'] . "',
            '" . $_POST['price'] . "'
        )";

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
    try {
        $pdo = new PDO($dsn, $username, $password);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $status = "Connected successfully";
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    if (isset($_POST['submit'])) {
        try {
            $pdo->exec($insert);
            // var_dump($insert); 
        } catch (PDOException $e2) {
            echo $e2->getMessage() . '<br><br>';
            var_dump($_POST);
        }
    }
} catch (PDOException $error) {
    echo $error->getMessage();
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
    <title>Vance Koelkasten Admin</title>
</head>

<body class="h-screen w-screen flex flex-col">
    <header class="w-full fixed flex z-10 bg-white flex-row justify-between items-center px-6 py-2 border-b-black border">
        <div class="flex flex-row items-center">
            <a href="admin.php" class="text-4xl font-bold">Vance Koelkasten <span class="text-2xl italic">Admin</span></a>
        </div>
        <div class="flex flex-row items-center w-1/3 justify-around">
            <a href="index.php" class="text-2xl px-3 py-3 border border-none hover:bg-black hover:text-white ease-in-out">Home</a>
        </div>
    </header>
    <main class="w-full h-full flex flex-col items-center mt-36">
        <div class="w-1/3 flex flex-col">
            <div class="font-bold text-3xl text-white bg-black p-3 outline outline-black outline-1">
            <a href="admin.php" class="mr-3"><i class="bi bi-arrow-left"></i></a>Voeg een nieuw product toe
            </div>
            <div class="outline outline-black outline-1 h-full font-semibold">
                <form action="#" method="POST">
                    <div class="grid grid-cols-2 gap-3 m-3 mb-6">
                        <label for="name">Naam</label>
                        <input class="outline outline-black outline-1 px-2 py-1 font-normal" type="text" name="name" id="name" required>

                        <label for="price">Prijs</label>
                        <input class="outline outline-black outline-1 px-2 py-1 font-normal" type="number" name="price" id="price" step="0.01">

                        <label for="description">Beschrijving</label>
                        <textarea class="outline outline-black outline-1 px-2 py-1 font-normal" type="text" name="description" id="description"></textarea>

                        <label for="used">Gebruikt:</label>
                        <div>
                            <input class="w-5" type="radio" name="used" id="used" value=0>Ja
                            <input class="w-5" type="radio" name="used" id="used" value=1 checked>Nee
                        </div>

                        <label for="specs_list">Specificaties</label>
                        <div>
                            <input class="outline outline-black outline-1 px-2 py-1 font-normal" type="text" name="specs_1" id="specs_list" placeholder="Spec 1"></input>
                            <input class="outline outline-black outline-1 px-2 py-1 font-normal" type="text" name="specs_2" id="specs_list" placeholder="Spec 2"></input>
                            <input class="outline outline-black outline-1 px-2 py-1 font-normal" type="text" name="specs_3" id="specs_list" placeholder="Spec 3"></input>
                        </div>

                        <label for="date_purchased">Aankoopdatum</label>
                        <input class="outline outline-black outline-1 px-2 py-1 font-normal" type="date" name="date_purchased" id="date_purchased">

                        <label for="image_path">Afbeelding</label>
                        <input class="outline outline-black outline-1 px-2 py-1 font-normal" type="text" name="image_path" id="image_path">
                    </div>

                    <input type="submit" value="Toevoegen" name="submit" id="submit" class="bg-black p-3 w-full text-white hover:cursor-pointer">
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