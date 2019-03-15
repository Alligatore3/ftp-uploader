<?php include_once('./functions.php'); ?>

<!DOCTYPE html>
<html>
    <?php include('./templates/header.php') ?>
    <body>

        <?php
            if(!isset($_POST["submit"])) showError('$_POST["submit"] not isset.');
            
            $full_path_uploaded = UPLOAD_DESTINATION . basename($_FILES["uploaded"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($full_path_uploaded, PATHINFO_EXTENSION));

            (move_uploaded_file($_FILES["uploaded"]["tmp_name"], $full_path_uploaded))
            ? pushToFTPServer( basename( $_FILES["uploaded"]["name"]) )
            : showError("Errore durante il caricamento da Browser");
        ?>

    </body>
</html>
