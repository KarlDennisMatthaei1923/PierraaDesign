<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "go_maps_ext".
 *
 * Auto generated 20-07-2015 15:08
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Google Maps API Extbase',
	'description' => 'Google Maps Extension. Simply insert a google map Version 3 inc. jQuery, calculate a route,
										images for markers, style maps, KML, categories, responsive and many more.',
	'category' => 'plugin',
	'version' => '1.6.0',
	'state' => 'stable',
	'uploadfolder' => true,
	'createDirs' => 'uploads/tx_gomapsext',
	'clearcacheonload' => true,
	'author' => 'Marc Hirdes',
	'author_email' => 'Marc_Hirdes@gmx.de',
	'author_company' => 'clickstorm GmbH',
	'constraints' => 
	array (
		'depends' => 
		array (
			'extbase' => '6.2',
			'fluid' => '6.2',
			'typo3' => '6.2.0-7.9.99',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
);

