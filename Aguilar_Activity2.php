<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aguilar Activity 2</title>
</head>
<body>
    
    <!-- Pasensya na sir magulo an code, nag inline css nalang approach ko para isang file lang !-->
    <!-- operator: == !-->
    <h1 style = "border-radius:6px;font-family:monospace;font-size:45px;text-align:center;background-color:#16423C;color:#E9EFEC;padding:12px;margin:0;">
        Simple operators
    </h1>
    <h3 style = "border:solid;border-radius:6px;font-family:monospace;font-size:25px;text-align:center;background-color:#C4DAD2;color:#16423C;padding:8px;margin:0;">
        <?php 
        $x = 20;
        $y = 50;
        $z = 20;
        echo "x = $x  | y = $y  | z = $z";  
        ?>
    </h3>
    <h3 style = "border-radius:6px;font-family:monospace;font-size:40px;text-align:left;background-color:#C4DAD2;color:#16423C;padding:8px;padding-left:15px;margin:0;">
        #1. x == z
    </h3>
    <div style="border-radius:6px;padding-top:20px;padding-left:15px;text-align:left;color:#16423C;background-color:#E9EFEC;height:65px;width:auto;font-size:30px;font-family: monospace;">
        <?php
            if($x == $z)
                echo "x is equal to z";
            else
                echo "False";
        ?>
    </div>
     <!-- operator: != !-->
    <h3 style = "border-radius:6px;font-family:monospace;font-size:40px;text-align:left;background-color:#C4DAD2;color:#16423C;padding:8px;padding-left:15px;margin:0;">
        #2. x != y
    </h3>
    <div style="border-radius:6px;padding-top:20px;padding-left:15px;text-align:left;color:#16423C;background-color:#E9EFEC;height:65px;width:auto;font-size:30px;font-family: monospace;">
        <?php
            if($x != $y)
                echo "x is not equal to y";
            else
                echo "False";
        ?>
    </div>
     <!-- operator: < !-->
     <h3 style = "border-radius:6px;font-family:monospace;font-size:40px;text-align:left;background-color:#C4DAD2;color:#16423C;padding:8px;padding-left:15px;margin:0;">
        #3. x < y
    </h3>
    <div style="border-radius:6px;padding-top:20px;padding-left:15px;text-align:left;color:#16423C;background-color:#E9EFEC;height:65px;width:auto;font-size:30px;font-family: monospace;">
        <?php
            if($x < $y)
                echo "x is less than to y";
            else
                echo "False";
        ?>
    </div>
     <!-- operator: > !-->
     <h3 style = "border-radius:6px;font-family:monospace;font-size:40px;text-align:left;background-color:#C4DAD2;color:#16423C;padding:8px;padding-left:15px;margin:0;">
        #4. z > y
    </h3>
    <div style="border-radius:6px;padding-top:20px;padding-left:15px;text-align:left;color:#16423C;background-color:#E9EFEC;height:65px;width:auto;font-size:30px;font-family: monospace;">
        <?php
            if($z > $y)
                echo "y is greater than z";
            else
                echo "False";
        ?>
    </div>
     <!-- operator: >= !-->
     <h3 style = "border-radius:6px;font-family:monospace;font-size:40px;text-align:left;background-color:#C4DAD2;color:#16423C;padding:8px;padding-left:15px;margin:0;">
        #5. x >= z
    </h3>
    <div style="border-radius:6px;padding-top:20px;padding-left:15px;text-align:left;color:#16423C;background-color:#E9EFEC;height:65px;width:auto;font-size:30px;font-family: monospace;">
        <?php
            if($x >= $z)
                echo "x is greater than or equal to z";
            else
                echo "False";
        ?>
    </div>
     <!-- operator: <= !-->
     <h3 style = "border-radius:6px;font-family:monospace;font-size:40px;text-align:left;background-color:#C4DAD2;color:#16423C;padding:8px;padding-left:15px;margin:0;">
        #6. y <= z
    </h3>
    <div style="border-radius:6px;padding-top:20px;padding-left:15px;text-align:left;color:#16423C;background-color:#E9EFEC;height:65px;width:auto;font-size:30px;font-family: monospace;">
        <?php
            if($y <= $x)
                echo "x is less than or equal to y";
            else
                echo "False";
        ?>
    </div>
    <div style="background-color:#16423C;height:80px;width:auto;font-size:20px;font-family:monospace;color:#C4DAD2;text-align:center;padding-top:50px">
        JETHRUEL M. AGUILAR | BSIT - 2A | OBJECT ORIENTED PROGRAMMING
    </div>
    
      
</body>
</html>
