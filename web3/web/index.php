<?php 
$string = "hello world";
// can get confusing because can put a lot in there// 
$char = '$\ /;' ; 
$math = 8*20; 
$concat = "this is one string: ".$__." ".$math;
//we are telling it we want a number// 

//arrays 
$colors = array('red','blue','green','orange');
$random = rand(0,3); 

?>
<html>
<head> 
<title> my first php </title>
<script> document.getElementById('<?php echo 'stuff'; ?>');
</script> 

<style> 
	body{
		background-color: <?php echo $colors[$random];?>
	}
</style> 

</head>
<body> 
<p> id ='stuff'> <?php echo 8*20; ?></p>
<p><?php echo $concat; ?></p>
<p><?php print_r ($colors);?>
<!-- //printing out color info on page as text// -->
<br>

<?php foreach($colors as $color){ ?>

<h1>Color: <?php echo $color;?> </h1> 

<?php } ?>
</body>
</html>
