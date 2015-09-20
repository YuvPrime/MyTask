<?php
/**
* db_config.php
* MySQL connection parameters for 140dev Twitter database server
* Fill in these values for your database
* Latest copy of this code: http://140dev.com/free-twitter-api-source-code-library/
* @author Adam Green <140dev@gmail.com>
* @license GNU Public License
* @version BETA 0.30
*/
  $db_host = 'localhost';
  $db_user = 'yuva';
  $db_password = '';
  $db_name = 'streaming'; 
  $tag_name_one ="RWC2015";
  $tag_name_two = "Badaber";

  $connection = mysqli_connect($db_host,$db_user,$db_password,$db_name);


	
	// MySQL time zone setting to normalize dates
	define('TIME_ZONE','Asia/Kolkata');
?> 