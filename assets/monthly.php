<?php

$doc = new DomDocument();
$thediv = $doc->getElementById('mobile');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Richpanel | Plans</title>
  <link rel="stylesheet" href="monthly.css">
</head>
<body>
<div class="mainbox">
  <div class="heading">
    <h2>Choose the right plan for you</h2>
  </div>

  <div class="row1">
    <div class="row1lhs">
      <div class="row1lhsbuttons">
      <button class="toggle-active" id="month">
        Monthly
      </button>
      <button class="toggle" id="year">Yearly</button>
    </div>
    
    </div>

    <div class="row1rhs">
      <div class="box1" id="mobile">Mobile</div>
      <div class="box1" id="basic">Basic</div>
      <div class="box1" id="standard">Standard</div>
      <div class="box1" id="premium">Premium</div>
    </div>
  </div>

  <div class="row2">
    <div class="row2lhs">
      <p>Monthly price</p>
    </div>
    <div class="row2rhs">
      <div class="box" id="price1">₹100</div>
      <div class="box" id="price2">₹200</div>
      <div class="box" id="price3">₹500</div>
      <div class="box" id="price4">₹700</div>
    </div>
  </div>

  <hr>

  <div class="row2">
    <div class="row2lhs">
      <p>Video Quality</p>
    </div>
    <div class="row2rhs">
      <div class="box" id="quality1">Good</div>
      <div class="box" id="quality2">Good</div>
      <div class="box" id="quality3">Better</div>
      <div class="box" id="quality4">Best</div>
    </div>
  </div>

  <hr>

  <div class="row2">
    <div class="row2lhs">
      <p>Resolution</p>
    </div>
    <div class="row2rhs">
      <div class="box" id="reso1">480p</div>
      <div class="box" id="reso2">480p</div>
      <div class="box" id="reso3">1080p</div>
      <div class="box" id="reso4">4K+HDR</div>
    </div>
  </div>

  <hr>

  <div class="row2">
    <div class="row2lhs">
      <p>Devices you can use to watch</p>
    </div>
    <div class="row2rhs">
      <div class="box" id="dev1">Phone</div>
      <div class="box" id="dev2">Phone</div>
      <div class="box" id="dev3">Phone</div>
      <div class="box" id="dev4">Phone</div>
    </div>
  </div>

  

  <div class="row2">
    <div class="row2lhs">
      
    </div>
    <div class="row2rhs">
      <div class="box" id="dev5">Tablet</div>
      <div class="box" id="dev6">Tablet</div>
      <div class="box" id="dev7">Tablet</div>
      <div class="box" id="dev8">Tablet</div>
    </div>
  </div>

  <div class="row2">
    <div class="row2lhs">
      
    </div>
    <div class="row2rhs">
      <div class="box"></div>
      <div class="box" id="dev9">Computer</div>
      <div class="box" id="dev10">Computer</div>
      <div class="box" id="dev11">Computer</div>
    </div>
  </div>

  <div class="row2">
    <div class="row2lhs">
      
    </div>
    <div class="row2rhs">
      <div class="box"></div>
      <div class="box" id="dev12">TV</div>
      <div class="box" id="dev13">TV</div>
      <div class="box" id="dev14">TV</div>
    </div>
  </div>


  <div class="foot">

    <button class="next"><a href="payment.php"> Next</a></button>
  </div>

</div>


<script src="monthly.js"></script>
</body>

</html>