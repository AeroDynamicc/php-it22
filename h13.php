<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faili üleslaadimine ja kuvamine</title>
</head>
<body>
    <h2>Üleslaadimine ja kuvamine</h2>
    <form action="" method="post" enctype="multipart/form-data">
        Vali pilt (JPG või JPEG): <input type="file" name="file">
        <input type="submit" value="Üleslaadimine" name="submit">
    </form>

    <?php
    if(isset($_POST['submit'])) {
        $file_name = $_FILES['file']['name'];
        $file_size = $_FILES['file']['size'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_type = $_FILES['file']['type'];

        // Kontrollime failitüüpi
        $file_ext = strtolower(end(explode('.', $file_name)));
        $extensions = array("jpeg", "jpg");
        
        if(in_array($file_ext, $extensions) === false){
            echo "Ainult JPG ja JPEG failid on lubatud.";
        }

        if($file_size > 2097152) {
            echo 'Fail peab olema väiksem kui 2 MB';
        }

        if(empty($errors) == true) {
            move_uploaded_file($file_tmp, "uploads/" . $file_name);
            echo 'Fail edukalt üles laetud: <br>';
            echo "<a href='uploads/$file_name' target='_blank'><img src='uploads/$file_name' style='max-width: 500px;'></a>";
        } else {
            print_r($errors);
        }
    }
    ?>
</body>
</html>
