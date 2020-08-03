<?php include 'header.php'; ?>

<br><br><br>
<div class="container">
    <h1 class="display-4">Upload New newspapers</h1>
    <br>
    <div class="row">
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><b><big>Delhi</big></b></h5>
                    <a href="home.php?city=Delhi" class=" btn btn-primary">Upload Newspaper</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><b><big>Patna</big></b></h5>
                    <a href="home.php?city=Patna" class=" btn btn-primary">Upload Newspaper</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><b><big>Katihaar</big></b></h5>
                    <a href="home.php?city=Katihaar" class=" btn btn-primary">Upload Newspaper</a>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <hr>
    <h1 class="display-4">Old newspapers</h1>
    <br>
    <div class="row">
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><b><big>Delhi</big></b></h5>
                    <a href="allnewspapers.php?city=Delhi" class=" btn btn-primary">Goto Newspapers</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><b><big>Patna</big></b></h5>
                    <a href="allnewspapers.php?city=Patna" class=" btn btn-primary">Goto Newspapers</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><b><big>Katihaar</big></b></h5>
                    <a href="allnewspapers.php?city=Katihaar" class=" btn btn-primary">Goto Newspapers</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <hr>
    <h1 class="display-4">Breaking news</h1>
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
        $sqlbn = "INSERT INTO `breaking_news`(`b_news`) VALUES ('{$bn_data}')";
        $run = mysqli_query($conn, $sqlbn) or die("sqlbn error");
        if ($run) {
            echo "ok done";
        }
    }
    ?>


</div>


<?php include 'footer.php'; ?>