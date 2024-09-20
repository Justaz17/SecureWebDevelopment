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


//generating random numbers array to full an array of size 100.
    $randNumbers = [];
        $size = 100;
        $total = 0;
$freqRange10to19 =0;
    for($i =0; $i< 100; $i++)
        $randNumbers[] = rand(0,49);
$smallestNumber = $randNumbers[0];
$largestNumber =$randNumbers[0];

    for($i = 0; $i< count($randNumbers); $i++)
        {

            $currentNumber =$randNumbers[$i];

            if($currentNumber < $smallestNumber)
            {
                $smallestNumber = $currentNumber;

            }
            if ($currentNumber > $largestNumber)
            {

                $largestNumber = $currentNumber;
            }

            if($currentNumber >= 10 && $currentNumber <= 19)
            {
                $freqRange10to19 ++;
            }
            $total += $currentNumber;
        }

    $average = $total/ $size;
    echo "The Smallest Number is :".$smallestNumber."<br>";
    echo "The Largest number is : ".$largestNumber."<br>";
    echo "The total sum of the numbers is: ". $total."<br>";
    echo "The average is : ". $average."<br>";
    echo "The freq is: ". $freqRange10to19."<br>";

    for($j =1; $j < count($randNumbers); $j++)
    {
        echo $randNumbers[$j]. " \n\n";
        if($j%12 == 0)
        {
            echo "<br>";
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