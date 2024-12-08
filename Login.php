<?php
  //Store any errors
  $errorMessage = "";

  //if the form passes validation after being submitted, this will be true
  if($_SERVER["REQUEST_METHOD"]  == "POST"){
    //include the db connection page
    require_once 'dbConnect.php';

    $username = $_POST['txt_username'];
    $password = $_POST['txt_password'];

    // the SQL statement to see if the user is logged in
    $sql ="SELECT * FROM tbl_user WHERE user_name='$username' AND password = '$password';";

    // run the SQl statement 
    $result = mysqli_query($dbconn, $sql);

    //put the database query result into an array
    $check = mysqli_fetch_array($result);

    session_start();
    $_SESSION['id']=session_id();

    // if there is something in the $check cariable, then the user successfully logged in
    if(isset($check)){
      //$errorMessage = "Success";
      //Open up a PHP session

      $_SESSION['username'] = $check['user_name'];
      $_SESSION['isLoggiedIn'] = true;

      //redirect to the employee page
      header('Location: EmployeePage.php');
    }
    else{
      $_SESSION['isLoggiedIn'] = false;
      $_SESSION['username'] = '';
      $errorMessage = "Login failed. Please try again.";
   }
  }
?>

<!DOCTYPE html>
<html lang="EN">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Login.css">
<script src="Login.js"></script>
<link rel="icon" type="image/x-icon" href="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f990495a-dc4a-477c-b015-93d6b197cee8/d7n7ni5-fcc1bcc0-95b7-4f8e-b5e0-293911be5c63.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2Y5OTA0OTVhLWRjNGEtNDc3Yy1iMDE1LTkzZDZiMTk3Y2VlOFwvZDduN25pNS1mY2MxYmNjMC05NWI3LTRmOGUtYjVlMC0yOTM5MTFiZTVjNjMucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.1UOD7LRBOATxegj8IHeikF8uuqcDxm7QElvPcLyVdw0">
<title>Login</title>
  </head>
  <body>

  <!-- Show on the Main Menu page aka the 'Index.php'
      <?php include 'index.php' ?>  
      <div class="LoginBox">
      <h1> Mars bakery Admin Login</h1>

      <main>
<h2><?php echo $errorMessage; ?></h2>
<!--Login Form -->
        <form id="frm_login" name="frm_login" method="post" action="Login.php" onsubmit="return validateLoginForm();">
          <label for="txt_username">Username: </label>
          <input type="text" id="txt_username" name="txt_username" required>
          <br>
          <label for="txt_password">Password: </label>
           <input type="text" id="txt_password" name="txt_password" required>

           <input type="submit" value="Login">
        </form>
      </main>
    </div>
  </body>
</html>