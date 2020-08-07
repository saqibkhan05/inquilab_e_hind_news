<?php include 'header.php'; ?>

<br><br><br>
<div class="container">
    <h1>Upload New Breaking news</h1>
    <hr>
    <br>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="POST">
        <div class="form-group">
            <label>Breaking news</label>
            <textarea class="form-control" name="bn_data" rows="3"></textarea>
        </div>
        <button type="submit" name="breakingnewssubmit" class="btn btn-primary">Submit</button>
    </form>

    <?php

    if (isset($_POST['breakingnewssubmit'])) {
        include 'config.php';

        $bn_data = $_POST['bn_data'];

        $sqlbn = "UPDATE `breaking_news` SET `b_news`='{$bn_data}' WHERE `b_id`=3";
        $run = mysqli_query($conn, $sqlbn) or die("sqlbn error");

        if ($run) {
            echo "<script>
                Swal.fire(
                    'Updated',
                    'your news paper update sucessfully',
                    'success'
                )
            </script>";
        }
    }

    $sqlshowbn = "SELECT * FROM `breaking_news`";
    $runsbn = mysqli_query($conn, $sqlshowbn) or die("sql show breakingnews error");
    $data = mysqli_fetch_assoc($runsbn);
    ?>

    <br>
    <hr>
    <h2><u><b>Current Breaking News</b></u></h2>
    <p><?php echo $data['b_news'] ?></p>






</div>


<?php include 'footer.php'; ?>