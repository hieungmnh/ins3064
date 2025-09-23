<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
</head>
<body>
    <?php
            $x = 10; 
            $y = 11; 
            echo "x == y: " . ($x == $y) . "<br/>"; 
            echo "x != y: " . ($x != $y) . "<br/>"; 
            echo "x < y: " . ($x < $y) . "<br/>"; 
            echo "x > y " . ($x > $y) . "<br/>"; 
            echo "x <= y: " . ($x <= $y) . "<br/>"; 
            echo "x >= y: " . ($x >= $y) . "<br/>"; 

            //https:localhost:8000/?x=5&y=3
            $x = $_GET["x"]; 
            $y = $_GET["y"]; 

            echo "x + y = " . ($x + $y) . "<br>"; 
            echo "x == y: " . ($x == $y) . "<br>";

    ?>
</body>
</html>