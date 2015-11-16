<?php
/**
 * @version     1.0.0
 * @package     com_dlcenter
 * @copyright   Copyright (C) 2015. Alle rettigheder forbeholdes.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Michael Kirkegaard <michael_k@mail.dk> - http://
 */

// No direct access.
defined('_JEXEC') or die;

require_once JPATH_COMPONENT.'/controller.php';

/**
 * Emner list controller class.
 */
class DlcenterControllerEmner extends DlcenterController
{
	/**
	 * Proxy for getModel.
	 * @since	1.6
	 */
	public function &getModel($name = 'Emner', $prefix = 'DlcenterModel', $config = array())
	{
		$model = parent::getModel($name, $prefix, array('ignore_request' => true));
		return $model;
	}
}