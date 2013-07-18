<?php

/*
+---------------------------------------------------------------------------+
| Revive Adserver                                                           |
| http://www.revive-adserver.com                                            |
|                                                                           |
| Copyright: See the COPYRIGHT.txt file.                                    |
| License: GPLv2 or later, see the LICENSE.txt file.                        |
+---------------------------------------------------------------------------+
*/

require_once 'init.php';

require_once(PRS_PATH.'/PluginServer.php');

$server = new OX_PluginServer();
$server->xmlfile = '../release/releases.xml';

$server->start();

