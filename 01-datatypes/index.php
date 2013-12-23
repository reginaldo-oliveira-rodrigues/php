<?php
/* tipos de dados em php */

/* tipo string e tipo nulo */
$x = "Hello world!";
var_dump($x);
echo "<br>";
$x = 'Hello world!';
var_dump($x);
echo "<br>";
$x=null;
var_dump($x);

echo "<br/>";
echo "<br/>";

/* numeros do tipo inteiro */
$x = 5985;
var_dump($x);
echo "<br>"; 
$x = -345; // negative number 
var_dump($x);
echo "<br>"; 
$x = 0x8C; // hexadecimal number
var_dump($x);
echo "<br>";
$x = 047; // octal number
var_dump($x);

echo "<br/>";
echo "<br/>";

/* numeros do tipo float (com ponto flutuante) */
$x = 10.365;
var_dump($x);
echo "<br>"; 
$x = 2.4e3;
var_dump($x);
echo "<br>"; 
$x = 8E-5;
var_dump($x);

echo "<br/>";
echo "<br/>";

/* tipos booleanos */
$x=true;
var_dump($x);
echo "<br/>";
$y=false;
var_dump($y);

echo "<br/>";
echo "<br/>";

/* tipo conjunto (array) */
$things=array("Volvo", 45, true, 2e-8, 98.3, 'Tantra');
var_dump($things);

echo "<br/>";
echo "<br/>";


/* implementacao de classe */
class Car{
	var $color;
	
	function Car($color){
		$this->color = $color;
	}
	
	function getColor(){
		return $this->color;
	}
	
	function correr(){
		echo "Correndo ...";
	}
}

/* uso de um objeto da classe acima */
$carro = new Car("Vermelho Fogo");
echo "Carro ".$carro->getColor()."<br/>";
$carro->correr();
echo "<br/>";
var_dump($carro);

?>