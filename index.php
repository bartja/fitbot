<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
  <head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>FITBOT™</title>
  <meta name="author" content="name">
  <meta name="description" content="description here">
  <meta name="keywords" content="keywords,here">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
  <script src="js/scripts.js"></script>
  </head>
  <body>
    <div class="container">

      <div class="header">
        <?php include('includes/header.php')?>
      </div>

      <div class="main">

      <div class="mainTitle">
      <h2>BEGIN YOUR JOURNEY<h2>
      </div>

      <div class="content">      
      <form action="results.php" method="GET">
        <div id="genderWrap">
        <input id="male" type="radio" name="male"><label for="gender1">M</label>
        <input id="female" type="radio" name="female"><label for="gender2">F</label>        
        </div>
        <div id="height">
        <input id="height" type="text" name="height" value="HEIGHT (CM)" onfocus="this.value =''">
        </div>
        <div id="weightWrap">
        <div id="curWeight">
        <input id="curWeight" type="text" name="curWeight" value="CURRENT WEIGHT (KG)" onfocus="this.value =''">
        </div>
        <div id="tarWeight">
        <input id="tarWeight" type="text" name="tarWeight" value="TARGET WEIGHT (KG)" onfocus="this.value =''">
        </div>
        <div id="tarDate">
        <input id="datepicker" type="text" name="date" value="TARGET DATE">
        </div>
        <div id="fitness">
        <input id="fitness" type="radio" name="fitness"><label for="type1">FITNESS</label>
        </div>
        <div id="lean">
        <input id="lean" type="radio" name="lean"><label for="type2">LEAN</label>
        </div>
        <div id="mass">
        <input id="mass" type="radio" name="mass"><label for="type3">MASS</label>
        </div>  
        <div id="submit">     
        <input id="submit" type="submit" name="submit" value="CALCULATE">
        </div>        
      </form>
      </div>


      </div>


      </div>
      <div class="footer">
      <?php include('includes/footer.php')?>
      </div>

  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
  </body>
</html>