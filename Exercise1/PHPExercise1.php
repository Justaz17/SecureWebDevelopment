<html>
<head>
	<title>Revision Q1</title>
</head>
<body>
<?php

function stringManipulation($s1,$s2) {

	echo "<h3> Q1 Part A </h3>";
	for($i=0;$i<strlen($s1);$i++){
		echo substr($s1,$i,1) . "<br>";
	}
	
	echo "<h3> Q1 Part B </h3>";
	echo str_replace(" ","<br>",$s2);

	echo "<h3> Q1 Part C </h3>";
	//Sort the sentences by length – printing in the browser
	if(strlen($s1) > strlen($s2)) {
		echo $s1, "<br>", $s2;
	}
		else{
		echo $s2, "<br>", $s1;
		}
	
		echo "<h3> Q1 Part D </h3>";

			$position = strpos($s2,"a",0);
			echo $position . " ";
			while($position < strlen($s2) )
		{
			
		$position = strpos($s2,"a",$position+1);
		if(!$position)
		{
			$position = strlen($s2);
		}
		else{
			echo $position . " ";
		}

			
	}
}

if(isset($_GET["sent1"]) && isset($_GET["sent2"])){
	$s1 = $_GET["sent1"];
	$s2 = $_GET["sent2"];
	stringManipulation($s1,$s2);
} else {
?>
<form id="form1" name="form1" method="get" action="">
	<p><label for="sent1">Enter First Sentence</label>
    <input type="sent1" name="sent1" id="sent1" /></p>
	<p><label for="sent2">Enter Second Sentence</label>
    <input type="sent2" name="sent2" id="sent2" /></p>
	<p><input type="submit" name="button" id="button" value="Submit" /></p>
</form>
<?php } ?>

</body>

</html>