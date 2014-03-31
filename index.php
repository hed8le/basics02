<!DOCTYPE html>
<html>

<head>
	<title>...</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<!-- PHP Coding -->
	<?php  
		/******* 1.Variables ***************************/
		$a = 5;
		echo gettype($a);
		$b = "Audi A";
		$c = $b . $a;
		echo $c;
		echo "<br>";
		$d = strtolower($c);
		echo $d;
		echo "<br>";
		$e = 1;
		$f = $a + $e;
		echo $f;
		echo "<br>";
		$g;
		echo $g;

		/******* 2.Arrays ***************************/
		$h = array(5, 8, "Hello", 1.3);
		foreach ($h as $tmp) { echo "<br>$tmp"; }
		echo "<br>";
		$h[] = "World";
		foreach ($h as $tmp) { echo "<br>$tmp"; }
		echo "<br>";
		//Kurzform für Array-Erstellung
		$i = [1, 2, 3, "JavaScript"];
		print_r($i);
		$j = gettype($i);
		echo $j;
		echo "<br>";

		/******* 3.Verzweigungen ***************************/
		if(is_integer($a)) {
			echo gettype($a);
			echo '<br>$a ist ein integer.';
		} else {
			echo '<br>$a ist kein integer';
		}
		switch($e){
			case 1: echo "<br>Zahl: 1";break;
			case 3: echo "<br>Zahl: 3";break;
			default: echo "<br>Zahl: undefiniert";break;
		}

		/******* 4.Loops ***************************/
		echo "<ul>";
		for($i=0; $i<5; $i++){
			echo "<li>Index: $i</li>";
			while($i==2){
				echo "<ul>";
				echo "<li>Index 2.1 in der while-Schleife</li>";
				echo "</ul>";
				$i++;
			}
		}
		echo "</ul>";

		/******* 5.Functions ***************************/
		function prozentFormatierung($a=100){
			echo "<br>" . $a . "% ";
			return true;
		}
		$k = prozentFormatierung();
		echo gettype($k);
		echo "<br><br>Datum: " . date("d.m.Y");


		/******* 6.Objects ***************************/
		class User {
			public $id="Kurzform";
			public $name;
			public function idAusgabe() {
				echo "User-ID: " . $this->id;
			}
		}
		$l = new User();
		echo "<br>";
		//Eigenschaft wird initialisiert
		$l->id="asdf";
		$l->idAusgabe();
		echo "<br>";
		//Kurzform: Objekt anlegen und Methode aufrufen
		(new User)->idAusgabe();

		/******* 7.Exceptions ***************************/
		function teilen($m){
			if ($m==0) {
				throw new Exception("Teilen durch 0!");
			} else {
				echo "<br>Ergebnis: " . 1/$m;
			}
		}
		try {
			teilen(1);
			teilen(0);
			teilen(2);

		} catch(Exception $e) {
			echo "<br>Exception gefangen: " . $e->getMessage();
		}
	?>

</body>

</html>