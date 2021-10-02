<?php
include("connection.php");
error_reporting(0);
?>
<html lang="en">
  <head>
    <title>Login Form
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="main.css">
	<script type="text/javascript">
            function showMessage() {
                alert("LOGIN SUCCESSFUL!");
            }
        </script>
  </head>
  <body>
    <main>

      <article id="form-container">
           <h1>Travelville Login Form</h1>
           <form bgcolor="teal">
               <p><a href="http://m.facebook.com" title="Login with facebook" class="social-btn fb-btn"><span class="divider divider-fb"></span><i class="fa fa-facebook"></i>Login with Facebook</a></p>
               <p><a href="https://accounts.google.com/AccountChooser?service=lso" title="Login with google" class="social-btn gp-btn"><span class="divider divider-gp"></span><i class="fa fa-google-plus"></i>Login with Google</a></p>

            <div class="or-divider">OR</div>

            <input type="email" name="email" placeholder="email" name="email"><br>
            <input type="password" name="pass" placeholder="password" name="pwd"><br>
            <input type="submit" onClick="showMessage()" value="Sign in">

            <div id="recover-new-account">
                <a href="#" > Forget Password</a>
                <span>|</span>
                <a href="#" >Create an account</a>

            </div>
           </form>

        </article>

    </main>


    <footer>
        &copy;| Travelville
    </footer>
  </body>
</html>
<?php
$em=$_GET['email'];
$ps=$_GET['pass'];


$query="INSERT INTO LOGIN VALUES('$em','$ps')";
$data=mysqli_query($conn,$query);
if($data)
{
//echo '<script>alert("LOGIN SUCCESSFULL!")</script>';
}
else
{
echo "FAILED";
}
?>