<?php
$mobil = array(
array("Volvo",22,18),
array("BMW",15,13),
array("Saab",5,2),
array("Land Rover",17,15)
);
for ($a = 0; $a < 4; $a++) {
  echo "<p><b>Data mobil $a</b></p>";
  echo "<ul>";
  for ($x = 0; $x < 3; $x++) {
    echo "<li>".$mobil[$a][$x]."</li>";
  }
  echo "</ul>";
}


?>