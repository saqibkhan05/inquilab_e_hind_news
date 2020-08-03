<?php include 'herader.php'; ?>


<div>
    <ul style="display:flex; justify-content: center; margin-top: 10px;">
        <li style="padding: 10px; list-style: none; background-color: navy; color:white; border-radius: 10px; margin: 5px;">Page no - 1</li>
        <li style="padding: 10px; list-style: none; background-color: navy; color:white; border-radius: 10px; margin: 5px;">Page no - 2</li>
        <li style="padding: 10px; list-style: none; background-color: navy; color:white; border-radius: 10px; margin: 5px;">Page no - 3</li>
        <li style="padding: 10px; list-style: none; background-color: navy; color:white; border-radius: 10px; margin: 5px;">Page no - 4</li>
        <li style="padding: 10px; list-style: none; background-color: navy; color:white; border-radius: 10px; margin: 5px;">Page no - 5</li>
        <li style="padding: 10px; list-style: none; background-color: navy; color:white; border-radius: 10px; margin: 5px;">Page no - 6</li>
        <li style="padding: 10px; list-style: none; background-color: navy; color:white; border-radius: 10px; margin: 5px;">Page no - 7</li>
        <li style="padding: 10px; list-style: none; background-color: navy; color:white; border-radius: 10px; margin: 5px;">Page no - 8</li>
    </ul>
</div>


<div class="text-center" style="margin-top: 4%; margin-bottom: 2%;">
    <h1 style="text-transform: uppercase;" class="display-4"><b><?php echo $_GET['name'] ?></b></h1>
    <p>Today's Newspaper page-1</p>

</div>

<div class="wrapper">
    <div class="left">
        <img class="np" src="assets/1.jpeg" />
    </div>

    <div class="right">
        <div class="inner">
            <img src="assets/1.jpeg" />
        </div>
    </div>
</div>

<!-- <div class="container">

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
</div> -->


<script type="text/javascript">
    const inner = document.querySelector(".inner");
    const left = document.querySelector(".left");
    left.addEventListener("mousemove", handleMousemove, false);

    function handleMousemove(event) {
        let {
            width,
            height
        } = this.getBoundingClientRect();
        let xAxis = event.offsetX / width * 100;
        let yAxis = event.offsetY / height * 100;
        inner.style.transform = `translate(-${xAxis}%, -${yAxis}%)`;
    }
</script>

<?php include 'footer.php'; ?>