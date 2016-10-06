<?php
//Definimos la Clase ia.
Class ia{
var $columna;
var $fila;

//Corregido el error, sólo era la estructura del código, pero por lo demás funcionaba perfectamente, aun así, no volvera a suceder.
	
	//Metodos, Get (pedir)
	public function getColumna()
    {
		
        return $this->columna=rand(1,3);//El rand genera un numero entero aleatorio
		
    }
	public function getFila()
    {
		
        return $this->fila=rand(1,4) ;
    }
}


?>
	