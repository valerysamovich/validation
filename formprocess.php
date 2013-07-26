
<?php
// error _reporting(E_ALL & ~E_NOTICE);
// print_r($_POST);

// if-else conditional statement for name
if (!empty($_POST['name'])){
	$name = $_POST['name'];
}else{
	$name = NULL;
	echo "<p>Please enter your name!</p>";
}

// if-else conditionla statement for gender
if(isset($_POST['gender'])){
	$gender = $_POST['gender'];
}else{
	$gender = NULL;
	echo "<p>Please choose your gender!</p>";
}

// if-else conditionla statement for interest
if(isset($_POST['interest'])){
	$interest = $_POST['interest'];
}else{
	$interest = NULL;
	echo "<p>Please choose at least one interest!</p>";
}

// if-else conditionsl statement of age
if(isset($_POST['age'])){
	if($_POST['age'] == NULL){
		echo "<p>Please choose your age!</p>";
	}else{
		$age = $_POST['age'];
	}
}

// if-else conditionsl statement of comments
if(!empty($_POST['comments'])){
	$comments = $_POST['comments'];	
}else{
	$comments = NULL;
	echo "<p>Please leave your comments!</p>";
}

if($name && $gender && $interest && $age && $comments){
echo "<p>Thank you, " . $name . " for filled form.";
}
?>