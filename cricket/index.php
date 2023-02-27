<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cricket Players</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <div class="container border mt-5" style="width:18rem">
  <table class="table text-center">
  <thead>
    <tr>
      <th scope="col">NAME</th>
    </tr>
  </thead>
  <tbody>
  <?php
$players = array("M S Dhoni", "Virat Kohli", "Sachin Tendulkar", "Yuvraj Singh", "Rohit sharma");
$arrlength = count($players);
for($x = 0; $x < $arrlength; $x++) { 
  echo "<tr><td>".$players[$x]."</td></tr>";
}
?>
  </tbody>
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

