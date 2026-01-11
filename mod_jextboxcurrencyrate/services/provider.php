<?php

/**
* @package    JExtBOX Currency Rate
* @author     Makhgal Ganbold
* @publisher  JExtBOX - BOX of Joomla Extensions (www.jextbox.com)
* @authorUrl  www.galaa.net
* @copyright  Copyright (C) 2026 Makhgal Ganbold
* @license    This extension in released under the GNU/GPL License - http://www.gnu.org/copyleft/gpl.html
*/

\defined('_JEXEC') or die;

use Joomla\CMS\Extension\Service\Provider\HelperFactory;
use Joomla\CMS\Extension\Service\Provider\Module;
use Joomla\CMS\Extension\Service\Provider\ModuleDispatcherFactory;
use Joomla\DI\Container;
use Joomla\DI\ServiceProviderInterface;

return new class () implements ServiceProviderInterface {

	public function register(Container $container)
	{

		$container->registerServiceProvider(new ModuleDispatcherFactory('\\Jextbox\\Module\\JextboxCurrencyRate'));
		$container->registerServiceProvider(new HelperFactory('\\Jextbox\\Module\\JextboxCurrencyRate\\Site\\Helper'));
		$container->registerServiceProvider(new Module());

	}

};
