<?
// Insert the path where you unpacked log4php
include('log4php/Logger.php');
 
// Tell log4php to use our configuration file.
Logger::configure('config.xml');
 
// Fetch a logger, it will inherit settings from the root logger
$log = Logger::getLogger('yourLogger');
 
// Start logging
$log->trace("Your first message.");   // Not logged because TRACE < WARN
$log->debug("YourYour second message.");  // Not logged because DEBUG < WARN
$log->info("Your third message.");    // Not logged because INFO < WARN
$log->warn("Your fourth message.");   // Logged because WARN >= WARN
$log->error("Your fifth message.");   // Logged because ERROR >= WARN
$log->fatal("Your sixth message.");   // Logged because FATAL >= WARN
?>
File Logging