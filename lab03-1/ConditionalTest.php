<html lang="en">
<head>
    <title>Conditional Test</title>
</head>
<body>
    <?php
    $first = $_GET["firstname"]; $middle = $_GET["middlename"];$last = $_GET["lastname"];
    print ("Hi $first ! Your full name is $last $middle $first. <br></br>");
    if ($first == $last) {
        print("$first and $last is equal");
    }
    if ($first < $last) {
        print("$first is less than $last");
    }
    if ($first > $last) {
        print("$first is greater than $last");
    }
    print("<br></br>");

    $grade1 = $_GET["grade1"]; $grade2 = $_GET["grade2"];
    if(($grade1 <= 100 && $grade1 >= 0) && ($grade2 <= 100 && $grade2>= 0)){
    $final = (2 * $grade1 + 3 * $grade2)/5;
    if($final > 89){
        print ("Your final grade is $final. You got an A. Congratulation! ");
        $rate = "A";
    }
    elseif($final > 79){
        print ("Your final grade is $final. You got a B.");
        $rate = "B";
    }
    elseif($final > 69){
        print ("Your final grade is $final. You got a C.");
        $rate = "C";
    }
    elseif($final > 59){
        print ("Your final grade is $final. You got a D.");
        $rate = "D";
    }
    elseif($final >= 0){
        print ("Your final grade is $final. You got a F.");
        $rate = "F";
    }else {
        print("Illegal grade less than 0. Final grade = $final");
        $rate = "Illegal";
    }

    print("<br></br>");
    switch ($rate){
        case "A": print("Excellent!"); break;
        case "B": print("Good!"); break;
        case "C": print("Not bad!"); break;
        case "D": print("Normal!"); break;
        case "F": print("You have to try again!"); break;
        default: print("Illegal grade!");
    }
    }
    else{
        print("Something went wrong!");
    }
    ?>
</body>
</html>