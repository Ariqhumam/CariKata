<html>
<head>
<style>
b {color: red;}
</style>
</head>

<body>
<?php
$has1 =$_POST["isi"];
$has2 =$_POST["bagian"];
 $pa = explode(" ",$has2);
 	for($x=0;$x<count($pa);$x++){
	if($pa[$x] == $has1){
	echo $pa[$x] = "<b>$has1</b>"." ";
		}
		else 
			{
				echo $pa[$x]." " ;
			}
	}
?>
</body>
</html>