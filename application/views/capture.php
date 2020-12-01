<?php
defined('BASEPATH') or exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *");
if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
    $newFileName = "";
    $image_function = "";
    $percent = 0.5;
    $dirname = "uploads/";
    $image_create_function = "";
    $uploadPath = $_SERVER['DOCUMENT_ROOT'] . $dirname;
    echo $uploadPath;
    if (!file_exists($uploadPath)) {
        mkdir($uploadPath);
        chmod($uploadPath, 0777);
    }
    $types = array('jpeg', 'jpg', 'gif', 'png');
    $filename = $_FILES["image"]["name"];
    $file_name_arr = explode(".", $filename);
    $extension = end($file_name_arr);
    if (in_array($extension, $types)) {
        $newfilename = "image." . $extension;
        echo $newfilename;

        //read images and delete last uploaded
        $images = glob($uploadPath . "*");
        if (!empty($images)) {
            foreach ($images as $image) {
                if (is_file($image))
                    @unlink($image);
            }
        }

        // Get new sizes
        list($width, $height) = getimagesize($_FILES['image']['tmp_name']);
        $newwidth = $width * $percent;
        $newheight = $height * $percent;

        // image load with new height & width
        $thumb = imagecreatetruecolor($newwidth, $newheight);

        //generate image with diff extension
        if ($extension == 'gif') {
            system("convert " . $_FILES['image']['tmp_name'] . " -coalesce -repage 0x0 -resize " . $newheight . "x" . $newwidth . " -layers Optimize " . $uploadPath . $newfilename);
        } else if ($extension == 'jpg' || $extension == 'jpeg') {
            $new_image = imagecreatefromjpeg($_FILES['image']['tmp_name']);
            imagecopyresized($thumb, $new_image, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
            imagejpeg($thumb, $uploadPath . $newfilename);
        } else if ($extension == 'png') {
            $new_image = imagecreatefrompng($_FILES['image']['tmp_name']);
            imagecopyresized($thumb, $new_image, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
            imagepng($thumb, $uploadPath . $newfilename);
        } else {
            echo "Plese upload valid image";
        }
        chmod($uploadPath . $newfilename, 0777);
    } else {
        echo "Sorry your file was not uploaded. It may be the wrong filetype. We only allow JPG, GIF, and PNG filetypes. <br/><br/>";
    }
} else {
    echo "Please select a file. <br/><br/>";
}
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TTL</title>
    <link rel="shortcut icon" href="./img/favicon.ico">
    <meta name=title content="TTL-20201215">
    <meta name=description content="TTL-20201215">
    <meta name=keywords content="TTL-20201215">
    <meta property=og:title content="TTL">
    <meta property=og:type content="Website">
    <meta property=og:image content="./img/fb-share.jpg">
    <meta property=og:description content="TTL-20201215">
</head>
<style>
    #container{
        width: 600px;
        height: 330px;
    }
</style>
<body>
<fieldset style="width: 50%">
    <legend>Image Upload</legend>
    <form method="post" action="" enctype="multipart/form-data">
        <input type="file" name="image" value="select..">
        <input type="submit" value="Upload" name="upload">
    </form>
</fieldset>
<br/><br/>
<button id="crop" value="crop">CROP</button>
<div id="container">
    <?php
    $dirname = "uploads/";
    $images = glob($dirname . "*");
    if (!empty($images)) {
        foreach ($images as $image) {
            echo '<img id="source" src="' . $image . '" height="100%" width="100%"  style="display: none"/><br />';
        }
    } else {
        echo '<img id="source" src="uploads/image.png" height="100%" width="100%"  style="display: none"/><br />';

    }
    ?>
</div>
<!-- polyfill -->
<script src="./assets/game/js/polyfill.min.js"></script>
<!-- plugin -->
<script src="./assets/game/js/jquery.js"></script>
<link rel="stylesheet" href="./assets/game/js/cropme/cropme.css">
<script src="./assets/game/js/cropme/cropme.js"></script>
    <script src="./assets/game/js/webcam-easy/webcam-easy.js"></script>
<script>
    var croper_elem = $('#container').cropme({
        container: {
            width: 600,
            height: 330
        },
        viewport: {

            type: 'circle',
            border: {
                enable: true,
                width: 2,
                color: '#ff0000'
            }
        }
    });
    var img = $('#source').attr('src');
    croper_elem.cropme('bind', {
        url: img,
        position: {
            x: 1,
            y: 1,
            // scale: 1,
            // origin: {
            //     x: 1,
            //     y: 1
            // }
        },
    });
    $('#crop').click(function () {
        var position = croper_elem.cropme('position');
        console.log(position);
        croper_elem.cropme('crop', 'blob')
            .then(function(output) {
                console.log(output);    
                // here you can use the blob output
                $('#source').attr('src',output);
            });
    });
</script>
</body>

</html>
