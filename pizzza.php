<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = array(
        'username' => $_POST['username'],
        'password' => $_POST['password']
    );

    $jsonFile = 'data.json';

    // Read existing data from JSON file
    $existingData = file_get_contents($jsonFile);

    // Decode existing data
    $existingData = json_decode($existingData, true);

    // Append new data to existing data
    $existingData[] = $data;

    // Encode updated data
    $jsonData = json_encode($existingData, JSON_PRETTY_PRINT);

    // Write JSON data back to the file
    file_put_contents($jsonFile, $jsonData);
?>
    <script>
        // JavaScript to display a pop-up message
        alert("Login Unsuccessful");
    </script>
<?php
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


   <title>Login</title>
  </head>
  <body>
    <?php require 'partial1/_navs.php' ?>
    

<div class="container my-4">
<h1 class="text-center">Login to our website</h1>
<form action="/login/pizzza.php" method="post">
   <div class="form-group">
       <label for="username">username</label>
       <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
       
   </div>
   <div class="form-group">
       <label for="password">Password</label>
       <input type="password" class="form-control" id="password" name="password">
   </div>
  
    
   <button type="submit" class="btn btn-primary">Login</button>
</form>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>