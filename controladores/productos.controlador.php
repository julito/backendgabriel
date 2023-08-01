<?php

class ControladorProductos{



	static public function ctrMostrarCategorias($item, $valor){

		$tabla = "categoria";

		$respuesta = ModeloProductos::mdlMostrarCategorias($tabla, $item, $valor);

		return $respuesta;

	}


}