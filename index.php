<?php
  require_once('include/db.inc.php');
  require_once('include/session.inc.php');
  if (isset($_POST['ineed'])) {
    if($_POST['ineed'] != '' && $_POST['ioffer'] != '') {
    
      $character_cnt_ineed = strlen($_POST['ineed']);
      $character_cnt_ioffer = strlen($_POST['ioffer']);

      if ($character_cnt_ineed > '3' && $character_cnt_ioffer > '3') {
        
        $_SESSION['ineed'] = $_POST['ineed'];
        $_SESSION['ioffer'] = $_POST['ioffer'];

        header("Location: /final-step");
      } else {
        $error_msg = 'You need to enter more than 3 characters';
      }

    } else {
      $error_msg = 'kamu jangan mengosongkan ini';
    }
  }
?>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1">
  <meta name="robots" content="index, follow">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Tukueran Yuk, Save Your Money and Baret!</title>
  <link href="css/reset.css" rel="stylesheet" type="text/css">
  <link href="css/1140.css" rel="stylesheet" type="text/css">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,700' rel='stylesheet' type="text/css">
</head>

<body>
  <div class="container12">

    <?php include "nav.php" ?>

    <h1 id="home">Butuh Sesuatu? Seseorang mungkin ingin Barter</h1>

    <form action="" method="POST">

      <?php if (isset($error_msg)) { ?>
        <div class="alert"><?php echo $error_msg; ?></div>
      <?php } ?>
    
      <div class="row">
        <div class="column4">
          <input type="text" class="large-fld" name="ineed" value="" placeholder="  I need this ..">
        </div>

        <div class="column5">
          <input type="text" class="large-fld" name="ioffer" value="" placeholder="  I can offer this..">
        </div>

        <div class="column3">
          <input type="submit" class="large-btn large-fld large-magnify" name="step1" value="Find Matches">
        </div>
      </div>
    </form>
    <p id="home-info">Separate you wants and offers with a comma: <span>Baby sitter, washer fixed, cheap car</span>
    </p>
  </div>
    
</body>

</html>