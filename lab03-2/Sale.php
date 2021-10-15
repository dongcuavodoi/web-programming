<html lang="en">
<head>
    <title> Our shop</title>
</head>
<body>
    <font size="4" color="blue">
    <?php
        $today = date('l,F d,Y');
        print("Welcome on $today to our huge blowout sale!</font>");
        $month = date('m');
        $year = date('Y');
            $dayofyear = date('z');
            if ($month <= 12 && $year == 2021){
                $daysleft = (365 - $dayofyear + 13);
                print "<br> There are $daysleft sales days left";
            } else if ($month == 01 && $year == 2022){
                if($dayofyear <= 13) {
                    $daysleft = (13 - $dayofyear);
                    print "<br> There are $daysleft sales days left";
                } else {
                    print "<br> Sorry, our sale is over.";
                }
            }else {
                print "<br> Sorry, our sale is over.";
            }
        print "<br> Our Sales Ends January 13, 2022"
    ?>
    </font>
</body>
</html>