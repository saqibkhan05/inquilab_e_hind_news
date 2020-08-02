<?php include 'herader.php'; ?>


<div class="text-center" style="margin-top: 4%; margin-bottom: 2%;">
    <h1 style="text-transform: uppercase;" class="display-4"><?php echo $_GET['name'] ?></h1>
    <p>This is <?php echo date("jS/F/Y"); ?> newspapers of <?php echo $_GET['name'] ?></p>
</div>


<div class="container">

    <?php

    include 'admin/config.php';

    $city_name = $_GET['name'];

    $date_now = date("jS/F/Y");

    $sql = "SELECT * FROM `news_ paper` WHERE `date`='{$date_now}' and `city`='{$city_name}'  ORDER BY p_no";

    $run = mysqli_query($conn, $sql) or die("SQL ERROR");

    if (mysqli_num_rows($run) > 0) {
        while ($row = mysqli_fetch_assoc($run)) {
    ?>
            <div class="text-center">
                <img src="<?php echo "admin/imgs/" . $row['img_name'] ?>">
            </div>
            <hr>
    <?php
        }
    }
    ?>
</div>

<?php include 'footer.php'; ?>