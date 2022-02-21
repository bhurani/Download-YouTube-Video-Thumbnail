<?php
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!empty($_POST['imgurl'])){
      $img_url = $_POST['imgurl'];
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Download YouTube Video Thumbnail</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Poppins:wght@400;500&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/b992a17763.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/index.css">
</head>
<body>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <header>Download Thumbnail</header>
    <div class="url-input">
      <span class="title">Paste video url:</span>
      <div class="field">
        <input type="url" placeholder="https://www.youtube.com/watch?v=" required class="url-field">
        <input type="hidden" name="imgurl" class="hidden-field">
        <span class="bottom-line"></span>
      </div>
    </div>
    <div class="preview-area">
      <img src="" alt="Thumbnail" class="thumbnail">
      <i class="fa-solid fa-cloud-arrow-down"></i>
      <span>Paste video url to see preview</span>
    </div>
    <input type="submit" value="Download Thumbnail" class="download-btn">
  </form>

  <script src="js/index.js"></script>
</body>
</html>
