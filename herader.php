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
            width: 1400px;
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
            max-width: 40%;
        }

        .right {
            flex: 1 1 auto;
            border: 1px solid blue;
            max-width: 60%;
        }

        .left {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .left>img {
            width: 100%;
            height: auto;
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
<div>
    <a href=" index.php">
        <img style="margin-left: 35%; width: 30%;" src=" assets/logo.png" alt="">
    </a>
</div>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="oldnews.php">Old_newspapers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">About_us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactus.php">Contact_us</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="blog.php">Blog</a>
                </li> -->

            </ul>
            <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> -->
        </div>
    </nav>