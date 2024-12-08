<?php
  session_start();

  $welcomeMessage = "";

  if($_SESSION['isLoggiedIn']){
    $welcomeMessage = "Welcome to the Bakers Employee Page";
  }
  else{
    //$welcomeMessage
    $welcomeMessage = "You are not logged in.";
    header('Location: Login.php');
  }
?>

<!DOCTYPE html>
<html lang="EN">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="EmployeePage.css">
<link rel="icon" type="image/x-icon" href="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f990495a-dc4a-477c-b015-93d6b197cee8/d7n7ni5-fcc1bcc0-95b7-4f8e-b5e0-293911be5c63.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2Y5OTA0OTVhLWRjNGEtNDc3Yy1iMDE1LTkzZDZiMTk3Y2VlOFwvZDduN25pNS1mY2MxYmNjMC05NWI3LTRmOGUtYjVlMC0yOTM5MTFiZTVjNjMucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.1UOD7LRBOATxegj8IHeikF8uuqcDxm7QElvPcLyVdw0">
<title>Employee Page</title>
  </head>
  <body>

        <!--Back Button image hyperlink back to home page-->
        <div class="Backbutton">
        <a href="Index.php">
          <img  src="https://pngmaterial.com/dvsxyz02/uploads/curvy-arrow-png.png" width = "60px" height="60px">
        </a>
      </div>
      
      <header>
      <h1>WELCOME BAKERS!</h1>
      <h2><?php echo $welcomeMessage ?></h2>
    </header>
    <div class="Resumes">
        <p> Resumes submitted: 15 </p>
        <br>
        <p> Experience >5 years: 8</p>
        <br>
        <p>Avaliability - </p>
        <p>Holidays: 10 </p>
        <br>
        <p>Nights: 11</p>
    </div>

  </body>
</html>