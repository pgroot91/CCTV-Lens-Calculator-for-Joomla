<?php
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

/**
*
* @package Lens Calculator
* @copyright Patrick Groot; 
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Homepage: http://www.patrickgroot.com
* @version: 1.0 
* Created on December 10, 2012
*
**/

jimport('joomla.version');
$version = new JVersion();

$title = $params->get( 'title', '' );
$layout = $params->get('mymodulelayout', '');

$language = JFactory::getLanguage();
$language->load('mod_lens_calculator');

$document = JFactory::getDocument();
$document->addScript(Juri::base() . 'modules/mod_lens_calculator/assets/js/lens-calculator.js');

if ( ( substr($version->getShortVersion(), 0, 1) ) < '4' ) {
	$document->addStyleSheet(Juri::base() . 'modules/mod_lens_calculator/assets/css/lens-calculator-v3.css');
} else {
	$document->addStyleSheet(Juri::base() . 'modules/mod_lens_calculator/assets/css/lens-calculator.css');
}

require JModuleHelper::getLayoutPath('mod_lens_calculator', $params->get('layout', $layout));

?>