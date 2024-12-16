<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Debtor: Home</title>
    <link rel="stylesheet" href="lendingStyle.css">
    <!-- To access information/contents from the classes -->
    <?php include("process.php"); ?>
</head>
<body>
    <!-- for logo design -->
    <div class="logoBox">
        <img src="img resources/logoWhite.png" class="logoImg">
        <h2>LENDING SYSTEM</h2>
    </div>
    <!-- debtor total loan balance -->
    <div class="balanceBox">
        <h2>ACCOUNT LOAN: <?php echo "<span class='accountLoan'>"."₱".$info->getLoanAmount()."</span>";?></h2>
    </div>
    <!-- Display lender remaining balance -->
    <div class="interestBox">
        <h4>AVAILABLE LENDING AMOUNT: <span class="accountBalance"><?php echo "₱".$info->getBalance();?></span></h4>
    </div>
    <!-- debtor process -->
    <div class="debtorProcessBox">
        <div class="loanNow">
             <!-- Forms to make loan -->
            <form action="" method="post" onsubmit="confirmLoan(event)">
                <h4>Loan now! with <?php echo "<span class='interest'>".$info->getInterest()."% interest"."</span>";?></h4>
                <input type="number" name="newLoan" min="1" placeholder="Enter an amount" required>
                <input type="submit" value="confirm">
            </form>
        </div>
        <div class="payNow">
            <!-- To pay -->
            <form action="" method="post" onsubmit="confirmPayment(event)">
                <h4>Payment</h4>
                <input type="number" name="payLoan" min="1" placeholder="Enter an amount" step="0.01" required>
                <input type="submit" value="confirm">
            </form>
        </div>
    </div>

    <div class="exitBox">
        <form action="index.php" method="post">
            <input type="submit" value="Exit" class="exitButton">
        </form>
    </div>
    

    <!-- confirmation for loan application prompt -->
    <script>
        function confirmLoan(event) {
            // prompt to confirm actioion
            var confirmed = confirm("Are you sure you want to apply for this loan? Please confirm to proceed.");
            // if user click cancel it will not continue the action / submission
            if (!confirmed) {
                event.preventDefault();
            }
        }
    </script>
    <!-- confirmation for payment prompt -->
    <script>
        function confirmPayment(event) {
            // prompt to confirm actioion
            var confirmed = confirm("Are you sure you want to complete this payment? Please confirm to proceed.");
            // if user click cancel it will not continue the action / submission
            if (!confirmed) {
                event.preventDefault();
            }
        }
    </script>

    <!-- make loan proccessing code-->
    <?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if(isset($_POST["newLoan"])){
            if($_POST["newLoan"] <= $info->getBalance()){
                
                $info->makeLoan($_POST["newLoan"]);
                $info->deducBalance($_POST["newLoan"]);

                // success msg and reloads the website to update values
                echo '<script>
                        alert("Loan application were successful!");
                        window.location.href = "' . $_SERVER['PHP_SELF'] . '";
                    </script>';
            exit;
            }else{
                echo '<script>
                        alert("Loan amount exceeds available balance! Please adjust the amount and try again.")
                      </script>';
            }
        }
    }
    // make payment processing code
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if(isset($_POST["payLoan"])){
            if($_POST["payLoan"] <= $info->getLoanAmount()){
                
                $info->payLoan($_POST["payLoan"]);
                $info->debtorPay($_POST["payLoan"]);

                // success msg and reloads the website to update values
                echo '<script>
                        alert("Loan payment were successful!");
                        window.location.href = "' . $_SERVER['PHP_SELF'] . '";
                    </script>';
            exit;
            }else{
                echo '<script>
                        alert("Loan amount exceeds remaining loan balance! Please adjust the amount and try again.")
                      </script>';
            }
            
        }
    }
    ?>
</body>
</html>