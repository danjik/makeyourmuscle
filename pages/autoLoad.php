<?php
function __autoload($className){
	$className = lcfirst ($className);
    $array_paths = array(
        '../models/', 
        '../controller/'
    );

    foreach($array_paths as $path)
    {

        $file = sprintf('%s%s.php', $path, $className);
        if(is_file($file)) 
        {
            require $file;
        } 

    }
}