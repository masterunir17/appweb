<?php

/**
 * Configuration for database connection
 *
 */

$host       = "192.168.100.101";
$username   = "masterunir";
$password   = "administrador";
$dbname     = "masterunir";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );