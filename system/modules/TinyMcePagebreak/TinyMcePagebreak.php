<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2014 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Cliff Parnitzky 2013-2014
 * @author     Cliff Parnitzky
 * @package    TinyMcePagebreak
 * @license    LGPL
 * @license    LGPL
 */

/**
* Class TinyMcePagebreak
*
* Class to implement the HOOK for adding configs.
* @copyright  Cliff Parnitzky 2013-2014
* @author     Cliff Parnitzky
*/
class TinyMcePagebreak {
	
	/**
	 * Adding config for output behavoir
	 */
	public function editTinyMcePluginLoaderConfig ($arrTinyConfig) {
		$arrTinyConfig["pagebreak_separator"] = '"<p style=\"page-break-after: always; height: 0px;\"><img alt=\"\" _mce_src=\"plugins/tinyMCE/themes/advanced/img/trans.gif\" src=\"plugins/tinyMCE/themes/advanced/img/trans.gif\" class=\"mcePageBreak mceItemNoResize\" _moz_resizing=\"true\"></p>"';
		return $arrTinyConfig;
	}
}
 
?>