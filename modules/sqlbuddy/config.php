<?php defined('EF5_SYSTEM') || exit;
/*---------------------------------------------------------------+
| eXtreme-Fusion - Content Management System - version 5         |
+----------------------------------------------------------------+
| Copyright (c) 2005-2012 The eXtreme-Fusion Crew                |
| http://www.extreme-fusion.org/                                 |
+----------------------------------------------------------------+
| The work is provided under the terms of this Creative Commons  |
| public license ("CCPL" or "License"). the work is protected by |
| copyright and/or other applicable law. Any use of the work     |
| other than as authorized under this license or copyright law   |
| is prohibited.                                                 |
|                                                                |
| By exercising any rights to the work provided here, you accept |
| and agree to be bound by the terms of this license. To the     |
| extent this license may be considered to be a contract, the    |
| licensor grants you the rights contained here in consideration |
| of your acceptance of such terms and conditions.               |
+----------------------------------------------------------------+
| http://creativecommons.org/licenses/by/3.0/pl/legalcode        |
+---------------------------------------------------------------*/

$mod_info = array(
	'title' => 'SQL Buddy',
	'description' => 'Podsystem do zarządzania zawartością bazy danych',
	'developer' => 'Calvin Lough',
	'support' => 'http://sqlbuddy.com/',
	'version' => '1.3.3',
	'dir' => 'sqlbuddy'
);

$admin_page[1] = array(
	'title' => 'SQL Buddy',
	'image' => 'images/sqlbuddy.png',
	'page' => 'files/index.php',
	'perm' => 'admin'
);

$perm[1] = array(
	'name' => 'admin',
	'desc' => 'Zarządzanie modułem SQL Buddy'
);