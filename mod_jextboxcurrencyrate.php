<?php

/*------------------------------------------------------------------------
# JExtBOX Currency Rate
# ------------------------------------------------------------------------
# author    Galaa
# copyright Copyright (C) 2013 Galaa. All Rights Reserved.
# @license - http://www.gnu.org/licenses/gpl.html
# Websites: http://galaa.mn
-------------------------------------------------------------------------*/

// no direct access
defined( "_JEXEC" ) or die( "Restricted access" );

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require(JModuleHelper::getLayoutPath('mod_jextboxcurrencyrate', $params->get('layout', 'default')));
