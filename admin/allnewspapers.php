<?php include 'header.php';

$city = $_GET['city'];

?>

<br><br><br>
<div style="margin-right: 10%; margin-left: 10%;">
    <h1 class="display-4"><?php echo $city ?>'s Newspapers</h1>
    <br>
    <?php $date_now = date("jS/F/Y"); ?>
    <h1 class="display-4"><?php echo $date_now; ?></h1>
    <hr>
    <div class="row">

        <?php
        $sql2 = "SELECT * FROM `news_ paper` WHERE `date`='{$date_now}' and `city`='{$city}'";
        $run2 = mysqli_query($conn, $sql2) or die("sql error");
        while ($data = mysqli_fetch_assoc($run2)) {
        ?>

            <div class="col">
                <img style="max-height: 200px;" src="<?php echo "imgs/" . $data['img_name'] ?>">
                <p>Page no. <?php echo $data['p_no']; ?></p>
                <a href="" class="btn btn-danger text-center">Delete</a>
            </div>
        <?php
        }
        ?>

    </div>
</div>


<?php include 'footer.php'; ?>