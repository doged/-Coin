<?php
/**
 * @author Chris S - AKA Someguy123
 * @version 0.01 (ALPHA!)
 * @license PUBLIC DOMAIN http://unlicense.org
 * @package +Coin - Bitcoin & forks Web Interface
 * This is the config file for +Coin
 * You MUST add your daemon host information to this
 * file, or it won't work.
 * 
 */

	$wallets = array();

	$wallets['wallet 1'] = array(
		"user" => "dogecoindarkrpc",  
		"pass" => "password",      
		"host" => "127.0.0.1",     
		"port" => 20102,
		"protocol" => "https"
	);

	/*
	$wallets['wallet 2'] = array(
		"user" => "username",  
		"pass" => "password",      
		"host" => "localhost",     
		"port" => 5000,
		"protocol" => "https"
	);
	*/
?>
