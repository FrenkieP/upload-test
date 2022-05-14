<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>keytest</title>
</head>
<body>

    <div class="container">
        <div class="header">
            <h1 class="text-center">GCP</h1>
            <hr>
            <h2 class="text-center"><strong>P</strong> Set up </h2>
        </div>

    

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" class = "form-control">
        <button type="submit" name="upload" class="form-control">Upload</button>
    </form>



    <?php
        
        include "output.php";
        $storage = new storage();
        
        if (isset($_POST['upload'])){
            $storage -> upload_object('keygen1_bucket', $_FILES['file']['name'], $_FILES['file']['tmp_name']) ;
        }

       

    ?>

    </div>
</body>
</html>