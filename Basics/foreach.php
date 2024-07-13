<?php
$arr = array("Zack", "Anthony", "Ram", "Salim", "Raghav");
echo "Looping using for each <br/>";
foreach ($arr as $key){
    echo $key."<br/>";
}
$round = count($arr);
echo "<br/>round value is  . $round.<br/>"

 
echo "<br/>round value is  . $round.<br/>"; // <-- Missing semicolon here

for ($n = 0; $n < $round; $n++) {
    echo $arr[$n] , "\n"
}
?>