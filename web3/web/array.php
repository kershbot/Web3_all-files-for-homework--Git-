<?php 

$array = array('dog-1'=> "Finn", 
'dog-2' => 'Walter', 
'dog-3' => 'Gus', 
'dog-4' => 'Snoopy', 
'cat-14' => 'Jingles', 

); 


?>

<html>
<head>
</head>
<body>
<?php print_r ($array);
echo $array ['dog-1'];

foreach($array as $key=>$value){
	echo $key.": ".$value. "<br>"; 
}
?>
</body>
</html>