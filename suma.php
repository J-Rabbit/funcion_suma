 <html> 
<head> 
<title>Suma</title> 
</head> 
<body> 
<form action="" method="post"> 
<label>Digito 1</label> 
<br> 
<input type="text" name="a" /> 
<br> 
<label>Digito 2</label> 
<br> 
<input type="text" name="b" /> 
<br> 
<input type="submit" name="sumar" value="Sumar" /> 
</form> 
<br>
 <?php 
 if ($_POST) {
 	$a= $_POST ['a'];
  	$b= $_POST ['b'];
 	echo "La suma de los digitos es " .suma($a, $b); 	
 }
 function suma($a, $b)

 {
  	  	$suma = $a + $b;
  	  	return $suma;
 }


 ?>
 </body>
 </html>