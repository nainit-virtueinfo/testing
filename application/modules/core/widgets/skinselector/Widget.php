<?php
/**
 * TomatoCMS
 * 
 * LICENSE
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE Version 2 
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-2.0.txt
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@tomatocms.com so we can send you a copy immediately.
 * 
 * @copyright	Copyright (c) 2009-2010 TIG Corporation (http://www.tig.vn)
 * @license		http://www.gnu.org/licenses/gpl-2.0.txt GNU GENERAL PUBLIC LICENSE Version 2
 * @version 	$Id: Widget.php 3971 2010-07-25 10:26:42Z huuphuoc $
 * @since		2.0.0
 */

class Core_Widgets_SkinSelector_Widget extends Tomato_Widget 
{
	protected function _prepareShow() 
	{
		$config   = Tomato_Config::getConfig();
		$template = $config->web->template;
		$this->_view->assign('currSkin', $config->web->skin);
		
		$file = TOMATO_APP_DIR . DS . 'templates' . DS . $template . DS . 'about.xml';
		if (file_exists($file)) {
			$xml   = new Zend_Config_Xml($file);
			$skins = $xml->skins;
			$this->_view->assign('skins', $skins);
		}
	}
}
