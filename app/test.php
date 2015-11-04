<?php 
require_once ('twig_con.php');


/* Setting the view */

$template = $twig->loadTemplate('test.phtml');



/* Setting the variable array*/

$params = array(
    'id'=>1,
    'imageUrl' => 'skjhkjd',
    'name' => 'test',
    'email' => 'test@sjhg.com'
);

/* Passing the variables */

$template->display($params);

?>