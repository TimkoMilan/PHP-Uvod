<!DOCTYPE html>
<html>
<head></head>
<body>

	<?php	
	if(empty($_GET["valueA"]) || empty($_GET["valueB"]) ){

		echo "<div>Cannot calc null input </div>";
	}else{
	
		$a =$_GET["valueA"];
		$b =$_GET["valueB"];
		$e = $_GET["box"];
		$r = $_GET["age"];
		$v = $a+$b;
		$d = $a/$b;
		$n = $a*$b;
		$m = $a-$b;
		//if(($_GET["box"]) == off){
		//	echo "<div>Status off</div>";
 		//}else{
		

		//echo "<h3>Sucet: ".$a." + ".$b." = ".$v."</h3>";
		//echo "<h3>Delenie: ".$a."/".$b."=".$d."</h3>";
		//echo "<h3>Nasobenie: ".$a."*".$b."=".$n."</h3>";
		//echo "<h3>Minus: ".$a."-".$b."=".$m."</h3>";
		//echo "Chcek box status " . $_GET["box"] . "!";
		//}}


		if(($_GET["age"]) == "basic"){
			echo "<h3>Sucet: ".$a." + ".$b." = ".$v."</h3>";
			echo "<h3>Delenie: ".$a."/".$b."=".$d."</h3>";		
		}else{
			echo "<h3>Sucet: ".$a." + ".$b." = ".$v."</h3>";
			echo "<h3>Delenie: ".$a."/".$b."=".$d."</h3>";
			echo "<h3>Nasobenie: ".$a."*".$b."=".$n."</h3>";
			echo "<h3>Minus: ".$a."-".$b."=".$m."</h3>";
			echo "Chcek box status " . $_GET["box"] . "!";		
}
		
	//echo "<div>"value ".$c</div>";
?>
</body>
</html>