<?php
include 'config.php';
session_start();
if (isset($_SESSION['username'])) {
    header("location: {$myurl}/admin/dashboard.php");
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

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <h1 style="margin-top: 5%;" align="center" class="display-4">Login..</h1>
        <div class="abc" style="margin-top: 5%;">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                <div class="form-group">
                    <label>username</label>
                    <input type="text" name="uname" class="form-control" placeholder="Enter username">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="pass" class="form-control" placeholder="Password">
                </div>

                <button type="submit" name="login" class="btn btn-primary">login</button>
                <a class="btn btn-danger" href="../index.php">Cancel</a>
            </form>
        </div>

        <?php
        if (isset($_POST['login'])) {
            $uname = $_POST['uname'];
            $pass = $_POST['pass'];

            $que = "SELECT * from users where username = '{$uname}' and password = '{$pass}'";
            $run = mysqli_query($conn, $que) or die("there is query problem");
            if (mysqli_num_rows($run) > 0) {
                $row = mysqli_fetch_assoc($run);
                session_start();
                $_SESSION['username'] = $row['username'];
                header("Location: {$myurl}/admin/dashboard.php");
            } else {
                echo "<div class='alert alert-danger'> username and password are not found in database </div>";
            }
        }
        ?>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>