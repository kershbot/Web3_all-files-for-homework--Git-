<?php   



$week = array(

		'Monday' => array
						(
								'Morning'=>'Breakfast and Walk Finn',
											'breakfast'=>'eggs',
											'Noon'=> 'Gym',
											'Afternoon'=> 'Work on Web Class',
											'Evening' => 'Work on Work',
											'Night' => 'Walk Finn and Sleep'),							


		'Tuesday' => array('Morning'=> 'wake up at 9am go to the gym and Walk Finn',
											'Noon'=> 'Games for a new climate class',
											'Afternoon'=> 'Major Studio Class',
											'Evening' => 'head home ',
											'Night' => 'Homework and walk Finn'),
											

					
		'Wednesday' => array('Morning'=> 'Work, Work early morning meeting! ',
											'Noon'=> 'PetLab meeting to discuss websites',
											'Afternoon'=> 'Still at work ',
											'Evening' => 'USer Experience Class ',
											'Night' => 'Still in class hopeing I get to bed by 2am :( '),
										
										
		'Thursday' => array('Morning'=> '9am work meeting for ART Play',
											'Noon'=> 'Just grabbing grub',
											'Afternoon'=> 'Class Major Studio',
											'Evening' => 'Still in Class ',
											'Night' => 'Now Still in Web 3. Never going to sleep.'),

		'Friday' => array('Morning'=> 'Sleep',
											'Noon'=> 'Sleeping in thank god',
											'Afternoon'=> 'Just gettin up',
											'Evening' => 'At school working',
											'Night' => 'Movie'),


		'Saturday' => array('Morning'=> 'Sleep',
											'Noon'=> 'Sleep',
											'Afternoon'=> 'Gym',
											'Evening' => 'Chill out',
											'Night' => 'Sleep or drinks'),


		'Sunday' => array('Morning'=> 'Sleep',
											'Noon'=> 'Sleep',
											'Afternoon'=> 'gym',
											'Evening' => 'nap',
											'Night' => 'walk Finn')
											
);	
?> 

<html>
<head> 
<title> Schedule </title>

<link rel="stylesheet" href="schedulestyle.css">
<script> document.getElementById('<?php echo $week; ?>');
</script> 

</head>

<body> 
<div class = "life">


<h1> Monday </h1>

<?php 
	foreach($week['Monday'] as $key => $value){
	echo $key.": ".$value." <br>";
}?>

</div>

<div class = "life2">
<h1>Tuesday</h1>
<?php foreach ($week['Tuesday'] as $key => $value){
	echo $key.": ".$value." <br>";
}?>

</div>

<div class = "wednesday">
<h1>Wednesday</h1>
<?php foreach ($week['Wednesday'] as $key => $value){
	echo $key.": ".$value." <br>";
}?>

</div>

<div class = "thursday">
<h1>Thursday</h1>
<?php foreach ($week['Thursday'] as $key => $value){
	echo $key.": ".$value." <br>";
}?>

</div>

<div class = "friday">
<h1>Friday</h1>
<?php foreach ($week['Friday']as $key => $value){
	echo $key.": ".$value." <br>";
}?>

</div>

<div class = "life2">
<h1>Saturday</h1>
<?php foreach ($week['Saturday'] as $key => $value){
	echo $key.": ".$value." <br>";
}?>

</div>

<div class = "sunday">
<h1>Sunday</h1>
<?php foreach ($week['Sunday'] as $key => $value){
	echo $key.": ".$value." <br>";
}?>

</div>

</body>
</html>
