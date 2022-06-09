<?php
	
	define('server_name', 'sql213.epizy.com');
    define('db_user', 'epiz_31916794');
    define('db_pass', 'aV3n3QbwKzVXR');
	define('db_name', 'epiz_31916794_threeshield');

    //Connect to the database. If the connection fails, catch the exception
    try {
        $connection = new mysqli(server_name,db_user, db_pass, db_name);		//Using PHP Data Objects
    } catch(Exception $e){
		$myfile = fopen("log.txt", "a") or die("Unable to open file!");
		fwrite($myfile,$e);
		fclose($myfile);
        die("Connection failed"); // Force execution to stop on errors.
    }
	
?>