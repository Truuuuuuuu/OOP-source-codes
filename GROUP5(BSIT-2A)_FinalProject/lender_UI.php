<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lender: Home</title>
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
    <!-- for acccount balance -->
    <div class="balanceBox">
        <h2 ><span class="accountBalance">ACCOUNT BALANCE: </span> <?php echo "₱".$info->getBalance();?></h2>
    </div>
    <!-- for interest rate -->
    <div class="interestBox">
        <h4>INTEREST RATE: <span class="interestValue"><?php echo $info->getInterest();?>%</span></h4>
    </div>
    <!-- processes -->
    <div class="lenderProcessBox">
        <div class="deposit">
            <!-- Forms to deposit an amount in account balance -->
            <h4>Deposit</h4>
            <form action="" method="post" onsubmit="confirmDeposit(event)">
                <!-- Enter Deposit balance -->
                <input type="number" name="depositBalance" placeholder="Deposit an amount" min="0" required><br>
                <input type="submit" value="Confirm">
            </form>
        </div>
        <div class="withdraw">
            <!-- Forms to withdraw an amount in account balance -->
            <h4>Withdraw</h4>
            <form action="" method="post" onsubmit="confirmWithdraw(event)">
                <!-- Enter Withdraw balance -->
                <input type="number" name="withdrawBalance" placeholder="Withdraw an amount" min="0" required><br>
                <input type="submit" value="Confirm">
            </form>
        </div>
        <div class="updateInterest">
             <!-- Forms to edit interest in account balance -->
            <h4>Edit Interest</h4>
            <form action="" method="post" onsubmit="confirmInterest(event)">
                <!-- Enter Interest balance -->
                <input type="number" name="newInterest" placeholder="Interest rate" min="0" required><br>
                <input type="submit" value="Confirm">
            </form>
        </div>
    </div>

    <!-- Exit button -->
    <div class="exitBox">
        <form action="index.php" method="post">
            <input type="submit" value="Exit" class="exitButton">
        </form>
    </div>
    

    <!-- deposit confirmation prompt -->
    <script>
        function confirmDeposit(event) {
            // prompt to confirm actioion
            var confirmed = confirm("Are you sure you want to deposit in this account? Please confirm to proceed.");
            // if user click cancel it will not continue the action / submission
            if (!confirmed) {
                event.preventDefault();
            }
        }
    </script>
    <!-- withdraw confirmation prompt -->
    <script>
        function confirmWithdraw(event) {
            // prompt to confirm actioion
            var confirmed = confirm("Are you sure you want to withdraw in this account? Please confirm to proceed.");
            // if user click cancel it will not continue the action / submission
            if (!confirmed) {
                event.preventDefault();
            }
        }
    </script>
    <!-- interest confirmation prompt -->
    <script>
        function confirmInterest(event) {
            // prompt to confirm actioion
            var confirmed = confirm("Are you sure you want to change the interest rate in this account? Please confirm to proceed.");
            // if user click cancel it will not continue the action / submission
            if (!confirmed) {
                event.preventDefault();
            }
        }
    </script>
    
    <!-- writing: updating the csv file info -->
    <?php
    //set a temporary values for both variables
    $newBalance = 0;
    $newInterest = 0;
    // check if data is submitted
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        //check if the form is submitted which contains the updated values
        if(isset($_POST["depositBalance"])){
            // call the method in the process.php
            $info->depositAccount($_POST["depositBalance"]);

            // success msg and reloads the website to update values
            echo '<script>
                    alert("Deposit Succesfully!");
                    window.location.href = "' . $_SERVER['PHP_SELF'] . '";
                </script>';
            exit;
        //to withdraw an amount on the account
        }else if(isset($_POST["withdrawBalance"])){
            if($_POST["withdrawBalance"] <= $info->getBalance()){
                //call the method in the process.php
                $info->withdrawAccount($_POST["withdrawBalance"]);

                // success msg and reloads the website to update values
                echo '<script>
                        alert("Withdraw Succesfully!");
                        window.location.href = "' . $_SERVER['PHP_SELF'] . '";
                    </script>';
                exit;
            }else{
                echo '<script>
                        alert("Withdraw amount exceeds remaining Account balance! Please adjust the amount and try again.")
                      </script>';
                exit;
            }
        // to update interest
        }else if(isset($_POST["newInterest"])){
            if($_POST["newInterest"] <= 100){
                $info->updateInterest($_POST["newInterest"]);

                // success msg and reloads the website to update values
                echo '<script>
                        alert("Interest rate were set Succesfully!");
                        window.location.href = "' . $_SERVER['PHP_SELF'] . '";
                    </script>';
                exit;
            }else{
                echo '<script>
                        alert("Interest amount exceeds the maximum value! Please adjust the amount and try again.")
                      </script>';
                    exit;
            }
        }
            
        
    }
    ?>
    
</body>
</html>