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
    <title>Hello, world!</title>
</head>

<body style="font-family: 'Montserrat', sans-serif;">

    <!-- start navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="">Inquilab_e_hind</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="logout.php" class="btn btn-outline-success my-2 my-sm-0">Logout</a>
            </form>
        </div>
    </nav>
    <!-- end navbar -->


    <!-- start from -->
    <div class="container">
        <h1 style="margin-top: 3%;" align="center">Add news papers</h1>
        <hr>
        <div class="row">
            <div class="col-sm-3">
                <form action="paper/p1.php" method="POST" enctype="multipart/form-data">
                    <p><big><b>Page number 1</b></big></p>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" name="p1" class="custom-file-input">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">update</button>
                </form>
            </div>
            <div class="col-sm-3">
                <form action="paper/p2.php" method="POST" enctype="multipart/form-data">
                    <p><big><b>Page number 2</b></big></p>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" name="p2" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">update</button>
                </form>
            </div>
            <div class="col-sm-3">
                <form action="paper/p3.php" method="POST" enctype="multipart/form-data">
                    <p><big><b>Page number 3</b></big></p>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" name="p3" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">update</button>
                </form>
            </div>
            <div class="col-sm-3">
                <form action="paper/p4.php" method="POST" enctype="multipart/form-data">
                    <p><big><b>Page number 4</b></big></p>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" name="p4" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">update</button>
                </form>
            </div>
        </div>

        <hr>
        <div class="row">
            <div class="col-sm-3">
                <form action="paper/p5.php" method="POST" enctype="multipart/form-data">
                    <p><big><b>Page number 5</b></big></p>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" name="p5" class="custom-file-input">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">update</button>
                </form>
            </div>
            <div class="col-sm-3">
                <form action="paper/p6.php" method="POST" enctype="multipart/form-data">
                    <p><big><b>Page number 6</b></big></p>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" name="p6" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">update</button>
                </form>
            </div>
            <div class="col-sm-3">
                <form action="paper/p7.php" method="POST" enctype="multipart/form-data">
                    <p><big><b>Page number 7</b></big></p>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" name="p7" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">update</button>
                </form>
            </div>
            <div class="col-sm-3">
                <form action="paper/p8.php" method="POST" enctype="multipart/form-data">
                    <p><big><b>Page number 8</b></big></p>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" name="p8" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">update</button>
                </form>
            </div>
        </div>


        <!-- end from -->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>