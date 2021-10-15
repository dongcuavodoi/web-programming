
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Convert</title>
</head>
<body style="display: table;margin: auto;">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
        <h3>Input number which you want to convert !!!</h3>
        <br>
        <input type="number" name="number">
        <br>
        <input type="radio" name="radian">
        <label>Radian</label>
        <br>
        <input type="radio" name="degree">
        <label>Degree</label>
        <br>
        <input type="submit"/>
        <br>
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $number = $_POST['number'];
                if(isset($_POST['radian'])){
                    $degree = $number * 180 / pi();
                    print ("Degree is $degree");
                }
                if(isset($_POST['degree'])){
                  $radian = $number * pi() / 180;
                  print ("Radian is $radian");
                }
            }
        ?>

    </from>
</body>
</html>