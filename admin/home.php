<?php include 'header.php';


$city = $_GET['city'];

?>
<br>
<br><br>

<div style="margin-right: 10%; margin-left: 10%;">
    <h1 class="display-4">Upload New Newspaper</h1>
    <hr>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>City</label>
                    <input type="text" class="form-control" value="<?php echo $city; ?>" readonly>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Page number</label>
                    <select class="form-control" name="page_no">
                        <option value="1"> page no 1</option>
                        <option value="2"> page no 2</option>
                        <option value="3"> page no 3</option>
                        <option value="4"> page no 4</option>
                        <option value="5"> page no 5</option>
                        <option value="6"> page no 6</option>
                        <option value="7"> page no 7</option>
                        <option value="8"> page no 8</option>
                    </select>
                </div>
            </div>
        </div>
        <hr>
        <div class="form-group">
            <div class="custom-file">
                <input type="file" name="p_img" class="custom-file-input">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">update</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $page_no = $_POST['page_no'];

        $p_no = $_POST['page_no'];
        $date = date("jS/F/Y");

        // $rmsql = "SELECT * FROM `news_paper` WHERE `id`={$page_no} and `city`='{$city}'";
        // $run = mysqli_query($conn, $rmsql) or die("remove sql error");
        // $row = mysqli_fetch_assoc($run);


        // unlink("../imgs/" . $row['img_name']);


        if (isset($_FILES['p_img'])) {
            $error = array();
            $ext = array('jpg', 'jpeg', 'png');

            $img_name = $_FILES['p_img']['name'];
            $img_name = preg_replace("/\s+/", "_", $img_name);
            $img_size = $_FILES['p_img']['size'];
            $img_temp_name = $_FILES['p_img']['tmp_name'];
            $img_type = $_FILES['p_img']['type'];

            $file_ext =  @end(explode('.', $img_name));
            $img_name = date("mjyhis") . "." . $file_ext;

            if (in_array($file_ext, $ext) === false) {
                $error[] = "only JPG PNG AND JPEG files are supported";
            }

            if ($img_size > 16777216) {
                $error[] = "the file size should be less then 2MB.";
            }

            if (empty($error) == true) {
                move_uploaded_file($img_temp_name, "imgs/" . $img_name);
            } else {
                print_r($error);
                die("there is problem in uploading the img");
            }
        }

        // $sql = "INSERT INTO `news_paper`(`id`, `img_name`) VALUES (1,'{$img_name}')";

        $sql = "INSERT INTO `news_ paper`(`city`, `date`, `img_name`, `p_no`) VALUES ('{$city}','{$date}','{$img_name}',{$p_no})";
        if (mysqli_query($conn, $sql)) {
            echo "<script>
                Swal.fire(
                    'Updated',
                    'your news paper update sucessfully',
                    'success'
                )
            </script>";
        } else {
            echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                    footer: '<a href>Why do I have this issue?</a>'
                  })
                </script>";

            echo '<a href="../"><h1 align="center">Go back to home.</h1></a>';
        }
    }
    ?>

    <hr>
    <?php $date_now = date("jS/F/Y"); ?>
    <h1 class="display-4"><?php echo $date_now; ?></h1>
    <hr>
    <div class="row">

        <?php
        $sql2 = "SELECT * FROM `news_ paper` WHERE `date`='{$date_now}' and `city`='{$city}'";
        $run2 = mysqli_query($conn, $sql2) or die("sql error");
        while ($data = mysqli_fetch_assoc($run2)) {
        ?>

            <div class="col">
                <img style="max-height: 200px;" src="<?php echo "imgs/" . $data['img_name'] ?>">
                <p>Page no. <?php echo $data['p_no']; ?></p>
                <a href="" class="btn btn-danger text-center">re-upload</a>
            </div>
        <?php
        }
        ?>

    </div>
</div>
<?php include 'footer.php'; ?>