
<html>

<head>
    <title>Tuna Cafe</title>
</head>

<body>
    <font size="4" color="blue">Tuna Cafe Results Received</font>
    <?php
    $menu = array("Turna Casserole", "Tuna Sandwich", "Tuna Pie","Grilled Tuna","Tuna Surprise");
    $prefer = $_GET["prefer"];
    if(count($prefer) == 0){
        print("Oh no! Please pick some favorite <br>");
    }else{
        print("<br>Your selection are <br> <ul>");
        foreach ($prefer as $item){
            print("<li> $menu[$item] </li>");
        }
        print("</ul>");
    }
    ?>
</body>

</html>