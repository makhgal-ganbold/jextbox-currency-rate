<?php

/**
* @package    JExtBOX Currency Rate
* @author     Makhgal Ganbold
* @publisher  JExtBOX - BOX of Joomla Extensions (www.jextbox.com)
* @authorUrl  www.galaa.net
* @copyright  Copyright (C) 2026 Makhgal Ganbold
* @license    This extension in released under the GNU/GPL License - http://www.gnu.org/copyleft/gpl.html
*/

namespace Jextbox\Module\JextboxCurrencyRate\Site\Dispatcher;

defined('_JEXEC') or die;

use Joomla\CMS\Dispatcher\AbstractModuleDispatcher;
use Joomla\CMS\Helper\ModuleHelper;
use Jextbox\Module\JextboxCurrencyRate\Site\Helper\JextboxCurrencyRateHelper;

class Dispatcher extends AbstractModuleDispatcher
{

	protected function getLayoutData()
	{

		$data = parent::getLayoutData();
		$helper = new JextboxCurrencyRateHelper();

		$data['css_style'] = $data['params']->get('css_style', 'width:100%;height:210px;border:none;overflow:hidden;margin:0;');
		$data['src'] = $helper->getSrc($data['params']);

		return $data;

	}

}

?>
