<?php

/**
* @package       JExtBOX Currency Rate
* @author        Galaa
* @publisher     JExtBOX - BOX of Joomla Extensions (www.jextbox.com)
* @authorUrl     www.galaa.mn
* @copyright     copyright (C) 2013 Galaa
* @license       This extension in released under the GNU/GPL License - http://www.gnu.org/copyleft/gpl.html
*/

// no direct access
defined( "_JEXEC" ) or die( "Restricted access" );

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require(JModuleHelper::getLayoutPath('mod_jextboxcurrencyrate', $params->get('layout', 'default')));
