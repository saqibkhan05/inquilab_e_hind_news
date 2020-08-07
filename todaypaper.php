<?php include 'herader.php';
$city_name = $_GET['name'];
$pageno = $_GET['pageno'];
?>


<div>
    <ul style="display:flex; justify-content: center; margin-top: 10px;">
        <a href="todaypaper.php?name=<?php echo $city_name; ?>&pageno=1" style="padding: 10px; list-style: none; background-color: navy; color:white; border-radius: 10px; margin: 5px;" id="btn1">Page no - 1</a>
        <a href="todaypaper.php?name=<?php echo $city_name; ?>&pageno=2" style="padding: 10px; list-style: none; background-color: navy; color:white; border-radius: 10px; margin: 5px;" id="btn2">Page no - 2</a>
        <a href="todaypaper.php?name=<?php echo $city_name; ?>&pageno=3" style="padding: 10px; list-style: none; background-color: navy; color:white; border-radius: 10px; margin: 5px;" id="btn3">Page no - 3</a>
        <a href="todaypaper.php?name=<?php echo $city_name; ?>&pageno=4" style="padding: 10px; list-style: none; background-color: navy; color:white; border-radius: 10px; margin: 5px;" id="btn4">Page no - 4</a>
        <a href="todaypaper.php?name=<?php echo $city_name; ?>&pageno=5" style="padding: 10px; list-style: none; background-color: navy; color:white; border-radius: 10px; margin: 5px;" id="btn5">Page no - 5</a>
        <a href="todaypaper.php?name=<?php echo $city_name; ?>&pageno=6" style="padding: 10px; list-style: none; background-color: navy; color:white; border-radius: 10px; margin: 5px;" id="btn6">Page no - 6</a>
        <a href="todaypaper.php?name=<?php echo $city_name; ?>&pageno=7" style="padding: 10px; list-style: none; background-color: navy; color:white; border-radius: 10px; margin: 5px;" id="btn7">Page no - 7</a>
        <a href="todaypaper.php?name=<?php echo $city_name; ?>&pageno=8" style="padding: 10px; list-style: none; background-color: navy; color:white; border-radius: 10px; margin: 5px;" id="btn8">Page no - 8</a>
    </ul>
</div>


<div class="text-center" style="margin-top: 4%; margin-bottom: 2%;">
    <h1 style="text-transform: uppercase;" class="display-4"><b><?php echo $_GET['name'] ?></b></h1>
    <p>Today's Newspaper page-1</p>

</div>



<?php

include 'admin/config.php';

$sql1 = "SELECT * FROM `news_ paper`
    ORDER BY `id` DESC  
    LIMIT 1";
$run1 = mysqli_query($conn, $sql1);
$data1 = mysqli_fetch_assoc($run1);
$date = $data1['date'];


$sql2 = "SELECT * FROM `news_ paper` WHERE `date`='{$date}' and (`city`='{$city_name}' and `p_no` = {$pageno})";

$run2 = mysqli_query($conn, $sql2) or die("SQL ERROR");
$data2 = mysqli_fetch_assoc($run2);

?>



<div class="wrapper">
    <div class="left">
        <img class="np" src="<?php echo 'admin/imgs/' . $data2['img_name']; ?>" />
    </div>

    <div class="right">
        <div class="inner">
            <img src="<?php echo 'admin/imgs/' . $data2['img_name']; ?>" />
        </div>
    </div>
</div>


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