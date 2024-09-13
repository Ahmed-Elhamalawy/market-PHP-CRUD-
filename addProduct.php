<?php 
include('addDVD.php');
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
            <button class="text-2xl font-semibold pr-5">Save</button>
            <button class="text-2xl font-semibold pr-5">Cancel</button>
        </div>
    </section>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"
        class="grid grid-cols-2 px-20 gap-6 justify-center items-center">

        <section
            class="mt-24   gap-5 items-center  border-2 border-black rounded-lg px-5 py-12 justify-center w-[100%] h-fit shadow-md">
            <div>
                <div>
                    <label for="SKU" class="text-2xl font-semibold">SKU</label>
                    <input type="text" name="SKU" class="border-2 w-full text-2xl focus:outline-none">
                </div>
                <div>
                    <label for="name" class="text-2xl font-semibold ">Name</label>
                    <input type="text" name="name" class="border-2 w-full text-2xl focus:outline-none">
                </div>
                <div>
                    <label for="price" class="text-2xl font-semibold">Price ($)</label>
                    <input type="text" name="price" class="border-2 w-full text-2xl focus:outline-none">
                </div>
            </div>
            <span>
                <label for="productType" class="text-2xl font-semibold">Type Switcher</label>
                <select name="productType" id="productType" class="border-2 w-full text-2xl focus:outline-none">
                    <option value="DVD" selected>DVD</option>
                    <option value="Book">Book</option>
                    <option value="Furniture">Furniture</option>
                    <option hidden selected disabled>please select an option</option>
                </select>
            </span>

            <button type="submit" name="submit"
                class="text-xl font-semibold border-2 p-2 w-1/2 translate-x-1/2 mt-2 bg-blue-500 text-white rounded-lg">Submit</button>
        </section>
        <div id="dynamic-div">
            <div id="dvd-div" style="display: none;"
                class="mt-24 border-2 border-black rounded-lg px-5 py-12 justify-center w-[100%] h-fit shadow-md">
                <div>
                    <label for="Size" class="text-2xl font-semibold">Size (MB) </label>
                    <input type="text" name="size" class="border-2 w-full text-2xl focus:outline-none">
                </div>
            </div>
            <div id="book-div" style="display: none;"
                class="mt-24  gap-5 items-center  border-2 border-black rounded-lg px-5 py-12 justify-center w-[100%] h-fit shadow-md">
                <div>
                    <label for="hight" class="text-2xl font-semibold mb-2 block">Height (CM)</label>
                    <input type="text" name="hight" class="border-2 w-full text-2xl focus:outline-none">
                </div>

                <div>
                    <label for="width" class="text-2xl font-semibold text-red-400">width (CM) </label>
                    <input type="text" name="width" class="border-2 w-full text-2xl focus:outline-none">
                </div>
                <div>
                    <label for="length" class="text-2xl font-semibold">length (CM) </label>
                    <input type="text" name="length" class="border-2 w-full text-2xl focus:outline-none">
                </div>
            </div>
            <div id="furniture-div" style="display: none;"
                class="mt-24  gap-5 items-center  border-2 border-black rounded-lg px-5 py-12 justify-center w-[100%] h-fit shadow-md">
                <div>
                    <label for="weight" class="text-2xl font-semibold">weight (KG) </label>
                    <input type="text" name="weight" class="border-2 w-full text-2xl focus:outline-none">
                </div>
            </div>
        </div>
    </form>
    <script src="switch.js"></script>
</body>

</html>