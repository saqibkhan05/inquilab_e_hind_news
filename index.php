<?php include 'herader.php'; ?>




<div style="padding-left: 5%; background-image: linear-gradient(#9999ff,  #e6e6ff); padding-right: 5%;">
    <div style="height: 100%;">
        <div class="row">
            <div style="padding:5%;" class="col-sm-6">
                <iframe width="700" height="500" src="https://www.youtube.com/embed/PCpvxAVZ8cY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-sm-6 text-center" style="padding-top: 15%;">
                <h1 style="text-transform: uppercase;" class="display-4">welcome to inqulab-e-hind</h1>
                <p>inqulab-e-hind science 1990.</p>
                <a href="contactus.php" class="btn btn-danger">Contact us</a>
            </div>
        </div>
    </div>

</div>

<div class="container">
    <div style="margin-top: 20px; width:100%;" class="row">
        <div class="col-sm-6 text-center">
            <!-- <img src="assets/123.jpg" alt=""> -->
            <div style="background-color: red; color: white;" class="text-center">
                <p class="text-center"><big><b>Breaking news..</b></big></p>
            </div>
            <marquee style="padding-top: 10px;" behavior="" direction=""><b><?php echo $data['b_news'] ?></b></marquee>

        </div>
        <div class="col-sm-6 text-center">
            <img src="assets/123.jpg" alt="">
        </div>
    </div>
</div>

<?php
$sql1 = "SELECT * FROM `news_ paper`
    ORDER BY `id` DESC  
    LIMIT 1";
$run1 = mysqli_query($conn, $sql1);
$data1 = mysqli_fetch_assoc($run1);
$date = $data1['date'];

?>

<div class="text-center" style="margin-top: 4%; margin-bottom: 2%;">
    <h1 style="text-transform: uppercase;" class="display-4">Our newspapers</h1>
    <p>This is <?php echo $date ?> newspapers of your three cities.</p>
</div>

<div class="sec2">

    <?php

    $sql = "SELECT * FROM `news_ paper` WHERE `date`='{$date}' and `p_no`=1";
    $run = mysqli_query($conn, $sql) or die("sql error");
    while ($data = mysqli_fetch_assoc($run)) {
        switch ($data['city']) {
            case 'Delhi':
    ?>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="todaypaper.php?name=Delhi&pageno=1">
                                <img class="np" width="100%" src="<?php echo "admin/imgs/" . $data['img_name'] ?>" alt="">
                                <h2 class="text-center">Delhi</h2>
                            </a>
                        </div>

                    <?php
                    break;
                case 'Patna':
                    ?>

                        <div class="col-sm-4">
                            <a href="todaypaper.php?name=Patna&pageno=1">
                                <img class="np" width="100%" src="<?php echo "admin/imgs/" . $data['img_name'] ?>" alt="">
                                <h2 class="text-center">Patna</h2>
                            </a>
                        </div>

                    <?php
                    break;
                case 'Katihaar':
                    ?>

                        <div class="col-sm-4">
                            <a href="todaypaper.php?name=Katihaar&pageno=1">
                                <img class="np" width="100%" src="<?php echo "admin/imgs/" . $data['img_name'] ?>" alt="">
                                <h2 class="text-center">Katihaar</h2>
                            </a>
                        </div>

                <?php
                    break;
            }
                ?>
            <?php
        }
            ?>
                    </div>
                </div>
</div>


<?php include 'footer.php'; ?>