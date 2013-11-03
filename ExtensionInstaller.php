<?php

if ( is_readable( __DIR__ . '/vendor/autoload.php' ) ) {
	include_once( __DIR__ . '/vendor/autoload.php' );
}

$wgExtensionCredits['other']['ExtensionInstaller'] = array(
	'path' => __FILE__,
	'name' => 'Extension Installer',
	'version' => '0.1',
	'author' => array(
		'[https://www.mediawiki.org/wiki/User:Jeroen_De_Dauw Jeroen De Dauw]',
	),
	'url' => 'https://github.com/JeroenDeDauw/ExtensionInstaller'
);
