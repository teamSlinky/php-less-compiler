<?php
/*!
*\file: compile.php
*\brief: Compiles the less into flat CSS output, and then writes it to a css file.
*/

// Call in the main 'Less.php' file 
require_once 'Less.php';


// Do the magic...
try{
    $parser = new Less_Parser();
    $parser->parseFile( $argv[1] ); // Input File
    $css = $parser->getCss();
    file_put_contents ( $argv[2] , $css); // Output file.
}catch(Exception $e){
    $error_message = $e->getMessage();
	echo $error_message;
}

?>