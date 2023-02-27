<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Electricity Bill</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>


  <div class="card m-auto p-3 mt-5" style="width: 18rem;">
  <h3>Registeration Form</h3>
<form method="post" action="#">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name">
    </div>
  <div class="mb-3">
    <label for="cnum" class="form-label">Consumer Number</label>
    <input type="text" class="form-control" id="cnum" name="cnum">
  </div>
  <div class="mb-3">
    <label for="unit" class="form-label">Unit Consumed</label>
    <input type="number" class="form-control" id="unit" name="units">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
extract($_POST);    // This function uses array keys as variable names and values as variable values. For each element it will create a variable in the current symbol table. This function returns the number of variables extracted on success.

function calculate_bill($units) {
    $unit_first = 4;
    $unit_sec = 5;
    $unit_third = 6;

    if($units <= 100) {
        $bill = $units * $unit_first;
    }
    else if($units > 100 && $units <= 200) {
        $temp = 100 * $unit_first;
        $rem_unit = $units - 100;
        $bill = $temp + ($rem_unit * $unit_sec);
    }
    else {
        $temp = (100 * 4) + (100 * $unit_sec) + (100 * $unit_third);
        $rem_unit = $units - 200;
        $bill = $temp + $rem_unit ;
    }
    return number_format((float)$bill, 2, '.', '');
} 

  echo "<div class='text-center border'>";
  echo "-------------------------------------------------------------------------";
  echo "<h3>Kerala State Electricity Board (KSEB)</h3>";
  echo "<br>";
  echo "Consumer name : ".$name."<br>";
  echo "Consumer number : ".$cnum."<br>";
  echo "Units Consumed : ".$units."<br>";
  $result = calculate_bill($units);
  echo "<h4>Total : ₹ ".$result."</h4><br>";
  echo "-------------------------------------------------------------------------";
  echo "</div>";


}

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
