<?php

	function usuarios_xml(){

		$xml = simplexml_load_file("usuarios.xml");
		$json = json_encode($xml);
		$un_array = json_decode($json,TRUE);
		return($un_array);

	}
	
	
	function preferidos_xml(){

		$xml = simplexml_load_file("preferidos.xml");
		$json = json_encode($xml);
		$un_array = json_decode($json,TRUE);
		return($un_array);

	}



?>