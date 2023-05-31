<!DOCTYPE html>
<html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body{
            background-color: antiquewhite;
        }
    </style>
    <title>Malumot kiritish</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        
        <label for="title">Title</label><br>
        <input type="text" name="title" id="title">
        <br>
        <label for="malumot">Malumot</label><br>
        <input type="text" name="malumot" id="malumot">
        <br>
        <label for="link">link</label>
        <input type="text" name="link" id="link">
        <br>
        <label for="sana">Sana</label>
        <input type="date" name="sana" id="sana">
        <br>
        <label for="image">Surat:</label><br>
        <input type="file" name="image" id="image" required>
        <br>
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>
