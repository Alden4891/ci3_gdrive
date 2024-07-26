<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
</head>
<body>
    <h2>Upload Image</h2>
    <span><?=@$error?></span>
    <form action="<?=site_url('GoogleDriveController/upload')?>" method="post" enctype="multipart/form-data">
        <input type="file" name="imageFile[]" accept="image/jpeg" multiple>
        <br><br>
        <input type="submit" value="Upload">
    </form>
</body>
</html>