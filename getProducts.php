    <!-- /* DVD */ -->
    <?php 
//connect to database
include('config/db.php');
$sql = "SELECT * FROM `DVD`";
$result = mysqli_query($conn, $sql);
$dvdProducts=mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">

    </head>

    <body class="px-14">
        <!-- /* navbar */ -->
        <section class="flex items-center justify-between w-full flex-row h-16 border-b ">
            <div>
                <h1 class="text-3xl font-bold pl-5 text-blue-500">Product Add</h1>
            </div>
            <div class="flex justify-between gap-20">
                <a href="addProduct.php" class="text-2xl font-semibold pr-5">Add</a>
                <button class="text-2xl font-semibold pr-5" name="delete">Mass Delete</button>
            </div>
        </section>
        <div>
            <!-- /* DVD  cards */ -->
            <div class="w-full grid grid-cols-4 mt-20 items-center justify-center  text-center gap-14">
                <?php foreach($dvdProducts as $item) : ?>
                <div class="border-2 border-blue-500 h-36  flex  items-center justify-center relative">
                    <ul class="flex flex-col gap-2">
                        <li class="list-group-item">SKU : <?php echo $item['SKU']; ?></li>
                        <li class="list-group-item">name : <?php echo $item['name']; ?></li>
                        <li class="list-group-item">price : <?php echo $item['price']; ?></li>
                        <li class="list-group-item">size : <?php echo $item['size']; ?></li>
                        <input type="checkbox" name="checkbox" id="checkbox" class="absolute top-5 left-5">
                    </ul>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </body>

    </html>