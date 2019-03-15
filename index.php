<!DOCTYPE html>
<html>
    <?php include('templates/header.php') ?>
    <body>

        <div class="small-shadow"></div>
        <div class="medium-shadow"></div>
        <div class="form-container">
            <p class="bold">FILE UPLOADER</p>
            <div class="actions-container">
                <form action="./upload.php" method="POST" enctype="multipart/form-data">
                    <p class="text-center m-t-0 m-b-50">
                        <i class="fas fa-cloud-upload-alt size-60"></i>
                    </p>
                    <input class="hide-input-file" type="file" name="uploaded" id="uploaded">
                    <p class="text-center m-0">
                        <label class="file-label" for="uploaded">Scegli il file</label>
                    </p>
                    <input type="hidden" id="action" name="action" value="upload" />
                    <div class="divider"></div>
                    <p class="text-center m-0">
                        <input type="submit" value="Carica" name="submit">
                    </p>
                </form>
            </div>
        </div>

    </body>
</html>