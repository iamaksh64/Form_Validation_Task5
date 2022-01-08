<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Validation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <?php
    include_once("validation.php");
  ?>
  <div class="form">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      Email:<input type="email" name="email" class="form-control" placeholder="Enter Email">
      <span class="err"><?php echo $emailErr;?></span><br>
      Password:<input type="password" name="password" class="form-control" placeholder="Enter Password">
      <span class="err"><?php echo $passwordErr;?></span><br>
      <input type="submit" name="submit" value="Submit" class="btn btn-primary w-100">  
    </form>
    <br><br>
    <?php
      if(isset($_POST['submit'])){
        if($emailErr == "" && $passwordErr == ""){
          echo "<h5 class='alert alert-success' role='alert'>
                    You successfully registered!
                </h5>";

          // echo "Email: " .$email;
          // echo "<br>";
          // echo "Password: ".$password;
        }
        else{
          echo "<br><h5 class='alert alert-danger' role='alert'>
          Fill the form correctly!
          </h5>";
        }
      }
    ?>
  </div>
</body>
</html>