<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$array = ["Test1", 25, "TEST2"];
echo "<h1> Hello Kara you sexy thing</h1>";
echo "<h1> The first array element is $array[0]";
echo "<h1> The second array element is $array[1]";
echo "<h1> The third array element is $array[2]";
echo "<br>";
$counter = 5;

function doSomething($counter){
    if ($counter > 0){
        echo "Counter = $counter <br>";
        $counter--;
        doSomething($counter);
    }
}

doSomething($counter);
?>
</body>
</html>