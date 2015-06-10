<?php
  require_once('include/db.inc.php');
  require_once('include/session.inc.php');
  if (!isset($_SESSION['ineed']))
    header("Location: /index.php");

?>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1">
  <meta name="robots" content="index, follow">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Tukeran Yuk, Save Your Money and Baret!</title>
  <link href="css/1140.css" rel="stylesheet" type="text/css">
  <link href="css/reset.css" rel="stylesheet" type="text/css">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300' rel='stylesheet' type="text/css">
</head>

<body>
  <div class="container12">

    <?php include "nav.php" ?>

    <h1 id="home"><strong>Great!</strong>Just one more step..</h1>

    <form action="" method="POST">

      <div class="alert"></div>

      <div class="row">
        <div class="column3">
          <input type="text" class="large-fld" name="ineed" value="" placeholder="  Email Addres ">
        </div>

        <div class="column3">
          <input type="text" class="large-fld" name="ioffer" value="" placeholder="  City  ">
        </div>
        
        <div class="column3">
          <select name="state" class="large-fld">
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="DC">District of Columbia</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
          </select>
        </div>

        <div class="column3">
          <input type="submit" class="large-btn large-fld large-magnify" name="step1" value="Lest do that!">
        </div>
      </div>
    </form>
    <p id="home-info">Separate you wants and offers with a comma: <span>Baby sitter, washer fixed, cheap car</span>
    </p>
  </div>
    
</body>

</html>