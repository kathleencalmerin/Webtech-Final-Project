<?php
session_start();
if(!isset($_SESSION["sess_user"])){
    header("Location: login.php");
}
else
{
    ?>
<!DOCTYPE HTML>
<html>
<head>
  <title>webtech</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
</head>
<body>
    <?=$_SESSION['sess_user'];?>
    <div class="w3-container w3-red">
        <div align="right" style="font-style: oblique; font-size: 20px;">
    <a href="logout.php">Logout</a>
        </div>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php">Web Systems and Technologies</a></h1>
          <h2>Learn about how Web programming</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.php">Home</a></li>
          <li><a href="topics.php">Topics</a></li>
          <li><a href="practice.php">Practice Quiz</a></li>
          <li> <a href="contact.php">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div id = "content">
        <h3> Welcome to Web Systems and Technologies</h3>
        </div>
    </div>
    <div id="footer">
      <p>Web system and technology | 2018</p>
    </div>
  </div>
</body>
</html>
<?php   
    }
?>