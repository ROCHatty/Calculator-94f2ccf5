<?php
echo "Welke operatie wil je uitvoeren? (+, -)\r\n";
$a = readline();
echo "Eerste getal?\r\n";
$b = readline();
echo "Tweede getal?\r\n";
$c = readline();
if ($a == "+") {
	$d = $b+$c;
	echo "Uw resultaat is: ".$d;
} elseif ($a == "-") {
	$d = $b-$c;
	echo "Uw resultaat is: ".$d;
} else {
	echo "Fout!";
}
?>