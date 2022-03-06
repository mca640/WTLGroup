<?php

$a[] = "Shruthi";
$a[] = "Stephen";
$a[] = "Celina";
$a[] = "Leya";
$a[] = "Eva";
$a[] = "Kiran";
$a[] = "Gunda";
$a[] = "Neena";
$a[] = "Inga";
$a[] = "John";
$q = $_REQUEST["q"];
$hint = "";
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

echo $hint === "" ? "no suggestion" : $hint;
?>