<?php
 if (isset($_GET['img_url'])) {
    $img_url = $_GET['img_url'];
} else {
    $img_url = '';
}
?>
<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1">
    <title>KitKat隨心所欲 奇享時刻</title>
    <meta name="description" content="Kitkat隨心所欲‧奇享時刻巧克力樂園">
    <meta name="author" content="otter">
    <meta name="copyright" content="pulsation">
    <meta name="description" content="Kitkat隨心所欲‧奇享時刻巧克力樂園">
    <meta itemprop="name" content="Kitkat隨心所欲‧奇享時刻巧克力樂園">
    <meta itemprop="image" content="https://www.kitkatevent.com.tw/uploads/<?php echo $img_url ?>">
    <meta itemprop="description" content="Kitkat隨心所欲‧奇享時刻巧克力樂園">
    <meta property="fb:app_id" content="2831458826964843">
    <meta property="og:type" content="website">
    <meta property="og:title" content="KitKat隨心所欲 奇享時刻">
    <meta property="og:url"
          content="https://www.kitkatevent.com.tw/<?php echo 'fb_share?img_url=' . $img_url ?>">
    <meta property="og:image" content="https://www.kitkatevent.com.tw/uploads/<?php echo  $img_url ?>">
    <meta property="og:description" content="Kitkat隨心所欲‧奇享時刻巧克力樂園">
</head>
<body>
<img src="https://www.kitkatevent.com.tw/uploads/<?php echo $img_url ?>" style="opacity: 0;">
<script type="text/javascript">
 setTimeout(() => {
       location.href = 'https://www.kitkatevent.com.tw/home?fb';
    }, 3000)
    
</script>
</body>
</html>
