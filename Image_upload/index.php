<?php 

require_once('./operations.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        window.history.forward();
    </script>
</head>
<body>
    <h1 class="text-center my-3">Registration form</h1>
    <div class="container d-flex justify-content-center ">
        <form action="display.php" method="post" class="w-50" enctype="multipart/form-data">
            <!-- <div class="form-group my-4">
                <input type="text" name="username" placeholder="Username" class="form-control">
            </div>
            <div class="form-group my-4">
                <input type="number" name="mobile" placeholder="Mobile" class="form-control">
            </div> -->
            <?php inputFields("Username","username","","text"); ?>
            <?php inputFields("Mobile","mobile","","number"); ?>
            <?php inputFields("","file","","file"); ?>
            <button class="btn btn-dark" type="submit" name="submit">Submit</button>
            

            
            
        </form>
    </div>
</body>
</html>