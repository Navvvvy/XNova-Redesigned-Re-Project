<?php

/**
 * db.php
 *
 * @version 2.0
 * @copyright 2009 by MadnessRed for XNova Redesigned
 */

//Hacking check - primative but no point removing it really.
if(defined('INSIDE')){
	
	//include config.php
	include(ROOT_PATH.'config'.UNIVERSE.'.php');
	
	//print_r($dbsettings);
	
	if($dbsettings['type'] == 'mysql'){
		include(ROOT_PATH.'db/mysql.php');
	}elseif($dbsettings['type'] == 'sqlite'){
		include(ROOT_PATH.'db/sqlite.php');
	}else{
		include(ROOT_PATH.'db/mysql.php');
		//die("Error (#1):<br />No database type specified.");
	}
}

?>
