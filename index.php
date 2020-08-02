<?php include 'herader.php'; ?>

<div style="padding-left: 5%; background-image: linear-gradient(#9999ff,  #e6e6ff); padding-right: 5%;">
    <div style="height: 100%;">
        <div class="row">
            <div style="padding:5%;" class="col-sm-6">
                <iframe width="901" height="721" src="https://www.youtube.com/embed/PCpvxAVZ8cY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-sm-6 text-center" style="padding-top: 15%;">
                <h1 style="text-transform: uppercase;" class="display-4">welcome to inqulab-e-hind</h1>
                <p>inqulab-e-hind science 1990.</p>
                <a href="contactus.php" class="btn btn-danger">Contact us</a>
            </div>
        </div>
    </div>

</div>
<div class="text-center" style="margin-top: 4%; margin-bottom: 2%;">
    <h1 style="text-transform: uppercase;" class="display-4">Our newspapers</h1>
    <p>This is <?php echo date("jS/F/Y"); ?> newspapers of your three cities.</p>
</div>



<div class="sec2">

    <?php
    include 'admin/config.php';
    $date_now = date("jS/F/Y");
    $sql = "SELECT * FROM `news_ paper` WHERE `date`='{$date_now}' and `p_no`=1";
    $run = mysqli_query($conn, $sql) or die("sql error");
    while ($data = mysqli_fetch_assoc($run)) {
        switch ($data['city']) {
            case 'Delhi':
    ?>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="todaypaper.php?name=Delhi">
                                <img width="100%" src="<?php echo "admin/imgs/" . $data['img_name'] ?>" alt="">
                                <h2 class="text-center">Delhi</h2>
                            </a>
                        </div>

                    <?php
                    break;
                case 'Patna':
                    ?>

                        <div class="col-sm-4">
                            <a href="todaypaper.php?name=Patna">
                                <img width="100%" src="<?php echo "admin/imgs/" . $data['img_name'] ?>" alt="">
                                <h2 class="text-center">Patna</h2>
                            </a>
                        </div>

                    <?php
                    break;
                case 'Katihaar':
                    ?>

                        <div class="col-sm-4">
                            <a href="todaypaper.php?name=Katihaar">
                                <img width="100%" src="<?php echo "admin/imgs/" . $data['img_name'] ?>" alt="">
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