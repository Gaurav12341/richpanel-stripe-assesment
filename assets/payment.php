<?php

session_start();
include('../db_connect.php');
require('stripe-php-master/init.php');

$publishableKey="pk_test_51NcCVoSBMSlUoEDVBV4dsEYmMUQFpJ3cpJT6y7IkdN4p0n9szfu8yuos7GACJz5uVfCGr50UAkEzGYM6f5JBwbQk00UYi2rykZ";
$secretKey= "sk_test_51NcCVoSBMSlUoEDViPZfiD1T39skeyNfAzOXZTqgB6fOwQYI2rVSiP6qSDjQ4Ia6AbeN7LlolvWW7Kbwc5BS71bm00ScWHUOzh";

\Stripe\Stripe::setApiKey($secretKey);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Richpanel | Payment</title>
    <link rel="stylesheet" href="payment.css">
</head>
<body>
    <div class="mainbox">
        <div class="lhs">
            <h2>Complete Payment</h2>

            <h4>Enter your credit or debit card details below</h4>

            <form action="plandetail.php" method="post" class="card">
                <input type="text" placeholder="Card Number"   id="num" name="card">
                <input type="month" placeholder="MM/YY CVC"  name="CVC" id="cvc">
                <!-- <input type="submit" value="Complete Payment" class="Submit" id="Submit"> -->
                <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                    data-key="<?php echo $publishableKey?>"
                    data-amount="200000"
                    data-name="Richpanel"
                    data-discription=""
                    data-image="richpanel-logo.png"
                    data-currency="inr"
    >
    
    </script>   
                <!-- <button class="submit">Confirm Payment</button> -->
            </form>
        </div>

        <div class="rhs">
            <div class="head">
                <h3>Order Summary</h3>
            </div>
            <div class="summary">
                <div class="pname">
                    <span>Plan Name</span> <span id="pname"> Basic</span>
                </div>
                <hr>
                <div class="bcycle">
                    <span>Billing Cycle</span> <span id="bcycle"> Yearly</span>
                </div>
                <hr>
                <div class="pprice">
                    <span>Plan price</span> <span id="pprice"> ₹2000</span>
                </div>
                <hr>
            </div>
        </div>
    </div>

    <form action="plandetail.php" method="post">


</form>

</body>
</html>