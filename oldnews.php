<?php include 'herader.php'; ?>

<br>
<div class="container">
    <div class="text-center">
        <h1 class="display-4">Archive</h1>
        <p>1st / Augest / 2020 se purane newspaper nahi h.</p>
        <hr>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="row">
                <div class="col">
                    <select class="form-control" name="city">
                        <option value="Delhi">Delhi</option>
                        <option value="Patna">Patna</option>
                        <option value="Katiyar">Katiyar</option>
                    </select>
                </div>
                <div class="col">
                    <input type="date" name="date">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Search nwespaper</button>
                </div>
            </div>
        </form>
    </div>
    <hr>
</div>







<br><br><br><br><br><br>
<br><br><br><br><br><br>

<?php include 'footer.php'; ?>