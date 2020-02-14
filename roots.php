<!DOCTYPE HTML>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Hello</h1>
    <?php
	//echo "Hello";
	$str = file_get_contents('C:/Users/Saurabh/Desktop/Projects/NLP/marathi corpus/finalize/relations1.json');
	$json = json_decode($str, true);
  ?>


    <?php
	foreach ($json as $key => $value) {
		echo $key." - ".$value["0"] . ", " . $value["1"] . "<br>";
   		//echo $key." - ".substr($key,0,$value["0"]) . ", " . $value["1"] . "<br>";
  	}
	?>

  </body>
</html>
