<?php

    $name = "";
    $email = "";
    $phone = "";
    $addrss = "";
    $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^"; 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    extract($_POST);
    $valid = true;

    if (empty($name)) {
        echo "<script>alert('Please enter name.')</script>";
        $valid = false;
    }

    if (empty($email)) {
        echo "<script>alert('Please enter email.')</script>";
        $valid = false;
    } 

     elseif(!preg_match ($pattern, $email) ){  
        echo "<script>alert('Please enter a valid email.')</script>";
        $valid = false;
    } 

    if (empty($phone)) {
        echo "<script>alert('Please enter phone.')</script>";
        $valid = false;
      }
      else{       
         if (strlen ($phone) != 10) {  
         echo "<script>alert('Mobile no must contain 10 digits.')</script>"; 
      } 
    } 
    
    if (empty($gender)) {
        echo "<script>alert('Gender is required')</script>";
        $valid = false;
    } 

    if (empty($addrss)) {
        echo "<script>alert('Please provide your Communication Address')</script>";
        $valid = false;
    } 

    if($valid){
        $name = "";
        $email = "";
        $phone = "";
        $addrss = "";
        echo "<script>alert('Submission successful!')</script>";   
    }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body> 
    <div class="container border rounded p-3 mt-5" style="width:50%">
    <form method="post" action="#">
    <h1 class="text-center">Registration Form</h1>
<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="email" value="<?php echo $name; ?>">
    </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>" aria-describedby="emailHelp">
    </div>
<div class="mb-3">
    <label for="phone" class="form-label">Phone Number</label>
    <input type="number" class="form-control" id="phone"  name="phone" value="<?php echo $phone; ?>">
    </div>
<div class="mb-3">
    <label for="gender" class="form-label">Gender</label>
    <input type="radio" name="gender" value="male"> Male  
    <input type="radio" name="gender" value="female"> Female  
    <input type="radio" name="gender" value="other"> Other

</div>
  <div class="mb-3">
  <label for="address" class="form-label">Address</label>
  <textarea class="form-control" id="address" rows="3"  name="addrss" value="<?php echo $addrss;?>"></textarea>
</div>
<div class="d-grid gap-2">
  <button type="submit" class="btn btn-outline-primary">Submit</button>
</div>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>