<?php
echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>';
include '../config.php';

$rmsql = "SELECT * FROM `np` WHERE `id`=1";
$run = mysqli_query($conn, $rmsql) or die("remove sql error");
$row = mysqli_fetch_assoc($run);

unlink("../imgs/" . $row['img_name']);


if (isset($_FILES['p1'])) {
    $error = array();
    $ext = array('jpg', 'jpeg', 'png');

    $img_name = $_FILES['p1']['name'];
    $img_name = preg_replace("/\s+/", "_", $img_name);
    $img_size = $_FILES['p1']['size'];
    $img_temp_name = $_FILES['p1']['tmp_name'];
    $img_type = $_FILES['p1']['type'];

    $file_ext =  @end(explode('.', $img_name));
    $img_name = date("mjyhis") . "." . $file_ext;

    if (in_array($file_ext, $ext) === false) {
        $error[] = "only JPG PNG AND JPEG files are supported";
    }

    if ($img_size > 16777216) {
        $error[] = "the file size should be less then 2MB.";
    }

    if (empty($error) == true) {
        move_uploaded_file($img_temp_name, "../imgs/" . $img_name);
    } else {
        print_r($error);
        die("there is problem in uploading the img");
    }
}

// $sql = "INSERT INTO `np`(`id`, `img_name`) VALUES (1,'{$img_name}')";
$sql = "UPDATE `np` SET `img_name`='{$img_name}' WHERE `id`=1";
if (mysqli_query($conn, $sql)) {
    header("Location: {$myurl}/admin/home.php");
} else {
    echo "<script>
                    Swal.fire(
                    'category added',
                    'your caregory added successfully',
                    'success'
                )
                </script>";

    echo '<a href="../"><h1 align="center">Go back to home.</h1></a>';
}