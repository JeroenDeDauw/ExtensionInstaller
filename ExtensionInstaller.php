<?php
/**
 * Initialization file for the Extension Installer extension.
 * 
 * @link https://www.mediawiki.org/wiki/Extension:Extension_Installer Documentation
 * @link https://www.mediawiki.org/wiki/Extension_talk:Extension_Installer Support
 * @link https://github.com/JeroenDeDauw/ExtensionInstaller Source Code
 *
 * @since 0.1
 *
 * @file
 * @ingroup ExtensionInstaller
 * @ingroup Extensions
 * @package MediaWiki
 *
 * @licence http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
 
/**
 * This documenation group collects source code files belonging to Extension Installer.
 *
 * @defgroup ExtensionInstaller Extension Installer
 */


if ( !defined( 'MEDIAWIKI' ) ) {
   die( 'This file is a MediaWiki extension and thus not a valid entry point.' );
}

if ( is_readable( __DIR__ . '/../../vendor/autoload.php' ) ) {
	include_once( __DIR__ . '/../../vendor/autoload.php' );
}

$GLOBALS['wgExtensionCredits']['other']['ExtensionInstaller'] = array(
	'path' => __FILE__,
	'name' => 'Extension Installer',
	'version' => '0.2.1',
	'author' => array(
		'[https://www.mediawiki.org/wiki/User:Jeroen_De_Dauw Jeroen De Dauw]',
	),
	'url' => 'https://github.com/JeroenDeDauw/ExtensionInstaller',
	'descriptionmsg' => 'exinst-desc'
);

$dir = dirname(__FILE__) . '/';
$wgExtensionMessagesFiles['ExtensionInstaller'] = $dir . 'ExtensionInstaller.i18n.php';
