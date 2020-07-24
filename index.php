<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.4.6/tailwind.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <title>Pixsay.</title>
</head>

<body>
    <!-- Tailwind-css CDN  -->

    <!-- Tailwind-css Navbar  -->
    <nav class="bg-indigo-700 shadow-lg">
        <div class="container mx-auto">
            <div class="sm:flex justify-around">
                <!-- Site-title  -->
                <a href="#" class="text-white text-3xl font-bold p-3"><img class="logo" src="assets/w_logo1.png" alt=""></a>

                <!-- Menus  -->
                <ul class="text-gray-400 sm:self-center text-xl border-t sm:border-none">
                    <li class="sm:inline-block">
                        <a href="" class="p-3 hover:text-white">Home</a>
                    </li>
                    <li class="sm:inline-block">
                        <a href="" class="p-3 hover:text-white">About</a>
                    </li>
                    <li class="sm:inline-block">
                        <a href="" class="p-3 hover:text-white">Contact</a>
                    </li>
                    <li class="sm:inline-block">
                        <a href="admin/index.php" class="p-3 hover:text-white">login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1 class="date"><b><big><?php echo date("jS F Y"); ?></big></b></h1>

    <div class="outer_np">
        <?php
        include 'admin/config.php';
        $sql = "SELECT * FROM np ORDER BY id";
        $run = mysqli_query($conn, $sql) or die("sqli error..");
        if (mysqli_num_rows($run) > 0) {
            while ($row = mysqli_fetch_assoc($run)) {
        ?>
                <img class="np" src="<?php echo "admin/imgs/" . $row['img_name'] ?>">
        <?php
            }
        }
        ?>
    </div>


</body>

</html>