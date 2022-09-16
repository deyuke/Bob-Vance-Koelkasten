<?php
try {

    $servername = 'localhost';
    $username = 'bit_academy';
    $password = 'bit_academy';
    $dsn = "mysql:host=$servername;dbname=vince";

    try {
        $pdo = new PDO($dsn, $username, $password);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $status = "Connected successfully";
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    try {
        $itemdata = "SELECT * FROM items WHERE id = " . $_GET['id'];

        $item = $pdo->query($itemdata);
        $data = $item->fetch();
    } catch (PDOException $th) {
        echo $th->getMessage();
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
    <title><?= $data['name'] ?></title>
</head>

<body class="h-screen w-screen flex flex-col items-center">
    <header class="w-full fixed flex z-10 bg-white flex-row justify-between items-center px-6 py-2 border-b-black border">
        <div class="flex flex-row items-center">
            <a href="admin.php" class="text-4xl font-bold">Vance Koelkasten</a>
        </div>
        <div class="flex flex-row items-center w-1/3 justify-around">
            <a href="index.php" class="text-2xl px-3 py-3 border border-none hover:bg-black hover:text-white ease-in-out">Home</a>
        </div>
    </header>
    <main class="h-full flex flex-col justify-center items-center self-center">
        <div class="flex flex-row items-center">

            <div class="w-1/3 outline outline-black outline-1 ml-10">
                <?php echo "<img class='w-full' src='";
                if (!str_contains($data['image_path'], ':')) {
                    echo "src/img-fridge.jpeg";
                } else {
                    echo $item['image_path'];
                };
                echo "' alt='koelkast'>" ?>
            </div>
            <div class="ml-10">
                <h1 class="text-4xl font-bold my-3"><?= $data['name'] ?></h1>
                <p class="text-2xl font-bold my-3">€<?= $data['price'] ?></p>
                <ul class='list-disc ml-5 text-xl my-3'>
                <?php
                for ($i = 1; $i < 4; $i++) {
                    echo "<li class='text-xl'>" . $data['specs_' . $i] . "</li>";
                }
                ?>
               </ul>

                <p><span class="text-xl my-3"> Beschrijving:</span> <br><?= $data['description'] ?></p>
            </div>
        </div>
        <div class="w-full flex justify-center">
            <button class="bg-black text-white p-3 text-4xl"><i class='bi bi-cart4'></i>  <span class="line-through"> In winkelwagentje</span></button>
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