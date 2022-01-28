<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/gallery.css">
    <script src="js/lightbox-plus-jquery.min.js"></script>
    <link rel="stylesheet" href="css/lightbox.min.css">
    <title>Gallery</title>
</head>

<body>
    <?php
    $myDirectory = opendir("images/gallery");
    while ($entryName = readdir($myDirectory)) {
        $dirArray[] = $entryName;
    }
    closedir($myDirectory);
    $indexCount    = count($dirArray);
    ?>
    <div class="image-box">
    </div>
    <div class="container">
        <div class="content">
            <h3><span>Photo</span> Gallery</h3>
        </div>
        <div class="box">
            <ul>
                <?php
                for ($index = 0; $index < $indexCount; $index++) {
                    $extension = substr($dirArray[$index], -3);
                    if ($extension == 'jpg' || $extension == '.jpeg' || $extension == 'png') {
                        echo '
                        <a href="images/gallery/' . $dirArray[$index] . '" data-lightbox="gallery"> <li><img src="images/gallery/' . $dirArray[$index] . '" alt="" /></li></a>
                    ';
                    }
                }
                ?>
            </ul>
        </div>
    </div>
</body>

</html>