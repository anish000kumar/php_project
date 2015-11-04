<?php 

/* Registering the twig autoloader */

require_once ('../resources/Twig/Autoloader.php');
Twig_Autoloader::register();

/*Setting the filesystem for loader (view loader)*/

$loader= new Twig_Loader_Filesystem('../views');

/*Setting the Environment Variables*/

$twig= new Twig_Environment($loader,array(

	 // 'cache'=>'../resources/cache',
	));


 ?>