<html>
<head><title>PHP Quiz - Result</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

<?php 

	

	if (!empty($_POST['question-1-answers']) && !empty($_POST['question-2-answers']) && !empty($_POST['question-3-answers']) && !empty($_POST['question-4-answers']) && !empty($_POST['question-5-answers']) && !empty($_POST['question-5-answers']) && !empty($_POST['question-6-answers']) && !empty($_POST['question-7-answers']) && !empty($_POST['question-8-answers']) && !empty($_POST['question-9-answers']) && !empty($_POST['question-10-answers']) ) {
		$answer1 = $_POST['question-1-answers'];
		$answer2 = $_POST['question-2-answers'];
		$answer3 = $_POST['question-3-answers'];
		$answer4 = $_POST['question-4-answers'];
		$answer5 = $_POST['question-5-answers'];
		$answer6 = $_POST['question-6-answers'];
		$answer7 = $_POST['question-7-answers'];
		$answer8 = $_POST['question-8-answers'];
		$answer9 = $_POST['question-9-answers'];
		$answer10 = $_POST['question-10-answers'];

		$totalCorrect = 0;

		if ($answer1 == "B") { $totalCorrect++; }
		if ($answer2 == "B") { $totalCorrect++; }
		if ($answer3 == "B") { $totalCorrect++; }
		if ($answer4 == "A") { $totalCorrect++; }
		if ($answer5 == "D") { $totalCorrect++; }
		if ($answer6 == "A") { $totalCorrect++; }
		if ($answer7 == "B") { $totalCorrect++; }
		if ($answer8 == "A") { $totalCorrect++; }
		if ($answer9 == "C") { $totalCorrect++; }
		if ($answer10 == "C") { $totalCorrect++; }

		echo "<center><br>" . "<h1> Total Result </h1>";

		echo "Your Score average is: " . $totalCorrect . "0%" . "<br><br>";
		echo  $totalCorrect . " of " . 10 . "<br><br>" . "<b>";
		if ($totalCorrect <5) {
			echo "You have failed the test, Come back and try again later.";
		} elseif ($totalCorrect <7){
			echo "Not Bad!";
		} elseif ($totalCorrect <=9){
			echo "You can be proud of yourself !";
		} elseif ($totalCorrect <=10){
			echo "Pefect !!!" . "</b></center>";
		}
	} else {
		echo "<br><br><h3><center>Make Sure you have chosen all answers!</center></h3>";
	}

?>
</body>
