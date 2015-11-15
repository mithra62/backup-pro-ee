<?php
/**
 * mithra62 - Backup Pro
 *
 * @copyright	Copyright (c) 2015, mithra62, Eric Lamb.
 * @link		http://mithra62.com/
 * @version		3.0
 * @filesource 	./console.php
 */

if( php_sapi_name() !== 'cli' )
{
    exit;
}

if( !file_exists( './cli.config.php') )
{
    echo "Config file not set...";
    exit;
}

require_once dirname(__FILE__).'/vendor/autoload.php';

use mithra62\BackupPro\Platforms\Controllers\Console;

$config = include './cli.config.php';

$controller = new Console($config);
$controller->run();