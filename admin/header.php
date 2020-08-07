<?php
include 'config.php';
session_start();
if (!isset($_SESSION['username'])) {
    header("location: {$myurl}/admin/index.php");
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <title>admin!</title>
</head>

<body style="font-family: 'Montserrat', sans-serif;">

    <!-- start navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="dashboard.php">
            <!-- <img src="../assets/logo3.png" alt=""> -->
            Admin Dashboard
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">Upload new newspaer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="breakingnews.php">Breaking news</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="advertisement.php">advertisement</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="logout.php" class="btn btn-outline-success my-2 my-sm-0">Logout</a>
            </form>
        </div>
    </nav>
    <!-- end navbar -->