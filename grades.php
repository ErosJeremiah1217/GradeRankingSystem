<html>
<head>
<link rel="stylesheet" href="style.css">


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</head>
<body class="background">

<img class="logo" src="feutech.png">
<img class="itam" src="itam.png">
<br>
<div class="piyu"> <img class="line" src="peyu.png"> <br> <h4> Grade Ranking Program </h4> </div>
<br>
<div class="box">
	<form name="form" method="get">
		<br>
		<br>
		<h4>Name: <input type = "text" name = "name" placeholder="Name"></h4>
		<h4>Grade: <input type = "text" name ="grade"  placeholder="Grade"/></h4> <br>
		<button class="button" input type="submit" name="submit" >Enter</button>
	</form>
</div>
<br>
<div class="result">
<?php
	if(isset($_GET['submit'])){
	$name = $_GET['name'];
	$grade = $_GET['grade'];
	$rank = "";
	if ($grade >= 93 && $grade <= 100 )
	{
		$rank = "A";
	}
	elseif ($grade >= 90 && $grade <= 92 )
	{
		$rank ="A-";
	}
	elseif ($grade >= 87 && $grade <= 89 )
	{
		$rank ="B+";
	}
	elseif ($grade >= 83 && $grade <= 86 )
	{
		$rank ="B";
	}
	elseif ($grade >= 80 && $grade <= 82 )
	{
		$rank ="B-";
	}
	elseif ($grade >= 77 && $grade <= 79 )
	{
		$rank ="C+";
	}
	elseif ($grade >= 73 && $grade <= 76 )
	{
		$rank ="C";
	}
	elseif ($grade >= 70 && $grade <= 72 )
	{
		$rank ="C-";
	}
	elseif ($grade >= 67 && $grade <= 69 )
	{
		$rank ="D+";
	}
	elseif ($grade >= 63 && $grade <= 66 )
	{
		$rank ="D";
	}
	elseif ($grade >= 60 && $grade <= 62 )
	{
		$rank ="D-";
	}
	elseif ($grade <= 60)
	{
		$rank ="F";
	}
	
if ($rank != " ")
{
	
	echo"<h2>Result </h2> ";
	echo nl2br (" <h3>Name: $name \n  Grade: $grade \n  Rank: $rank </h3>");
}
	}

?>
</div>

</body> 

</html>





 