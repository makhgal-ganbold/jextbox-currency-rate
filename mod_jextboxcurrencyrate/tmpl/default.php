<?php

/**
* @package    JExtBOX Currency Rate
* @author     Makhgal Ganbold
* @publisher  JExtBOX - BOX of Joomla Extensions (www.jextbox.com)
* @authorUrl  www.galaa.net
* @copyright  Copyright (C) 2013-2026 Makhgal Ganbold
* @license    This extension in released under the GNU/GPL License - http://www.gnu.org/copyleft/gpl.html
*/

defined('_JEXEC') or die;

use Joomla\CMS\HTML\HTMLHelper;

$module_class = $params->get('moduleclass_sfx', '');

?>

<div class="<?php echo htmlspecialchars($module_class); ?>">
	<iframe style="<?php echo htmlspecialchars($css_style); ?>" src="<?php echo $src; ?>"></iframe>
</div>
