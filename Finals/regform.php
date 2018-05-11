<!doctype html>
<html>
<head>
<title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
</head>
<body>
    <div class="SignUp">
<h1>SignUp</h1>
<form action="regform.php" method="post">
<label>FirstName:</label>
    <input type="text" name="fname"><br/><br/>
<label>LastName:</label>
    <input type="text" name="lname"><br/><br/>
<label>Username :</label>
    <input type="text" name="user"><br/><br/>
<label>Password:</label>
    <input type="password" name="pass"><br/><br/>
<input type="submit" value="Register" name="submit"><br/><br/>
<!-- Login Link -->
<a href="login.php">Login</a>
</form>
    </div>
<?php
if(isset($_POST["submit"])){
 if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['user']) && !empty($_POST['pass'])){

 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $user = $_POST['user'];
 $pass = $_POST['pass'];
 $conn = new mysqli('localhost', 'root', '') or die (mysqli_error()); // DB Connection
 $db = mysqli_select_db($conn, 'webtech') or die("DB Error"); // Select DB from database
 //Selecting Database
 $query = mysqli_query($conn, "SELECT * FROM reg WHERE user='".$user."'");
 $numrows = mysqli_num_rows($query);
 if($numrows == 0)
 {
 //Insert to Mysqli Query
 $sql = "INSERT INTO reg(fname,lname,user,pass) VALUES('$fname', '$lname', '$user','$pass')";
 $result = mysqli_query($conn, $sql);
 //Result Message
 if($result){
 echo "Your Account Created Successfully";
 }
 else
 {
 echo "Failure!";
 }
 }
 else
 {
 echo "That Username already exists! Please try again.";
 }
 }
 else
 {
 ?>
 <!--Javascript Alert -->
 <script>alert('Required all felds');</script>
 <?php
 }
}
?>
</body>
</html>