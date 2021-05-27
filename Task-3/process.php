<?php
	$a = $_POST['text1'];
	$b = $_POST['text2'];
	$c = $_POST['text3'];
	$d = $_POST['text4'];
	$e = $_POST['text5'];
	echo "First subject mark $a <br/> Second  subject mark $b <br/> Third subject mark $c <br/> Forth subject mark $d <br/> Fivth subject mark $e <br/>";
	$t=$a+$b+$c+$d+$e;
	echo "Total is ".$t."<br/>";
	$per=$t/5;
	echo "<table>";
	echo "<tr>";
	if ($per > 90) {
		echo "<td bgcolor='lightgreen'>Percentage is:$per</td>";
	}
	elseif ($per < 90 && $per > 75) {
		echo "<td bgcolor=''>Percentage is:$per</td>";
	}
	elseif ($per < 75 && $per > 50) {
		echo "<td bgcolor='cyan'>Percentage is:$per</td>";
	}
	else{
		echo "<td bgcolor='black'>Percentage is:$per</td>";
	}
	echo "</tr>";
	echo "</table>";
?>
