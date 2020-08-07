<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        .wrapper {
            display: flex;
            /* height: 300vh;*/
            width: 1200px;
            height: 900px;
            margin: 10px auto;
        }

        .np {

            box-shadow: 0px 0px 5px 5px gray
        }

        .left {
            margin: 10px;
            padding: 5px;
            flex: 1 1 auto;
            max-width: 30%;
        }

        .right {
            flex: 1 1 auto;
            border: 1px solid blue;
            max-width: 70%;
        }

        .left {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .left>img {
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        .right {
            position: relative;
            overflow: hidden;
        }

        .inner {
            position: absolute;
            width: 200%;
            height: 200%;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .inner>img {
            width: 100%;
            height: auto;
        }
    </style>
    <title>Hello, world!</title>
</head>
<br>
<div>
    <a href=" index.php">
        <img style="margin-left: 35%; width: 30%;" src=" assets/logo.png" alt="">
    </a>
</div>

<br>

<nav class="abc">
    <ul>
        <li><a href="index.php">home</a></li>
        <li><a href="oldnews.php">Old_newspapers</a></li>
        <li><a href="aboutus.php">About_us</a></li>
        <li><a href="contactus.php">Contact_us</a></li>
    </ul>
</nav>


<div class="container">
    <div style="margin-top: -16px;">
        <div class="row">
            <div style="background-color: red; color: white;" class="col-sm-2">
                <p style="padding-top: 10px;" class="text-center"><big><b>Breaking news..</b></big></p>
            </div>
            <div class="col-sm-10">

                <?php
                include 'admin/config.php';
                $sqlshowbn = "SELECT * FROM `breaking_news`";
                $runsbn = mysqli_query($conn, $sqlshowbn) or die("sql show breakingnews error");
                $data = mysqli_fetch_assoc($runsbn);
                ?>
                <marquee style="padding-top: 10px;" behavior="" direction=""><b><?php echo $data['b_news'] ?></b></marquee>
            </div>
        </div>
    </div>
</div>