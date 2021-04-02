<?php 	

/*

	spl_autoload_register(function($class_name)
	{
		$filename = "class".DIRECTORY_SEPARATOR.$class_name.".php";
		if(file_exists(($filename)))
		{
			require_once($filename);
		}
	});

*/

	spl_autoload_register(function($nome_class)
	{
		$filename = "class" . DIRECTORY_SEPARATOR . $nome_class .".php";
		
		if(file_exists($filename))
		{
			require_once($filename);
		}	
		
	})
	

?>