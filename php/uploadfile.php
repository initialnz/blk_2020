<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>
    <form action="../process/proses_upload.php" method="POST" enctype="multipart/form-data">
        Pilih File : <input type="file" name="file">
        <input type="submit" name="upload" value="Upload">
    </form>
</body>
</html>