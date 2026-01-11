<?php

/**
* @package    JExtBOX Currency Rate
* @author     Makhgal Ganbold
* @publisher  JExtBOX - BOX of Joomla Extensions (www.jextbox.com)
* @authorUrl  www.galaa.net
* @copyright  Copyright (C) 2026 Makhgal Ganbold
* @license    This extension in released under the GNU/GPL License - http://www.gnu.org/copyleft/gpl.html
*/

namespace Jextbox\Module\JextboxCurrencyRate\Site\Helper;

defined('_JEXEC') or die;

class JextboxCurrencyRateHelper
{

	public function getSrc($moduleParams)
	{

		$languageParams = $moduleParams->get('language', 0) ? '&currency_title=Currency&currency_rate_title=Rate&source=Source' : '';
		$src = '//monxansh.appspot.com/xansh.html?currency=USD|EUR|JPY|GBP|RUB|CNY|KRW'.$languageParams;
		return $src;

	}

}

?>
