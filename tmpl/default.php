<?php

/**
* @package       JExtBOX Currency Rate
* @author        Galaa
* @publisher     JExtBOX - BOX of Joomla Extensions (www.jextbox.com)
* @authorUrl     www.galaa.mn
* @copyright     copyright (C) 2013-2021 Galaa
* @license       This extension in released under the GNU/GPL License - http://www.gnu.org/copyleft/gpl.html
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

switch ($params->get('bank', 1))
{
	case 1: // ХААн банк
		$language = $params->get('language', 0) ? 'en' : 'mn';
		$src = '//www.khanbank.com/'.$language.'/home/ratesForSites';
		break;
	case 3: // ХХБ
		$language = $params->get('language', 0) ? 'en' : 'mn';
		$src = '//www.tdbm.mn/script.php?mod=rate&ln='.$language;
		break;
	default: // Монгол Банк
		$language = $params->get('language', 0) ? '&currency_title=Currency&currency_rate_title=Rate&source=Source' : '';
		$src = '//monxansh.appspot.com/xansh.html?currency=USD|EUR|JPY|GBP|RUB|CNY|KRW'.$language;
		break;
}

?>

<div class="<?php echo $moduleclass_sfx; ?>">
	<iframe
		style="<?php echo $params->get('css_style', 'width:100%;height:200px;border:none;overflow:hidden;margin:0;'); ?>" 
		src="<?php echo $src; ?>">
	</iframe>
</div>
