<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lendingStyle.css">
    <title>Lending System</title>

</head>
<body>
    <!-- logo container -->
    <div class = logoContainer>
        <img src="img resources/logoGreen.png" id = "logoGreen">
    </div>

    <!-- user options -->
    <div class="userContainer">
        <!-- Lender box -->
        <div class="userBox">
            <form action="lender_UI.php" method="post">
                <img src="img resources/lender.png" class="buttonImage">
                <input type="submit" name="lender" value="Lender" class="buttonUser">
            </form>
        </div>
        <!-- Debtor box -->
        <div class="userBox">
            <form action="debtor_UI.php" method="post">
                <img src="img resources/debtor.png" class="buttonImage">
                <input type="submit" name="debtor" value="Debtor" class="buttonUser">
            </form>
        </div>
        
    </div>
    
    

   
    
</body>
</html>